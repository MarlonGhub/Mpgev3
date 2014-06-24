<?php
App::uses('AppModel', 'Model');
/**
 * Notification Model
 *
 * @property Job $Job
 * @property Emailgroup $Emailgroup
 */
class Notification extends AppModel {


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

}
