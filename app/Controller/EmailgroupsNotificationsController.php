<?php
App::uses('AppController', 'Controller');
/**
 * EmailgroupsNotifications Controller
 *
 * @property EmailgroupsNotification $EmailgroupsNotification
 * @property PaginatorComponent $Paginator
 */
class EmailgroupsNotificationsController extends AppController {

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
		$this->EmailgroupsNotification->recursive = 0;
		$this->set('emailgroupsNotifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmailgroupsNotification->exists($id)) {
			throw new NotFoundException(__('Invalid emailgroups notification'));
		}
		$options = array('conditions' => array('EmailgroupsNotification.' . $this->EmailgroupsNotification->primaryKey => $id));
		$this->set('emailgroupsNotification', $this->EmailgroupsNotification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmailgroupsNotification->create();
			if ($this->EmailgroupsNotification->save($this->request->data)) {
				$this->Session->setFlash(__('The emailgroups notification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The emailgroups notification could not be saved. Please, try again.'));
			}
		}
		$emailgroups = $this->EmailgroupsNotification->Emailgroup->find('list');
		$notifications = $this->EmailgroupsNotification->Notification->find('list');
		$users = $this->EmailgroupsNotification->User->find('list');
		$this->set(compact('emailgroups', 'notifications', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EmailgroupsNotification->exists($id)) {
			throw new NotFoundException(__('Invalid emailgroups notification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmailgroupsNotification->save($this->request->data)) {
				$this->Session->setFlash(__('The emailgroups notification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The emailgroups notification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmailgroupsNotification.' . $this->EmailgroupsNotification->primaryKey => $id));
			$this->request->data = $this->EmailgroupsNotification->find('first', $options);
		}
		$emailgroups = $this->EmailgroupsNotification->Emailgroup->find('list');
		$notifications = $this->EmailgroupsNotification->Notification->find('list');
		$users = $this->EmailgroupsNotification->User->find('list');
		$this->set(compact('emailgroups', 'notifications', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EmailgroupsNotification->id = $id;
		if (!$this->EmailgroupsNotification->exists()) {
			throw new NotFoundException(__('Invalid emailgroups notification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmailgroupsNotification->delete()) {
			$this->Session->setFlash(__('The emailgroups notification has been deleted.'));
		} else {
			$this->Session->setFlash(__('The emailgroups notification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
