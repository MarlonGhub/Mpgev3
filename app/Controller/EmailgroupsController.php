<?php
App::uses('AppController', 'Controller');
/**
 * Emailgroups Controller
 *
 * @property Emailgroup $Emailgroup
 * @property PaginatorComponent $Paginator
 */
class EmailgroupsController extends AppController {

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
		$this->Emailgroup->recursive = 0;
		$this->set('emailgroups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Emailgroup->exists($id)) {
			throw new NotFoundException(__('Invalid emailgroup'));
		}
		$options = array('conditions' => array('Emailgroup.' . $this->Emailgroup->primaryKey => $id));
		$this->set('emailgroup', $this->Emailgroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Emailgroup->create();
			if ($this->Emailgroup->save($this->request->data)) {
				$this->Session->setFlash(__('The emailgroup has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The emailgroup could not be saved. Please, try again.'));
			}
		}
		$users = $this->Emailgroup->User->find('list');
		$notifications = $this->Emailgroup->Notification->find('list');
		$users = $this->Emailgroup->User->find('list');
		$this->set(compact('users', 'notifications', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Emailgroup->exists($id)) {
			throw new NotFoundException(__('Invalid emailgroup'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Emailgroup->save($this->request->data)) {
				$this->Session->setFlash(__('The emailgroup has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The emailgroup could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Emailgroup.' . $this->Emailgroup->primaryKey => $id));
			$this->request->data = $this->Emailgroup->find('first', $options);
		}
		$users = $this->Emailgroup->User->find('list');
		$notifications = $this->Emailgroup->Notification->find('list');
		$users = $this->Emailgroup->User->find('list');
		$this->set(compact('users', 'notifications', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Emailgroup->id = $id;
		if (!$this->Emailgroup->exists()) {
			throw new NotFoundException(__('Invalid emailgroup'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Emailgroup->delete()) {
			$this->Session->setFlash(__('The emailgroup has been deleted.'));
		} else {
			$this->Session->setFlash(__('The emailgroup could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
