<?php
namespace App\Controller;

use Cake\Event\Event;

/**
 * Class UsersController
 * @package App\Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController {

    use WebAuthTrait;

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['register', 'logout']);
    }

    public function register() {
        $user = $this->Users->newEntity();

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);

            if ($this->Users->save($user)) {
                $this->Flash->success('You have been registered.');

                return $this->redirect(['action' => 'login']);
            } else {

                $this->Flash->error('Could not register.');
            }
        }

        $this->set(compact('user'));
    }

    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid password or email.'));
        }
    }


}