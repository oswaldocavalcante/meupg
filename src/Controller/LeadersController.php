<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Leaders Controller
 *
 * @property \App\Model\Table\LeadersTable $Leaders
 */
class LeadersController extends AppController
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
        $this->set('leaders', $this->paginate($this->Leaders));
        $this->set('_serialize', ['leaders']);
    }

    /**
     * View method
     *
     * @param string|null $id Leader id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $leader = $this->Leaders->get($id, [
            'contain' => ['Users', 'Pgs']
        ]);
        $this->set('leader', $leader);
        $this->set('_serialize', ['leader']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $leader = $this->Leaders->newEntity();
        if ($this->request->is('post')) {
            $leader = $this->Leaders->patchEntity($leader, $this->request->data);
            if ($this->Leaders->save($leader)) {
                $this->Flash->success(__('The leader has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The leader could not be saved. Please, try again.'));
            }
        }
        $users = $this->Leaders->Users->find('list', ['limit' => 200]);
        $this->set(compact('leader', 'users'));
        $this->set('_serialize', ['leader']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Leader id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $leader = $this->Leaders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leader = $this->Leaders->patchEntity($leader, $this->request->data);
            if ($this->Leaders->save($leader)) {
                $this->Flash->success(__('The leader has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The leader could not be saved. Please, try again.'));
            }
        }
        $users = $this->Leaders->Users->find('list', ['limit' => 200]);
        $this->set(compact('leader', 'users'));
        $this->set('_serialize', ['leader']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Leader id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $leader = $this->Leaders->get($id);
        if ($this->Leaders->delete($leader)) {
            $this->Flash->success(__('The leader has been deleted.'));
        } else {
            $this->Flash->error(__('The leader could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
