<?php
App::uses('Uploadtype', 'Model');

/**
 * Uploadtype Test Case
 *
 */
class UploadtypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.uploadtype',
		'app.upload',
		'app.job',
		'app.user',
		'app.envelope',
		'app.jobtype',
		'app.note',
		'app.notification',
		'app.emailgroup',
		'app.emailgroups_user',
		'app.emailgroups_notification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Uploadtype = ClassRegistry::init('Uploadtype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Uploadtype);

		parent::tearDown();
	}

}
