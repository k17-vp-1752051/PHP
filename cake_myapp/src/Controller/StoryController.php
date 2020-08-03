<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Story Controller
 *
 * @method \App\Model\Entity\Story[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StoryController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $story = $this->paginate($this->Story);

        $this->set(compact('story'));
    }

    /**
     * View method
     *
     * @param string|null $id Story id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $story = $this->Story->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('story'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $story = $this->Story->newEmptyEntity();
        if ($this->request->is('post')) {
            $story = $this->Story->patchEntity($story, $this->request->getData());
            if ($this->Story->save($story)) {
                $this->Flash->success(__('The story has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The story could not be saved. Please, try again.'));
        }
        $this->set(compact('story'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Story id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $story = $this->Story->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $story = $this->Story->patchEntity($story, $this->request->getData());
            if ($this->Story->save($story)) {
                $this->Flash->success(__('The story has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The story could not be saved. Please, try again.'));
        }
        $this->set(compact('story'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Story id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $story = $this->Story->get($id);
        if ($this->Story->delete($story)) {
            $this->Flash->success(__('The story has been deleted.'));
        } else {
            $this->Flash->error(__('The story could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
