<?php
App::uses('AwardsTeamPair', 'Model');

/**
 * AwardsTeamPair Test Case
 *
 */
class AwardsTeamPairTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.awards_team_pair',
		'app.award',
		'app.game',
		'app.action',
		'app.actions_game',
		'app.run',
		'app.round',
		'app.division',
		'app.team_pair',
		'app.handler',
		'app.wp_user',
		'app.team',
		'app.awards_handler',
		'app.dog',
		'app.awards_dog',
		'app.actions_run',
		'app.level',
		'app.event',
		'app.tour',
		'app.events_game',
		'app.award_condition'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AwardsTeamPair = ClassRegistry::init('AwardsTeamPair');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AwardsTeamPair);

		parent::tearDown();
	}

}
