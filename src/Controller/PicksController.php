<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Picks Controller
 *
 * @property \App\Model\Table\PicksTable $Picks
 * @method \App\Model\Entity\Pick[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PicksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Games', 'Teams'],
        ];
        $picks = $this->paginate($this->Picks);

        $this->set(compact('picks'));
    }

    /**
     * View method
     *
     * @param string|null $id Pick id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pick = $this->Picks->get($id, [
            'contain' => ['Users', 'Games', 'Teams'],
        ]);

        $this->set(compact('pick'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pick = $this->Picks->newEmptyEntity();
        if ($this->request->is('post')) {
            $pick = $this->Picks->patchEntity($pick, $this->request->getData());
            if ($this->Picks->save($pick)) {
                $this->Flash->success(__('The pick has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pick could not be saved. Please, try again.'));
        }
        $users = $this->Picks->Users->find('list', ['limit' => 200])->all();
        $games = $this->Picks->Games->find('list', ['limit' => 200])->all();
        $teams = $this->Picks->Teams->find('list', ['limit' => 200])->all();
        $this->set(compact('pick', 'users', 'games', 'teams'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pick id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pick = $this->Picks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pick = $this->Picks->patchEntity($pick, $this->request->getData());
            if ($this->Picks->save($pick)) {
                $this->Flash->success(__('The pick has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pick could not be saved. Please, try again.'));
        }
        $users = $this->Picks->Users->find('list', ['limit' => 200])->all();
        $games = $this->Picks->Games->find('list', ['limit' => 200])->all();
        $teams = $this->Picks->Teams->find('list', ['limit' => 200])->all();
        $this->set(compact('pick', 'users', 'games', 'teams'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pick id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pick = $this->Picks->get($id);
        if ($this->Picks->delete($pick)) {
            $this->Flash->success(__('The pick has been deleted.'));
        } else {
            $this->Flash->error(__('The pick could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
