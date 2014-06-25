<?php
App::uses('AppController', 'Controller');
App::uses('CakeTime','Utility');
App::uses('CakeLogInterface', 'Log');
App::uses('CakeEmail', 'Network/Email');
/**
 * Jobs Controller
 *
 * @property Job $Job
 * @property PaginatorComponent $Paginator
 */
class CmsjobsController extends AppController {
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Search.Prg');

	public function beforeFilter() {

	}

	//2014-03-14 Fri 12:03 PM
	//adding search functions
	public $presetVars = true;

	public function index(){

		$this->Cmsjob->recursive = 0;
		$this->set('cmsjobs', $this->Paginator->paginate());
	}

	/**
*	Add Function Start
	*/
	
	public function add(){
		if ($this->request->is('post')) {
			$this->loadModel('Cmsjobstats');
			// Start Of Static Data to go into Capital Mail Jobs Table
			$mydata = $this->request->data;
			$mydata['Cmsjob']['admin_id'] = 7215;
			$mydata['Cmsjob']['client_id'] = 6096;
			$mydata['Cmsjob']['company_id'] = 3931;
			$mydata['Cmsjob']['employee_id'] = 7215;
			$mydata['Cmsjob']['facility_id'] = 1;
			$mydata['Cmsjob']['status_id'] = 1;
			$mydata['Cmsjob']['job_type_id'] = 1;
			$mydata['Cmsjob']['folding_type_id'] = 4;
			$mydata['Cmsjob']['date_uploaded'] = date('Y-m-d H:i:s');
			$mydata['Cmsjob']['date_due'] = date('Y-m-d H:i:s',strtotime("+72 hours"));
			$this->Cmsjob->create($mydata);
			$this->Cmsjob->save($this->request->data);

			
			$mystats['Cmsjobstats']['job_id']= $this->Cmsjob->getInsertID();
			$mystats['Cmsjobstats']['facility_name']= 'Sacramento';
			$mystats['Cmsjobstats']['coordinator_names']='Jolanda Jiminez';
			$mystats['Cmsjobstats']['coordinator_ids']= 7215;
			$mystats['Cmsjobstats']['coordinator_companies']= 1435;
			$mystats['Cmsjobstats']['sales_rep_companies']= 1435;
			$mystats['Cmsjobstats']['main_contact_user_ids'] = 6096;
			$mystats['Cmsjobstats']['company_names'] = 'Envelope and Paper Svcs--PG&E';
			$mystats['Cmsjobstats']['client_company_name'] = 'Envelope and Paper Svcs--PG&E';
			$mystats['Cmsjobstats']['contact_company_name'] = 'Envelope and Paper Svcs--PG&E';
			$mystats['Cmsjobstats']['contact_user_id'] = 6096;
			$mystats['Cmsjobstats']['employee_name'] = 'Jolanda Jiminez';
			$mystats['Cmsjobstats']['client_parent_company_id']= 1435;
			$mystats['Cmsjobstats']['client_company_id']= 3931;
			$mystats['Cmsjobstats']['status_name'] ='submitted';
			$mystats['Cmsjobstats']['status_is_postal_droppable']='no';		
			$this->Cmsjobstats->create($mystats);
			 
			 $this->Cmsjobstats->save($this->request->data); 
				$testing = $this->Cmsjob->getInsertID();
				$this->Session->setFlash(__('The CMSJOB '.$testing.' has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			
			}
	}

}

?>
