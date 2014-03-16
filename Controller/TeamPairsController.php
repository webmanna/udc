<?php
App::uses('AppController', 'Controller');
/**
 * TeamPairs Controller
 *
 */
class TeamPairsController extends AppController {
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
		$this->TeamPair->recursive = 0;
		$this->set('TeamPairs', $this->TeamPair->find('all'));
                $this->set('_serialize', array( 'TeamPairs' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TeamPair->exists($id)) {
			throw new NotFoundException(__('Invalid TeamPair'));
		}
		$options = array('conditions' => array('TeamPair.' . $this->TeamPair->primaryKey => $id));
		$this->set('TeamPair', $this->TeamPair->find('first', $options));
                $this->set('_serialize', array( 'TeamPair' ) );
	}
}
