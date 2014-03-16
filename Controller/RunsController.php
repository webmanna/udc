<?php
App::uses('AppController', 'Controller');
/**
 * Runs Controller
 *
 */
class RunsController extends AppController {
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
		$this->Run->recursive = 0;
		$this->set('Runs', $this->Run->find('all'));
                $this->set('_serialize', array( 'Runs' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Run->exists($id)) {
			throw new NotFoundException(__('Invalid Run'));
		}
		$options = array('conditions' => array('Run.' . $this->Run->primaryKey => $id));
		$this->set('Run', $this->Run->find('first', $options));
                $this->set('_serialize', array( 'Run' ) );
	}
}
