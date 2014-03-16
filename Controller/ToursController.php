<?php
App::uses('AppController', 'Controller');
/**
 * Tours Controller
 *
 */
class ToursController extends AppController {
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
		$this->Tour->recursive = 0;
		$this->set('Tours', $this->Tour->find('all'));
                $this->set('_serialize', array( 'Tours' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tour->exists($id)) {
			throw new NotFoundException(__('Invalid Tour'));
		}
		$options = array('conditions' => array('Tour.' . $this->Tour->primaryKey => $id));
		$this->set('Tour', $this->Tour->find('first', $options));
                $this->set('_serialize', array( 'Tour' ) );
	}
}
