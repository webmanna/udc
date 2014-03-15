<?php
App::uses('ActivitiesController', 'Controller');

/**
 * ActivitiesController Test Case
 *
 */
class ActivitiesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.activity',
		'app.game',
		'app.activities_game',
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

}
