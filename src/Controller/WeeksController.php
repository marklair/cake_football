<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Weeks Controller
 *
 * @property \App\Model\Table\WeeksTable $Weeks
 * @method \App\Model\Entity\Week[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WeeksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Seasons'],
        ];
        $weeks = $this->paginate($this->Weeks);

        $this->set(compact('weeks'));
    }

    /**
     * View method
     *
     * @param string|null $id Week id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $week = $this->Weeks->get($id, [
            'contain' => ['Seasons', 'Games'],
        ]);

        $this->set(compact('week'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $week = $this->Weeks->newEmptyEntity();
        if ($this->request->is('post')) {
            $week = $this->Weeks->patchEntity($week, $this->request->getData());
            if ($this->Weeks->save($week)) {
                $this->Flash->success(__('The week has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The week could not be saved. Please, try again.'));
        }
        $seasons = $this->Weeks->Seasons->find('list', ['limit' => 200])->all();
        $this->set(compact('week', 'seasons'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Week id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $week = $this->Weeks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $week = $this->Weeks->patchEntity($week, $this->request->getData());
            if ($this->Weeks->save($week)) {
                $this->Flash->success(__('The week has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The week could not be saved. Please, try again.'));
        }
        $seasons = $this->Weeks->Seasons->find('list', ['limit' => 200])->all();
        $this->set(compact('week', 'seasons'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Week id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $week = $this->Weeks->get($id);
        if ($this->Weeks->delete($week)) {
            $this->Flash->success(__('The week has been deleted.'));
        } else {
            $this->Flash->error(__('The week could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
