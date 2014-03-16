<?php
App::uses('AppController', 'Controller');
/**
 * AwardsDogs Controller
 *
 */
class AwardsDogsController extends AppController {
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
		$this->AwardsDog->recursive = 0;
		$this->set('AwardsDogs', $this->AwardsDog->find('all'));
                $this->set('_serialize', array( 'AwardsDogs' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AwardsDog->exists($id)) {
			throw new NotFoundException(__('Invalid AwardsDog'));
		}
		$options = array('conditions' => array('AwardsDog.' . $this->AwardsDog->primaryKey => $id));
		$this->set('AwardsDog', $this->AwardsDog->find('first', $options));
                $this->set('_serialize', array( 'AwardsDog' ) );
	}
}
