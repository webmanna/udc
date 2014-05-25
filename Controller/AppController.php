<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array('DebugKit.Toolbar', 'RequestHandler', 'Session');
	
	public function __construct($request = null, $response = null) {
	    parent::__construct($request, $response);
	    $this->loadListeners($request, $response);
	}

	// dynamiclly load event listeners for the entire app to use
	public function loadListeners($request, $response) {
	    
	    // get all PHP files in app/Event
	    foreach(glob(APP."Event/*.php") as $eventFile) {			
		
		// get only the class name
		$className = str_replace(".php", "", basename($eventFile));	
		
		// use the file
		App::uses($className, 'Event'); 
		// CakeLog::write('AppController.loadListeners', 'App::uses - ' . $className);
		
		// then instantiate the file and attach it to the event manager
		$this->getEventManager()->attach(new $className($request, $response));
		// CakeLog::write('AppController.loadListeners', 'Event Attached - ' . $className);
	    }
	}

	public function fireEvent($event,$data) {
	    // CakeLog::write('AppController.fireEvent', 'Event Fired - Event:' . $event );
	    $event = new CakeEvent($event, $this, $data);
	    $this->getEventManager()->dispatch($event);
	}
}