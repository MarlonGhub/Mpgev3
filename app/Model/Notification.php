<?php
App::uses('AppModel', 'Model');
/**
 * Notification Model
 *
 * @property Job $Job
 * @property User $User
 * @property Emailgroup $Emailgroup
 */
class Notification extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Emailgroup' => array(
			'className' => 'Emailgroup',
			'joinTable' => 'emailgroups_notifications',
			'foreignKey' => 'notification_id',
			'associationForeignKey' => 'emailgroup_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

    /**
     * save data from job add into the notifications table
     */
    public function savewithjob($data){
        //debug($data);die;

        /* set job_id for notification */
        $data['Notification']['job_id'] = $data['Job']['id'];

        /* break out user_id */
        $data['Notification']['user_id'] = $data['Notification']['user_id']['0'];

        $this->create();
        if(!$this->save($data['Notification'])){
            throw new NotFoundException(__('Unable to save notification'));
        }
    }
}
