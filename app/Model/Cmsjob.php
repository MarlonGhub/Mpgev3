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

/**
 * compile data to save to CMS job board
 * @param array $this->request->data
 * @return array 'Cmsjob'
 */
    public function compile_data($mydata) {
        /* get envelope name and save in notes */
        $db_envelope = ClassRegistry::init('Envelope');
        $envelope_id = $mydata['Job']['envelope_id'];
        $envelope_name = $db_envelope->getname($envelope_id);

        //debug($mydata);die;
        if(!empty($mydata) && isset($mydata['Job']['name'])){
            $mydata['Cmsjob']['admin_id'] = 7215;
            $mydata['Cmsjob']['client_id'] = 6096;
            $mydata['Cmsjob']['name']= $mydata['Job']['name'];
            $mydata['Cmsjob']['company_id'] = 3931;
            $mydata['Cmsjob']['employee_id'] = 7215;
            $mydata['Cmsjob']['instructions'] = 'Envelope: '.$envelope_name.'<br/>';
            $mydata['Cmsjob']['instructions'] .= $mydata['Job']['note'];
            $mydata['Cmsjob']['overage_type'] = 'trash';
            $mydata['Cmsjob']['facility_id'] = 1;
            $mydata['Cmsjob']['status_id'] = 1;
            $mydata['Cmsjob']['job_type_id'] = 1;
            $mydata['Cmsjob']['folding_type_id'] = 4;
            $mydata['Cmsjob']['date_uploaded'] = date('Y-m-d H:i:s');
            $mydata['Cmsjob']['date_due'] = $mydata['Job']['duedate'];
            $mydata['Cmsjob']['postage_type_id'] = 1;

            return $mydata['Cmsjob'];
        }
    }

}
