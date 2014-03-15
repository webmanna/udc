<?php
App::uses('Dog', 'Model');

/**
 * Dog Test Case
 *
 */
class DogTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dog',
		'app.team_pair',
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
		'app.awards_dog',
		'app.handler',
		'app.wp_user',
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
		$this->Dog = ClassRegistry::init('Dog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dog);

		parent::tearDown();
	}

}
