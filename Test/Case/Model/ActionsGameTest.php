<?php
App::uses('ActionsGame', 'Model');

/**
 * ActionsGame Test Case
 *
 */
class ActionsGameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actions_game',
		'app.action',
		'app.game',
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
		$this->ActionsGame = ClassRegistry::init('ActionsGame');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActionsGame);

		parent::tearDown();
	}

}
