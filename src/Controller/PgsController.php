<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pgs Controller
 *
 * @property \App\Model\Table\PgsTable $Pgs
 */
class PgsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Leaders', 'Secretaries']
        ];
        $this->set('pgs', $this->paginate($this->Pgs));
        $this->set('_serialize', ['pgs']);
    }

    /**
     * View method
     *
     * @param string|null $id Pg id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pg = $this->Pgs->get($id, [
            'contain' => ['Leaders', 'Secretaries', 'BiblicalClasses', 'Users']
        ]);
        $this->set('pg', $pg);
        $this->set('_serialize', ['pg']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pg = $this->Pgs->newEntity();
        if ($this->request->is('post')) {
            $pg = $this->Pgs->patchEntity($pg, $this->request->data);
            if ($this->Pgs->save($pg)) {
                $this->Flash->success(__('The pg has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pg could not be saved. Please, try again.'));
            }
        }
        $leaders = $this->Pgs->Leaders->find('list', ['limit' => 200]);
        $secretaries = $this->Pgs->Secretaries->find('list', ['limit' => 200]);
        $this->set(compact('pg', 'leaders', 'secretaries'));
        $this->set('_serialize', ['pg']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pg id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pg = $this->Pgs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pg = $this->Pgs->patchEntity($pg, $this->request->data);
            if ($this->Pgs->save($pg)) {
                $this->Flash->success(__('The pg has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pg could not be saved. Please, try again.'));
            }
        }
        $leaders = $this->Pgs->Leaders->find('list', ['limit' => 200]);
        $secretaries = $this->Pgs->Secretaries->find('list', ['limit' => 200]);
        $this->set(compact('pg', 'leaders', 'secretaries'));
        $this->set('_serialize', ['pg']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pg id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pg = $this->Pgs->get($id);
        if ($this->Pgs->delete($pg)) {
            $this->Flash->success(__('The pg has been deleted.'));
        } else {
            $this->Flash->error(__('The pg could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
