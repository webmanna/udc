<?php
App::uses('AppController', 'Controller');
/**
 * Handlers Controller
 *
 */
class HandlersController extends AppController {
/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold = 'admin';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Handler->recursive = 0;
		$this->set('Handlers', $this->Handler->find('all'));
                $this->set('_serialize', array( 'Handlers' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Handler->exists($id)) {
			throw new NotFoundException(__('Invalid Handler'));
		}
		$options = array('conditions' => array('Handler.' . $this->Handler->primaryKey => $id));
		$this->set('Handler', $this->Handler->find('first', $options));
                $this->set('_serialize', array( 'Handler' ) );
	}
}
