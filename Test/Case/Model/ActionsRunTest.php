<?php
App::uses('ActionsRun', 'Model');

/**
 * ActionsRun Test Case
 *
 */
class ActionsRunTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actions_run',
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
		'app.parent_action'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ActionsRun = ClassRegistry::init('ActionsRun');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActionsRun);

		parent::tearDown();
	}

}
