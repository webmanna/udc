<?php
App::uses('AppController', 'Controller');
/**
 * AwardsTeamPairs Controller
 *
 */
class AwardsTeamPairsController extends AppController {
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
		$this->AwardsTeamPair->recursive = 0;
		$this->set('AwardsTeamPairs', $this->AwardsTeamPair->find('all'));
                $this->set('_serialize', array( 'AwardsTeamPairs' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AwardsTeamPair->exists($id)) {
			throw new NotFoundException(__('Invalid AwardsTeamPair'));
		}
		$options = array('conditions' => array('AwardsTeamPair.' . $this->AwardsTeamPair->primaryKey => $id));
		$this->set('AwardsTeamPair', $this->AwardsTeamPair->find('first', $options));
                $this->set('_serialize', array( 'AwardsTeamPair' ) );
	}
}
