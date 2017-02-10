<?php
namespace App\Controller;

trait WebAuthTrait {

	public function initialize() {
		parent::initialize();
		
		$this->loadComponent('RequestHandler');
		$this->loadComponent('Flash');
	
		$this->loadComponent('Auth', [
				'loginRedirect' => [
						'controller' => 'Projects',
						'action' => 'index'
				],
				'logoutRedirect' => '/',
				'authenticate' => [
						'Form' => [
								'fields' => ['username' => 'email', 'password' => 'password']
						]
				],
		]);
	}
		
	public function setLoggedInUser() {
		$this->set('loggedin_user', $this->getUser());
	}
	
	protected function getUser() {
		return $this->Auth->user();
	}
	
	protected function getUserId() {
		return $this->Auth->user('id');
	}
}