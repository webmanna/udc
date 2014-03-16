<?php
App::uses('AppController', 'Controller');
/**
 * AwardsHandlers Controller
 *
 */
class AwardsHandlersController extends AppController {
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
		$this->AwardsHandler->recursive = 0;
		$this->set('AwardsHandlers', $this->AwardsHandler->find('all'));
                $this->set('_serialize', array( 'AwardsHandlers' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AwardsHandler->exists($id)) {
			throw new NotFoundException(__('Invalid AwardsHandler'));
		}
		$options = array('conditions' => array('AwardsHandler.' . $this->AwardsHandler->primaryKey => $id));
		$this->set('AwardsHandler', $this->AwardsHandler->find('first', $options));
                $this->set('_serialize', array( 'AwardsHandler' ) );
	}
}
