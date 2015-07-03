<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Secretaries Controller
 *
 * @property \App\Model\Table\SecretariesTable $Secretaries
 */
class SecretariesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $this->set('secretaries', $this->paginate($this->Secretaries));
        $this->set('_serialize', ['secretaries']);
    }

    /**
     * View method
     *
     * @param string|null $id Secretary id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $secretary = $this->Secretaries->get($id, [
            'contain' => ['Users', 'Pgs']
        ]);
        $this->set('secretary', $secretary);
        $this->set('_serialize', ['secretary']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $secretary = $this->Secretaries->newEntity();
        if ($this->request->is('post')) {
            $secretary = $this->Secretaries->patchEntity($secretary, $this->request->data);
            if ($this->Secretaries->save($secretary)) {
                $this->Flash->success(__('The secretary has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The secretary could not be saved. Please, try again.'));
            }
        }
        $users = $this->Secretaries->Users->find('list', ['limit' => 200]);
        $this->set(compact('secretary', 'users'));
        $this->set('_serialize', ['secretary']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Secretary id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $secretary = $this->Secretaries->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $secretary = $this->Secretaries->patchEntity($secretary, $this->request->data);
            if ($this->Secretaries->save($secretary)) {
                $this->Flash->success(__('The secretary has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The secretary could not be saved. Please, try again.'));
            }
        }
        $users = $this->Secretaries->Users->find('list', ['limit' => 200]);
        $this->set(compact('secretary', 'users'));
        $this->set('_serialize', ['secretary']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Secretary id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $secretary = $this->Secretaries->get($id);
        if ($this->Secretaries->delete($secretary)) {
            $this->Flash->success(__('The secretary has been deleted.'));
        } else {
            $this->Flash->error(__('The secretary could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
