<?php
App::uses('AppModel', 'Model');
App::uses('BaseLog', 'Log');
/**
 * Bucket Model
 *
 */
class Cmsupload extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'capital';
	public $useTable = 'uploads';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

    public function compile_data($mydata) {
        $mydata['Cmsjob']['admin_id'] = 7215;
        $mydata['Cmsjob']['client_id'] = 6096;
        $mydata['Cmsjob']['name']= $mydata['Job']['name'];
        $mydata['Cmsjob']['company_id'] = 3931;
        $mydata['Cmsjob']['employee_id'] = 7215;
        $mydata['Cmsjob']['instructions'] = $mydata['Note']['note'];
        $mydata['Cmsjob']['facility_id'] = 1;
        $mydata['Cmsjob']['status_id'] = 1;
        $mydata['Cmsjob']['job_type_id'] = 1;
        $mydata['Cmsjob']['folding_type_id'] = 4;
        $mydata['Cmsjob']['date_uploaded'] = date('Y-m-d H:i:s');
        $mydata['Cmsjob']['date_due'] = $mydata['Job']['duedate'];

        return $mydata;
    }

    //this is not needed!!!
    public function afterSave($created, $options=array()) {
       /* Determine if a new proof or invoice has been uploaded and needs to be entered into the PG&E Uploads table.
        * 
        */ 
/*
        //get new proof / invoice uploads from CMSJobs
        if ($created){
            
            $conditions = array(
                'Cmsupload.is_accepted' => NULL,
                'Cmsupload.file_type' => 'proof',
                'Cmsupload.timestamp_modified' => date('Y-m-d h:i:s', strtotime("-2 days")),
            );
            $fields = array();
            $order = array();
            $group = array();
            $result = $this->find('all', array(
                'conditions' => $conditions,
                'fields'     => $fields,
                'order'      => $order,
                'group'      => $group,
            ));
            
            foreach($result as $job) {
            $data = array(
                'Upload.capnumber' => $job['Cmsupload']['job_id'],
                'Upload.path' => $job['Cmsupload']['path'],
                'Upload.name' => basename($job['Cmsupload']['path']),
                //'type' => 'proof',
                'Upload.is_accepted' => $job['Cmsupload']['is_accepted'],
                'Upload.uploadtype_id' => '4',
                //'Upload.filesize' => filesize(basename($job['Cmsupload']['path'])),


            );
            $this->log('STARTING A NEW ONE!!!!!');
            $this->log($data);

//                $this->loadModel('Upload');
//                $this->Upload->create();
//                $this->Upload->save($data);
            $db = ClassRegistry::init('Upload');
            //$db->Upload = new Upload;
            $db->create($data);
            $db->save($data);
            
            }
        }
 */       
    }

    public function display_unaccepted_cms_proofs($capnumber) {
        $conditions = array(
//            'Cmsupload.is_accepted' => NULL,
            'Cmsupload.file_type' => 'proof',
            'Cmsupload.job_id' => $capnumber,
        );
        $results = $this->find('all', array(
            'conditions' => $conditions
        ));
        return $results;

    }
}
