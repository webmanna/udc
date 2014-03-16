<?php
App::uses('Action', 'Model');

/**
 * Action Test Case
 *
 */
class ActionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.action',
		'app.game',
		'app.actions_game',
		'app.award',
		'app.division',
		'app.round',
		'app.run',
		'app.team_pair',
		'app.actions_run',
		'app.level',
		'app.event',
		'app.tour',
		'app.events_game'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Action = ClassRegistry::init('Action');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Action);

		parent::tearDown();
	}

}
