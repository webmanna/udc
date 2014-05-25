<?php

App::uses('CakeEventListener', 'Event');

class RunListener implements CakeEventListener {
    protected $Run;
    
    public function __construct($request, $response) {
	// 
    }

    public function implementedEvents() { 
	// CakeLog::write('Event.RunListener', 'implementedEvents Registered');
        return array(
            'Controller.Run.AfterSave'	// event name triggered from controller
		=> 'RunAdded'		// triggered method within this file
        );
    }
    
    public function RunAdded(CakeEvent $event) {
	$data	    = $event->data;	    // data passed from controller
        $subject    = $event->subject();    // cakephp Event object zietgiest
	
	//@TODO Implement logging without first init elsewhere - this should work on it's own??
	CakeLog::write('Event.RunListener', 'Event fired with data = ' . print_r($data,1));        
    }
}