<?php
App::uses('AppModel', 'Model');
/**
 * Bucket Model
 *
 */
class Cmsjob extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'capital';
	public $useTable = 'jobs';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

    public function compile_data($mydata, $add_note) {
//        debug($mydata);die;
        if(!empty($mydata) && isset($mydata['Job']['name'])){
            $mydata['Cmsjob']['admin_id'] = 7215;
            $mydata['Cmsjob']['client_id'] = 6096;
            $mydata['Cmsjob']['name']= $mydata['Job']['name'];
            $mydata['Cmsjob']['company_id'] = 3931;
            $mydata['Cmsjob']['employee_id'] = 7215;
            $mydata['Cmsjob']['instructions'] = 'Envelope: '.$add_note.'<br/>';
            $mydata['Cmsjob']['instructions'] .= $mydata['Note']['note'];
            $mydata['Cmsjob']['overage_type'] = 'trash';
            $mydata['Cmsjob']['facility_id'] = 1;
            $mydata['Cmsjob']['status_id'] = 1;
            $mydata['Cmsjob']['job_type_id'] = 1;
            $mydata['Cmsjob']['folding_type_id'] = 4;
            $mydata['Cmsjob']['date_uploaded'] = date('Y-m-d H:i:s');
            $mydata['Cmsjob']['date_due'] = $mydata['Job']['duedate'];
            $mydata['Cmsjob']['postage_type_id'] = 1;

            return $mydata;
        }
    }

	public function getenvelope($mydata) {
		$db = ClassRegistry::init('Size');		
		$conditions = array(
            'Size.id' => $mydata['Job']['size_id'],
		);
		$fields = array();
		$order = array();
		$group = array();
		$result = $db->find('first', array(
			'conditions'	=> $conditions,
			'fields'		=> $fields,
			'order'		 => $order,
			'group'		 => $group
		));

        return $result['Size']['name'];
	}

    public function fetchstatus($CMSJobId) {
        $conditions = array(
            'id' => $CMSJobId, 
        );
        $fields     = array();
        $order      = array();
        $group      = array();
        $result = $this->find('first', array(
            'conditions'    => $conditions,
            'fields'        => $fields,
            'order'         => $order,
            'group'         => $group
        ));
    }
}
