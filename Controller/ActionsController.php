<?php
App::uses('AppController', 'Controller');
/**
 * Actions Controller
 *
 */
class ActionsController extends AppController {
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
		$this->Action->recursive = 0;
		$this->set('Actions', $this->Action->find('all'));
                $this->set('_serialize', array( 'Actions' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Action->exists($id)) {
			throw new NotFoundException(__('Invalid Action'));
		}
		$options = array('conditions' => array('Action.' . $this->Action->primaryKey => $id));
		$this->set('Action', $this->Action->find('first', $options));
                $this->set('_serialize', array( 'Action' ) );
	}
}
