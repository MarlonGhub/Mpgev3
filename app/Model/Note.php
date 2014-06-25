<?php
App::uses('AppModel', 'Model');
/**
 * Note Model
 *
 * @property Job $Job
 */
class Note extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'note' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'job_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'job_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    public function savewithjob($data) {
        $note['job_id'] = $data['Job']['id'];
        $note['note'] = $data['Job']['note'];

        $this->create();
        if ($this->save($note)){
            /* what do we need to do here? */ 
        }else{
            throw new NotFoundException(__('Unable to save Notes'));
        }

    }
}
