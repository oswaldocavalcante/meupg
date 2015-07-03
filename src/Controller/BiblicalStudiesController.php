<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BiblicalStudies Controller
 *
 * @property \App\Model\Table\BiblicalStudiesTable $BiblicalStudies
 */
class BiblicalStudiesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('biblicalStudies', $this->paginate($this->BiblicalStudies));
        $this->set('_serialize', ['biblicalStudies']);
    }

    /**
     * View method
     *
     * @param string|null $id Biblical Study id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $biblicalStudy = $this->BiblicalStudies->get($id, [
            'contain' => []
        ]);
        $this->set('biblicalStudy', $biblicalStudy);
        $this->set('_serialize', ['biblicalStudy']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $biblicalStudy = $this->BiblicalStudies->newEntity();
        if ($this->request->is('post')) {
            $biblicalStudy = $this->BiblicalStudies->patchEntity($biblicalStudy, $this->request->data);
            if ($this->BiblicalStudies->save($biblicalStudy)) {
                $this->Flash->success(__('The biblical study has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biblical study could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('biblicalStudy'));
        $this->set('_serialize', ['biblicalStudy']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Biblical Study id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $biblicalStudy = $this->BiblicalStudies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $biblicalStudy = $this->BiblicalStudies->patchEntity($biblicalStudy, $this->request->data);
            if ($this->BiblicalStudies->save($biblicalStudy)) {
                $this->Flash->success(__('The biblical study has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biblical study could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('biblicalStudy'));
        $this->set('_serialize', ['biblicalStudy']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Biblical Study id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $biblicalStudy = $this->BiblicalStudies->get($id);
        if ($this->BiblicalStudies->delete($biblicalStudy)) {
            $this->Flash->success(__('The biblical study has been deleted.'));
        } else {
            $this->Flash->error(__('The biblical study could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
