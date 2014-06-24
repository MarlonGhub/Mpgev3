<?php
/**
 * JobFixture
 *
 */
class JobFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'capnumber' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'qty' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'duedate' => array('type' => 'date', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'envelope_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'jobtype_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'capnumber' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'qty' => 'Lorem ipsum dolor sit amet',
			'duedate' => '2014-06-24',
			'user_id' => 1,
			'envelope_id' => 1,
			'jobtype_id' => 1,
			'created' => '2014-06-24 15:34:31',
			'modified' => '2014-06-24 15:34:31'
		),
	);

}
