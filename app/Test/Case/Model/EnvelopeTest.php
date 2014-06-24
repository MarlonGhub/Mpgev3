<?php
App::uses('Envelope', 'Model');

/**
 * Envelope Test Case
 *
 */
class EnvelopeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.envelope',
		'app.jobtype',
		'app.job'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Envelope = ClassRegistry::init('Envelope');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Envelope);

		parent::tearDown();
	}

}
