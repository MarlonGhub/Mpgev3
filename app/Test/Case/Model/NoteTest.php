<?php
App::uses('Note', 'Model');

/**
 * Note Test Case
 *
 */
class NoteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.note',
		'app.job',
		'app.user',
		'app.envelope',
		'app.jobtype',
		'app.notification',
		'app.upload'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Note = ClassRegistry::init('Note');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Note);

		parent::tearDown();
	}

}
