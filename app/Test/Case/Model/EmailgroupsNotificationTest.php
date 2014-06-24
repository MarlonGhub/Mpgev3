<?php
App::uses('EmailgroupsNotification', 'Model');

/**
 * EmailgroupsNotification Test Case
 *
 */
class EmailgroupsNotificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.emailgroups_notification',
		'app.emailgroup',
		'app.user',
		'app.emailgroups_user',
		'app.notification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmailgroupsNotification = ClassRegistry::init('EmailgroupsNotification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmailgroupsNotification);

		parent::tearDown();
	}

}
