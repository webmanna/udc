<?php
App::uses('Run', 'Model');

/**
 * Run Test Case
 *
 */
class RunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.run',
		'app.round',
		'app.division',
		'app.game',
		'app.action',
		'app.actions_game',
		'app.award',
		'app.level',
		'app.event',
		'app.tour',
		'app.events_game',
		'app.team_pair',
		'app.actions_run'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Run = ClassRegistry::init('Run');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Run);

		parent::tearDown();
	}

}
