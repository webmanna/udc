<?php
App::uses('AppController', 'Controller');
/**
 * Levels Controller
 *
 */
class LevelsController extends AppController {
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
		$this->Level->recursive = 0;
		$this->set('Levels', $this->Level->find('all'));
                $this->set('_serialize', array( 'Levels' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Level->exists($id)) {
			throw new NotFoundException(__('Invalid Level'));
		}
		$options = array('conditions' => array('Level.' . $this->Level->primaryKey => $id));
		$this->set('Level', $this->Level->find('first', $options));
                $this->set('_serialize', array( 'Level' ) );
	}
}
