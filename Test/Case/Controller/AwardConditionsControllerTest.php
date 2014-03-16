<?php
App::uses('AwardConditionsController', 'Controller');

/**
 * AwardConditionsController Test Case
 *
 */
class AwardConditionsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.award_condition',
		'app.award',
		'app.game',
		'app.action',
		'app.actions_game',
		'app.run',
		'app.round',
		'app.division',
		'app.team_pair',
		'app.actions_run',
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

}
