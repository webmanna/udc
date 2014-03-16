<?php
App::uses('ActionsGamesController', 'Controller');

/**
 * ActionsGamesController Test Case
 *
 */
class ActionsGamesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.actions_game',
		'app.action',
		'app.game',
		'app.award',
		'app.division',
		'app.round',
		'app.run',
		'app.team_pair',
		'app.actions_run',
		'app.level',
		'app.event',
		'app.tour',
		'app.events_game'
	);

}
