<?php

App::uses('CakeEventListener', 'Event');

class ExampleListener implements CakeEventListener {
    protected $Example;
    
    public function __construct($request, $response) {
	// 
    }

    public function implementedEvents() { 
	/* 
	 * In order for this to work a fireEvent() call needs to be made within
	 * a controller file. Note the first argument is the implemented event 
	 * whos actions are to be triggered & thee second argument is data that 
	 * can be processed by the triggered method:
	 * 
	 * $this->fireEvent('Model.Example.afterSave', $dataArray());
	 * 
	 */ 
        return array(
            'Model.Example.afterSave'	// event name triggered from controller
		=> 'ExampleAdded'	// triggered method within this file
        );
    }
    
    public function ExampleAdded(CakeEvent $event) {
	$data	    = $event->data;
        $subject    = $event->subject();
        $this->Example->SomethingImportantHappened($data,$subject);
    }
}