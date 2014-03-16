<?php
App::uses('Level', 'Model');

/**
 * Level Test Case
 *
 */
class LevelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.level',
		'app.game',
		'app.action',
		'app.actions_game',
		'app.run',
		'app.round',
		'app.division',
		'app.team_pair',
		'app.actions_run',
		'app.award',
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
		$this->Level = ClassRegistry::init('Level');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Level);

		parent::tearDown();
	}

}
