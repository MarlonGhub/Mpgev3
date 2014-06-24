<?php
App::uses('AppModel', 'Model');
/**
 * EmailgroupsNotification Model
 *
 * @property Emailgroup $Emailgroup
 * @property Notification $Notification
 * @property User $User
 */
class EmailgroupsNotification extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Emailgroup' => array(
			'className' => 'Emailgroup',
			'foreignKey' => 'emailgroup_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Notification' => array(
			'className' => 'Notification',
			'foreignKey' => 'notification_id',
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
}
