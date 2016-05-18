<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Security;
use Cake\Utility\Text;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class ApisController extends AppController
{
    
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
        $this->viewBuilder()->className('Json');
    }
        
    public function login() {
        if ($this->request->is('post')) {
//            $user = $this->Auth->identify();
            $this->set('user', ['username' => $this->request->data('username')]);
            $this->set('token', Security::hash(Text::uuid()));
            $this->set('_serialize', ['user', 'token']);
        } else {
            $this->set('_serialize', []);
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
}
