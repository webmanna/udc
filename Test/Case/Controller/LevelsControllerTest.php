<?php
App::uses('LevelsController', 'Controller');

/**
 * LevelsController Test Case
 *
 */
class LevelsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.level',
		'app.game',
		'app.activity',
		'app.activities_game',
		'app.run',
		'app.round',
		'app.division',
		'app.team_pair',
		'app.activities_run',
		'app.award',
		'app.event',
		'app.tour',
		'app.events_game'
	);

}
