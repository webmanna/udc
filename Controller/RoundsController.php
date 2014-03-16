<?php
App::uses('AppController', 'Controller');
/**
 * Rounds Controller
 *
 */
class RoundsController extends AppController {
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
		$this->Round->recursive = 0;
		$this->set('Rounds', $this->Round->find('all'));
                $this->set('_serialize', array( 'Rounds' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Round->exists($id)) {
			throw new NotFoundException(__('Invalid Round'));
		}
		$options = array('conditions' => array('Round.' . $this->Round->primaryKey => $id));
		$this->set('Round', $this->Round->find('first', $options));
                $this->set('_serialize', array( 'Round' ) );
	}
}
