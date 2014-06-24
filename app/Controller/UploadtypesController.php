<?php
App::uses('AppController', 'Controller');
/**
 * Uploadtypes Controller
 *
 * @property Uploadtype $Uploadtype
 * @property PaginatorComponent $Paginator
 */
class UploadtypesController extends AppController {

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
		$this->Uploadtype->recursive = 0;
		$this->set('uploadtypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Uploadtype->exists($id)) {
			throw new NotFoundException(__('Invalid uploadtype'));
		}
		$options = array('conditions' => array('Uploadtype.' . $this->Uploadtype->primaryKey => $id));
		$this->set('uploadtype', $this->Uploadtype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Uploadtype->create();
			if ($this->Uploadtype->save($this->request->data)) {
				$this->Session->setFlash(__('The uploadtype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uploadtype could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Uploadtype->exists($id)) {
			throw new NotFoundException(__('Invalid uploadtype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Uploadtype->save($this->request->data)) {
				$this->Session->setFlash(__('The uploadtype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uploadtype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Uploadtype.' . $this->Uploadtype->primaryKey => $id));
			$this->request->data = $this->Uploadtype->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Uploadtype->id = $id;
		if (!$this->Uploadtype->exists()) {
			throw new NotFoundException(__('Invalid uploadtype'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Uploadtype->delete()) {
			$this->Session->setFlash(__('The uploadtype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The uploadtype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
