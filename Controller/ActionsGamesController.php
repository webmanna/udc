<?php
App::uses('AppController', 'Controller');
/**
 * ActionsGames Controller
 *
 */
class ActionsGamesController extends AppController {
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
		$this->ActionGame->recursive = 0;
		$this->set('ActionGames', $this->ActionGame->find('all'));
                $this->set('_serialize', array( 'ActionGames' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActionGame->exists($id)) {
			throw new NotFoundException(__('Invalid ActionGame'));
		}
		$options = array('conditions' => array('ActionGame.' . $this->ActionGame->primaryKey => $id));
		$this->set('ActionGame', $this->ActionGame->find('first', $options));
                $this->set('_serialize', array( 'ActionGame' ) );
	}
}
