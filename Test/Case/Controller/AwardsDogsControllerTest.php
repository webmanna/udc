<?php
App::uses('AwardsDogsController', 'Controller');

/**
 * AwardsDogsController Test Case
 *
 */
class AwardsDogsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.awards_dog',
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
		'app.award_condition',
		'app.dog',
		'app.team',
		'app.handler',
		'app.wp_user',
		'app.awards_handler',
		'app.awards_team_pair'
	);

}
