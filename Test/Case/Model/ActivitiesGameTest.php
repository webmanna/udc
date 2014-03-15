<?php
App::uses('ActivitiesGame', 'Model');

/**
 * ActivitiesGame Test Case
 *
 */
class ActivitiesGameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activities_game',
		'app.activity',
		'app.game',
		'app.award',
		'app.division',
		'app.round',
		'app.run',
		'app.team_pair',
		'app.activities_run',
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
		$this->ActivitiesGame = ClassRegistry::init('ActivitiesGame');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActivitiesGame);

		parent::tearDown();
	}

}
