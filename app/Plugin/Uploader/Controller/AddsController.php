<?php
App::uses('UploaderAppController', 'Uploader.Controller');
App::uses('Folder','Utility');
App::uses('File','Utility');
/**
 * Adds Controller
 *
 */
class AddsController extends UploaderAppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
	public $components = array('Session','Paginator');

###########################################################
# #	         Name the Model being used here!            # #
###########################################################

	var $modelname = 'Uploads';

###########################################################
# #	 Import Function... That Only Moves the files       # #
###########################################################
	public function import ($id = null){
/*
	Job ID can be carried in. 
*/
		$job_id = 'tamp';

	//Creates new dir based on Job_id
		$dir = new Folder('files'.DS.$job_id, true, 0777);
		
		if ($this->request->is('post')) {
		
	/* Sets count by number of elements inside the Add portion of this Data request.
	-1 because the array starts at 0	
	*/		
			$count = count($this->request->data['Add'])-1;
			$count = $this->_emptyupload($count,$id,$this->request->data);
			

	
	/*	The upload portion moves $this->request data by array number $i which refers
	to the number located in the view. i.e submittedfile0,submittedfile1...etc 		
	*/
			for ($i = 0; $i <= $count-1; $i++){
				move_uploaded_file($this->request->data['Add']['submittedfile'.$i]['tmp_name'],$dir->path . DS . $this->request->data['Add']['submittedfile'.$i]['name']);
				$this->_dbwrite($this->request->data,$dir->path,$i);
				}
	/*
		If this dir exists, saves. Need to work on better validation. _filesvalidation() refers to last element
	thereby returning false when not all upload forms are used.
	*/			
// fix this if ($this->_filesvalidation($this->request->data,$count) ) {
			if ($dir) {
				$this->Session->setFlash(__('The file(s) have been uploaded.'));
				return $this->redirect(array('plugin' => false,'controller'=>'Uploads','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The file(s) could not be uploaded. Please, try again.'));
				return $this->redirect(array('plugin' => false,'controller'=>'Uploads','action' => 'index')); //controller =>
			}
		}

	}

###########################################################
#  Sets up arrays to be written to database, then writes  #
###########################################################

	public function _dbwrite($data,$dir,$i){
	
	// Sets file name from $this->request->data passed in
		$filename = $data['Add']['submittedfile'.$i]['name'];
	
	//Sets path in string format to be written to DB	
		$dir = $dir.DS.$filename;
	
	//Filesize
		$filesize = $data['Add']['submittedfile'.$i]['size'];
	
	//Loads and uses model name set at the beginning of the controller.	
		$mname = $this->modelname;
		$this->loadModel($mname);
	
	/*Populates $databasematch to match column names in db and doesn't 
	and creates the size by number of columns in db.
	*/	
		$databasematch = array_keys($this->$mname->getColumnTypes($mname));
	
	//Pops off the 'id' auto-incrementing column from the beginning of the array	
		array_shift($databasematch);
	
	// Sets an array with the for CakePHP save db save syntax
		$arr = array($mname);
	
	//Fills the column type arrays with empty values 	
		$databasematch = array_fill_keys($databasematch, '');
	
	/* Combines array with first element as the Model name as needed by 
	CakePHP for proper database writing.
	*/
		$filearr = 	array_fill_keys($arr, $databasematch);
	/* Manually Populate array. Can be easily changed for the columns in a new
	database, or a foreach can be implemented to populate.
	*/
		$filearr[$mname]['type'] = 'test';
		$filearr[$mname]['name'] = $filename ;
		$filearr[$mname]['is_accepted'] = 'test'  ;
		$filearr[$mname]['filesize'] = $filesize ;
		$filearr[$mname]['path'] = $dir ;
		$filearr[$mname]['job_id'] = 'test' ;
		$filearr[$mname]['capnumber'] = 'test' ;
		$filearr[$mname]['uploadtype_id'] = 'test' ;
		$filearr[$mname]['created'] = 'test' ;
		$filearr[$mname]['modified'] = 'test' ;
//debug($filearr);die;
		
	// Saves $filearr, a correctly styled array, to the database.
		$this->$mname->create($filearr);			
		$this->$mname->save($filearr);
		return true;
		
}

####################################################################
#  A file validation based on error number in $this->request->data #
####################################################################
// Needs to be implemented with a proper foreach loop, or for loop to process all files,
// and not return false if ONE file fails.
	public function _filesvalidation($files,$count){
		$i = 0;
		foreach($files as $file){
			$i++;
			if(($file['submittedfile'.$i]['error']) > 0){
				return false;
			}
		}
		return true;
	}

#######################################################################
#  A counter return based on error code found in $this->request->data #
#######################################################################
	public function _emptyupload ($count,$id=null,$data = array()){
	// Creates Counter to set for uploader iterator in function upload
		$counter = 0;
	/*$count = number of items in the array. If we decided to add another upload 
	form field in the view, it will adjust accordingly
	*/
		for ($i = 0; $i <= $count; $i++){
		// If no errors exist. Increase the counter to signify a good upload
			if($this->request->data['Add']['submittedfile'.$i]['error'] == 0){
				$counter++;
			}
			else {
				$this->_failedfilenote($id,$this->request->data,$i);die;
			}
		}
		return $counter;
	}

#######################################################################
#  A counter return based on error code found in $this->request->data #
#######################################################################
	public function _failedfilenote($id=null,$data,$i){
		$warning = array();
		$errcode =$this->request->data['Add']['submittedfile'.$i]['error'];
		$name = $this->request->data['Add']['submittedfile'.$i]['name'];
		debug($errcode);
		debug($name);
	// If no errors exist. Increase the counter to signify a good upload
		if( ($errcode > 0) && ($name !== '') ){
			$warning = array( $i => $name.'did not upload.');
		}
	
	debug($warning);

	}


	
/*
	complete filekey array structure to shorten array
	returns 
	
	array(
	(int) 0 => 'submittedfile0',
	(int) 1 => 'submittedfile1'
	)
	
	Possible Use later



	public function _fileskeys($files,$count){
		$i = 0;
		$fileskeys = array();
		while ($i < $count){
			if (!empty($files['Add']['submittedfile'.$i]['name'])){
				array_push($fileskeys, 'submittedfile'.$i);
			}else {
				debug($fileskeys);die;
				return false;
			}
			$i ++;

		}

		return $fileskeys;


	}	
*/


}

