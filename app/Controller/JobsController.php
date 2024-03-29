<?php
App::uses('AppController', 'Controller');
/**
 * Jobs Controller
 *
 * @property Job $Job
 * @property PaginatorComponent $Paginator
 */
class JobsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Search.Prg');


/**
 * Search Plugin
 */
    public function searchjob() {
        $this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Job->parseCriteria($this->Prg->parsedParams());
        $this->set('jobs', $this->Paginator->paginate());
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Job->recursive = 0;
		$this->set('jobs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
		$this->set('job', $this->Job->find('first', $options));
	}
/**
 * preadd method - create record and redirect to add function
 *
 * @throws NotFoundException
 * @return void
 */
    public function preadd(){
        // disable view
		$this->autoRender = false;

############################################################
# TODO temporarily limited data that pre-add inputs.       #
#      this must be re-enabled once AUTH is live.     TODO #
############################################################
		$data = array(
			//'status_id' => 1,
			//'company_id' => $this->Session->read('Auth.User.company_id'),
			//'user_id' => $this->Session->read('Auth.User.id'),
			'user_id' => '1',
		);
		$this->Job->create();

		if($this->Job->save(array('Job' => $data))){
			$this->redirect(array('action' => 'add', $this->Job->getLastInsertId()));
        }else{
            throw new NotFoundException(__('Can not create Job.'));
        } 
    }
/**
 * add method
 * @throws NotFoundException
 * @param string id - lastinsertID from preadd()
 * @return void
 */
	public function add($id = null) {
        if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		if ($this->request->is('post')) {
            /* ensure job id is contained in this request data */
            $this->request->data['Job']['id'] = $id;

            /*debug*/
            //debug($this->request->data);//die;

            /* Save note and job id in Notes table */
            $this->loadModel('Note');
            $this->Note->savewithjob($this->request->data);

            /* Save notification with job id */
            $this->loadModel('Notification');
            $this->Notification->savewithjob($this->request->data); 

			$this->Job->create();
			if ($this->Job->save($this->request->data)) {

                ####################################
                # Save Data into CMS Jobs database #
                ####################################
                $this->loadModel('Cmsjob');
                $save_data['Cmsjob'] = $this->Cmsjob->compile_data($this->request->data);
                $this->Cmsjob->create();
                $this->Cmsjob->save($save_data);

                /* get capnumber from jobs table in CMS */
                $CMS_id = $this->Cmsjob->getInsertId();

                /* this saves capnumber in jobs */
                $this->Job->saveField('capnumber', $CMS_id);

                ########################################
                # Save Data into CMS jobstats database #
                ########################################
                $this->loadModel('Cmsjobstats');
                $compiled_stats_data = $this->Cmsjobstats->compile_data($CMS_id);
                $this->Cmsjobstats->create($compiled_stats_data);			 
                $this->Cmsjobstats->save($this->request->data); 

                ############################################
                # Save Data into CMS coordinators database #
                ############################################
                $this->loadModel('Cmscoordinator');
                $mycoord['Cmscoordinator']['job_id']= $CMS_id;
                $mycoord['Cmscoordinator']['user_id']= 7215;
                $mycoord['Cmscoordinator']['company_id']= 3931;
                $mycoord['Cmscoordinator']['parent_company_id']= 1435;
                $this->Cmscoordinator->create($mycoord);
                $this->Cmscoordinator->save($this->request->data);

				$this->Session->setFlash(__('The job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.'));
			}
		}
		$userlist = $this->Job->User->find('list'); /* this will retrive a list of user ids.... not that useful */
        $users = $this->Job->User->compilelist(); /* collect all usernames to present for notifications select box */
		$envelopes = $this->Job->Envelope->find('list');
		$jobtypes = $this->Job->Jobtype->find('list');
		$this->set(compact('userlist', 'users', 'envelopes', 'jobtypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Job->exists($id)) {
			throw new NotFoundException(__('Invalid job'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Job->save($this->request->data)) {
				$this->Session->setFlash(__('The job has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Job.' . $this->Job->primaryKey => $id));
			$this->request->data = $this->Job->find('first', $options);
		}
		$users = $this->Job->User->find('list');
		$envelopes = $this->Job->Envelope->find('list');
		$jobtypes = $this->Job->Jobtype->find('list');
		$this->set(compact('users', 'envelopes', 'jobtypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Job->id = $id;
		if (!$this->Job->exists()) {
			throw new NotFoundException(__('Invalid job'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Job->delete()) {
			$this->Session->setFlash(__('The job has been deleted.'));
		} else {
			$this->Session->setFlash(__('The job could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * help method
 *
 * @return void
 */
	public function help() {
	}
}
