<?php
App::uses('Round', 'Model');

/**
 * Round Test Case
 *
 */
class RoundTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.round',
		'app.event',
		'app.tour',
		'app.game',
		'app.activity',
		'app.activities_game',
		'app.run',
		'app.team_pair',
		'app.handler',
		'app.wp_user',
		'app.team',
		'app.award',
		'app.award_condition',
		'app.dog',
		'app.awards_dog',
		'app.awards_handler',
		'app.awards_team_pair',
		'app.activities_run',
		'app.division',
		'app.level',
		'app.events_game'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Round = ClassRegistry::init('Round');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Round);

		parent::tearDown();
	}

}
