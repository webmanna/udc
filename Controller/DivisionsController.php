<?php
App::uses('AppController', 'Controller');
/**
 * Divisions Controller
 *
 */
class DivisionsController extends AppController {
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
		$this->Division->recursive = 0;
		$this->set('Divisions', $this->Division->find('all'));
                $this->set('_serialize', array( 'Divisions' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Division->exists($id)) {
			throw new NotFoundException(__('Invalid Division'));
		}
		$options = array('conditions' => array('Division.' . $this->Division->primaryKey => $id));
		$this->set('Division', $this->Division->find('first', $options));
                $this->set('_serialize', array( 'Division' ) );
	}
}
