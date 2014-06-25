<?php
App::uses('AppModel', 'Model');
/**
 * Job Model
 *
 * @property User $User
 * @property Envelope $Envelope
 * @property Jobtype $Jobtype
 * @property Note $Note
 * @property Notification $Notification
 * @property Upload $Upload
 */
class Job extends AppModel {

    //initialize CakeDC search plugin
    public $actsAs = array('Search.Searchable');
    public $filterArgs = array(
        'pgeid' => array(
            'type' => 'like',
            'field' => 'Jobs.pgeid'
        ),
        'status' => array(
            'type' => 'value',
            'field' => 'Jobs.status'
        ), 
    );
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'pgeid' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'jobtype_id' => array(
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Envelope' => array(
			'className' => 'Envelope',
			'foreignKey' => 'envelope_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Jobtype' => array(
			'className' => 'Jobtype',
			'foreignKey' => 'jobtype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Note' => array(
			'className' => 'Note',
			'foreignKey' => 'job_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Notification' => array(
			'className' => 'Notification',
			'foreignKey' => 'job_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Upload' => array(
			'className' => 'Upload',
			'foreignKey' => 'job_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);



}
