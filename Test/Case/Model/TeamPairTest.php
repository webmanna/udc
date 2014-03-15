<?php
App::uses('TeamPair', 'Model');

/**
 * TeamPair Test Case
 *
 */
class TeamPairTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.team_pair',
		'app.handler',
		'app.wp_user',
		'app.team',
		'app.award',
		'app.game',
		'app.activity',
		'app.activities_game',
		'app.run',
		'app.round',
		'app.division',
		'app.activities_run',
		'app.level',
		'app.event',
		'app.tour',
		'app.events_game',
		'app.award_condition',
		'app.dog',
		'app.awards_dog',
		'app.awards_handler',
		'app.awards_team_pair'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TeamPair = ClassRegistry::init('TeamPair');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TeamPair);

		parent::tearDown();
	}

}
