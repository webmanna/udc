<?php
App::uses('AppController', 'Controller');
/**
 * ActionsRuns Controller
 *
 */
class ActionsRunsController extends AppController {
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
		$this->ActionRun->recursive = 0;
		$this->set('ActionRuns', $this->ActionRun->find('all'));
                $this->set('_serialize', array( 'ActionRuns' ) );
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ActionRun->exists($id)) {
			throw new NotFoundException(__('Invalid ActionRun'));
		}
		$options = array('conditions' => array('ActionRun.' . $this->ActionRun->primaryKey => $id));
		$this->set('ActionRun', $this->ActionRun->find('first', $options));
                $this->set('_serialize', array( 'ActionRun' ) );
	}
}
