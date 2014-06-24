<?php
App::uses('Emailgroup', 'Model');

/**
 * Emailgroup Test Case
 *
 */
class EmailgroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.emailgroup',
		'app.user',
		'app.emailgroups_user',
		'app.notification',
		'app.emailgroups_notification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Emailgroup = ClassRegistry::init('Emailgroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Emailgroup);

		parent::tearDown();
	}

}
