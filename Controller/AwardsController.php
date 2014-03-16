<?php
App::uses('AppController', 'Controller');
/**
 * Awards Controller
 *
 */
class AwardsController extends AppController {
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
		$this->Award->recursive = 0;
		$this->set('Awards', $this->Award->find('all'));
                $this->set('_serialize', array( 'Awards' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Award->exists($id)) {
			throw new NotFoundException(__('Invalid Award'));
		}
		$options = array('conditions' => array('Award.' . $this->Award->primaryKey => $id));
		$this->set('Award', $this->Award->find('first', $options));
                $this->set('_serialize', array( 'Award' ) );
	}
}

