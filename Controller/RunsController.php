<?php
App::uses('AppController', 'Controller');
/**
 * Runs Controller
 *
 * @property Run $Run
 * @property PaginatorComponent $Paginator
 */
class RunsController extends AppController {

/**
 * Components
 *
 * @var array
 */
        public $scaffold = 'admin';
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Run->recursive = 0;
		$this->set('runs', $this->Paginator->paginate());
		$this->set('_serialize', array('runs'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Run->exists($id)) {
			throw new NotFoundException(__('Invalid run'));
		}
		$options = array('conditions' => array('Run.' . $this->Run->primaryKey => $id));
		$this->set('run', $this->Run->find('first', $options));
                $this->set('_serialize', array('run'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Run->exists($id)) {
			throw new NotFoundException(__('Invalid run'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Run->save($this->request->data)) {
				$this->Session->setFlash(__('The run has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The run could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Run.' . $this->Run->primaryKey => $id));
			$this->request->data = $this->Run->find('first', $options);
		}
		$rounds = $this->Run->Round->find('list');
		$teamPairs = $this->Run->TeamPair->find('list');
		$actions = $this->Run->Action->find('list');
		$this->set(compact('rounds', 'teamPairs', 'actions'));
	}
}