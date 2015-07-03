<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BiblicalClasses Controller
 *
 * @property \App\Model\Table\BiblicalClassesTable $BiblicalClasses
 */
class BiblicalClassesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pgs', 'Teachers', 'Auxiliars']
        ];
        $this->set('biblicalClasses', $this->paginate($this->BiblicalClasses));
        $this->set('_serialize', ['biblicalClasses']);
    }

    /**
     * View method
     *
     * @param string|null $id Biblical Class id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $biblicalClass = $this->BiblicalClasses->get($id, [
            'contain' => ['Pgs', 'Teachers', 'Auxiliars', 'Users']
        ]);
        $this->set('biblicalClass', $biblicalClass);
        $this->set('_serialize', ['biblicalClass']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $biblicalClass = $this->BiblicalClasses->newEntity();
        if ($this->request->is('post')) {
            $biblicalClass = $this->BiblicalClasses->patchEntity($biblicalClass, $this->request->data);
            if ($this->BiblicalClasses->save($biblicalClass)) {
                $this->Flash->success(__('The biblical class has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biblical class could not be saved. Please, try again.'));
            }
        }
        $pgs = $this->BiblicalClasses->Pgs->find('list', ['limit' => 200]);
        $teachers = $this->BiblicalClasses->Teachers->find('list', ['limit' => 200]);
        $auxiliars = $this->BiblicalClasses->Auxiliars->find('list', ['limit' => 200]);
        $this->set(compact('biblicalClass', 'pgs', 'teachers', 'auxiliars'));
        $this->set('_serialize', ['biblicalClass']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Biblical Class id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $biblicalClass = $this->BiblicalClasses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $biblicalClass = $this->BiblicalClasses->patchEntity($biblicalClass, $this->request->data);
            if ($this->BiblicalClasses->save($biblicalClass)) {
                $this->Flash->success(__('The biblical class has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The biblical class could not be saved. Please, try again.'));
            }
        }
        $pgs = $this->BiblicalClasses->Pgs->find('list', ['limit' => 200]);
        $teachers = $this->BiblicalClasses->Teachers->find('list', ['limit' => 200]);
        $auxiliars = $this->BiblicalClasses->Auxiliars->find('list', ['limit' => 200]);
        $this->set(compact('biblicalClass', 'pgs', 'teachers', 'auxiliars'));
        $this->set('_serialize', ['biblicalClass']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Biblical Class id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $biblicalClass = $this->BiblicalClasses->get($id);
        if ($this->BiblicalClasses->delete($biblicalClass)) {
            $this->Flash->success(__('The biblical class has been deleted.'));
        } else {
            $this->Flash->error(__('The biblical class could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
