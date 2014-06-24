<?php
App::uses('AppController', 'Controller');
/**
 * EmailgroupsUsers Controller
 *
 * @property EmailgroupsUser $EmailgroupsUser
 * @property PaginatorComponent $Paginator
 */
class EmailgroupsUsersController extends AppController {

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
		$this->EmailgroupsUser->recursive = 0;
		$this->set('emailgroupsUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmailgroupsUser->exists($id)) {
			throw new NotFoundException(__('Invalid emailgroups user'));
		}
		$options = array('conditions' => array('EmailgroupsUser.' . $this->EmailgroupsUser->primaryKey => $id));
		$this->set('emailgroupsUser', $this->EmailgroupsUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmailgroupsUser->create();
			if ($this->EmailgroupsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The emailgroups user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The emailgroups user could not be saved. Please, try again.'));
			}
		}
		$users = $this->EmailgroupsUser->User->find('list');
		$emailgroups = $this->EmailgroupsUser->Emailgroup->find('list');
		$this->set(compact('users', 'emailgroups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EmailgroupsUser->exists($id)) {
			throw new NotFoundException(__('Invalid emailgroups user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmailgroupsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The emailgroups user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The emailgroups user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmailgroupsUser.' . $this->EmailgroupsUser->primaryKey => $id));
			$this->request->data = $this->EmailgroupsUser->find('first', $options);
		}
		$users = $this->EmailgroupsUser->User->find('list');
		$emailgroups = $this->EmailgroupsUser->Emailgroup->find('list');
		$this->set(compact('users', 'emailgroups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EmailgroupsUser->id = $id;
		if (!$this->EmailgroupsUser->exists()) {
			throw new NotFoundException(__('Invalid emailgroups user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmailgroupsUser->delete()) {
			$this->Session->setFlash(__('The emailgroups user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The emailgroups user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
