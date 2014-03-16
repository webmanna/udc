<?php
App::uses('AppController', 'Controller');
/**
 * Dogs Controller
 *
 */
class DogsController extends AppController {
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
		$this->Dog->recursive = 0;
		$this->set('Dogs', $this->Dog->find('all'));
                $this->set('_serialize', array( 'Dogs' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dog->exists($id)) {
			throw new NotFoundException(__('Invalid Dog'));
		}
		$options = array('conditions' => array('Dog.' . $this->Dog->primaryKey => $id));
		$this->set('Dog', $this->Dog->find('first', $options));
                $this->set('_serialize', array( 'Dog' ) );
	}
}
