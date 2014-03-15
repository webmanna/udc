<?php
App::uses('AwardCondition', 'Model');

/**
 * AwardCondition Test Case
 *
 */
class AwardConditionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.award_condition',
		'app.award',
		'app.game',
		'app.activity',
		'app.activities_game',
		'app.run',
		'app.round',
		'app.division',
		'app.team_pair',
		'app.activities_run',
		'app.level',
		'app.event',
		'app.tour',
		'app.events_game',
		'app.dog',
		'app.awards_dog',
		'app.handler',
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
		$this->AwardCondition = ClassRegistry::init('AwardCondition');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AwardCondition);

		parent::tearDown();
	}

}
