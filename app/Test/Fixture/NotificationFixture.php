<?php
/**
 * NotificationFixture
 *
 */
class NotificationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'job_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'pa' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'js' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'dn' => array('type' => 'boolean', 'null' => true, 'default' => null),
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
			'job_id' => 1,
			'pa' => 1,
			'js' => 1,
			'dn' => 1
		),
	);

}
