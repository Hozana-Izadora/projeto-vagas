<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Jobs Controller
 *
 * @property \App\Model\Table\JobsTable $Jobs
 * @method \App\Model\Entity\Job[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JobsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $jobs = $this->Jobs->find('all')->orderDesc('created');

        /**
         * SELECT * FROM jobs ORDER BY created DESC
         */

        $this->set(compact('jobs'));
    }


    /**
     * View method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $job = $this->Jobs->get($id, [
            'contain' => ['Users'],
        ]);
        /**
         * SELECT * FROM jobs WHERE id = $id ORDER BY created DESC
         */
        $this->set(compact('job'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $job = $this->Jobs->newEmptyEntity();
        if ($this->request->is('post')) {
            $job = $this->Jobs->patchEntity($job, $this->request->getData());
            if ($this->Jobs->save($job)) {

                /**
                 *INSERT INTO `jobs`(`cargo`, `descricao`, `requisitos`, `diferenciais`, `salario`, `contato`, `validade`, `user_id`, `created`, `modified`) 
                 *VALUES (`cargo`, `descricao`, `requisitos`, `diferenciais`, `salario`, `contato`, `validade`, `user_id`, `created`, `modified`) 
                 */
                $this->Flash->success(__('A vaga foi cadastrada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A vaga não foi cadastrada. Por favor, tente novamente.'));
        }
        $users = $this->Jobs->Users->find('list', ['limit' => 200]);
        $this->set(compact('job', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $job = $this->Jobs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $job = $this->Jobs->patchEntity($job, $this->request->getData());
            if ($this->Jobs->save($job)) {

                /**
                 * UPDATE `jobs` SET `id_job`=[value-1],`cargo`=[value-2],`descricao`=[value-3],`requisitos`=[value-4],`diferenciais`=[value-5],`salario`=[value-6],`contato`=[value-7],`validade`=[value-8],`user_id`=[value-9],`created`=[value-10],`modified`=[value-11] WHERE id = $id
                 */
                $this->Flash->success(__('A vaga foi editada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A vaga não foi editada. Por favor, tente novamente.'));
        }
        $users = $this->Jobs->Users->find('list', ['limit' => 200]);
        $this->set(compact('job', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $job = $this->Jobs->get($id);
        if ($this->Jobs->delete($job)) {
            /**
             * DELETE FROM `jobs` WHERE id = $id
             */
            $this->Flash->success(__('A vaga foi deletada.'));
        } else {
            $this->Flash->error(__('A vaga não foi deletada. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
