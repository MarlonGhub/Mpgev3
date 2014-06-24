<?php
App::uses('EmailgroupsUser', 'Model');

/**
 * EmailgroupsUser Test Case
 *
 */
class EmailgroupsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.emailgroups_user',
		'app.user',
		'app.emailgroup',
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
		$this->EmailgroupsUser = ClassRegistry::init('EmailgroupsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmailgroupsUser);

		parent::tearDown();
	}

}
