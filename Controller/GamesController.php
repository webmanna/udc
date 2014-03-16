<?php
App::uses('AppController', 'Controller');
/**
 * Games Controller
 *
 */
class GamesController extends AppController {
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
		$this->Game->recursive = 0;
		$this->set('Games', $this->Game->find('all'));
                $this->set('_serialize', array( 'Games' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Game->exists($id)) {
			throw new NotFoundException(__('Invalid Game'));
		}
		$options = array('conditions' => array('Game.' . $this->Game->primaryKey => $id));
		$this->set('Game', $this->Game->find('first', $options));
                $this->set('_serialize', array( 'Game' ) );
	}
}
