<?php
/**
 * EmailgroupsNotificationFixture
 *
 */
class EmailgroupsNotificationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'unsigned' => false, 'key' => 'primary'),
		'emailgroup_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'notification_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'mandatory' => array('type' => 'boolean', 'null' => true, 'default' => null, 'comment' => 'if true use a logical and to determin proof approval'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'emailgroup_id' => 1,
			'notification_id' => 1,
			'user_id' => 1,
			'mandatory' => 1,
			'created' => '2014-06-24 15:34:26',
			'modified' => '2014-06-24'
		),
	);

}
