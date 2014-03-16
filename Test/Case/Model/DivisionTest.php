<?php
App::uses('Division', 'Model');

/**
 * Division Test Case
 *
 */
class DivisionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.division',
		'app.game',
		'app.action',
		'app.actions_game',
		'app.award',
		'app.level',
		'app.event',
		'app.tour',
		'app.events_game',
		'app.round'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Division = ClassRegistry::init('Division');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Division);

		parent::tearDown();
	}

}
