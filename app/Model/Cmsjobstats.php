<?php
App::uses('AppModel', 'Model');
/**
 * Bucket Model
 *
 */
class Cmsjobstats extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'capital';
	public $useTable = 'job_statistics';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


    public function compile_data($CMS_id) {
        $mystats['Cmsjobstats']['job_id']= $CMS_id;
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

        return $mystats;
    }

}
