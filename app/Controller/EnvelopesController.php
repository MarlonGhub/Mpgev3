<?php
App::uses('AppController', 'Controller');
/**
 * Envelopes Controller
 *
 * @property Envelope $Envelope
 * @property PaginatorComponent $Paginator
 */
class EnvelopesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Envelope->recursive = 0;
		$this->set('envelopes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Envelope->exists($id)) {
			throw new NotFoundException(__('Invalid envelope'));
		}
		$options = array('conditions' => array('Envelope.' . $this->Envelope->primaryKey => $id));
		$this->set('envelope', $this->Envelope->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Envelope->create();
			if ($this->Envelope->save($this->request->data)) {
				$this->Session->setFlash(__('The envelope has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The envelope could not be saved. Please, try again.'));
			}
		}
		$jobtypes = $this->Envelope->Jobtype->find('list');
		$this->set(compact('jobtypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Envelope->exists($id)) {
			throw new NotFoundException(__('Invalid envelope'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Envelope->save($this->request->data)) {
				$this->Session->setFlash(__('The envelope has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The envelope could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Envelope.' . $this->Envelope->primaryKey => $id));
			$this->request->data = $this->Envelope->find('first', $options);
		}
		$jobtypes = $this->Envelope->Jobtype->find('list');
		$this->set(compact('jobtypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Envelope->id = $id;
		if (!$this->Envelope->exists()) {
			throw new NotFoundException(__('Invalid envelope'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Envelope->delete()) {
			$this->Session->setFlash(__('The envelope has been deleted.'));
		} else {
			$this->Session->setFlash(__('The envelope could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
