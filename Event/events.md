Events

Events are callbacks that are associated to a string. An object, like a Model
will trigger an event using a string even if nothing is listening for that
event.

CakePHP comes pre-built with internal events for things like Models. You can
attach an event listener to a Model and respond to a Model.beforeSave event.

The EventManager

Every Model in Cake has it's own EventManager, plus there is a gobal singleton
EventManager. These are not all the same instance of EventManager, and they work
slightly differently.

When a Model fires an event it does so using the EventManager reference it has.
This means, you can attach an event listener to a specific Model. The advantages
are that your listener will only receive events from that Model.

Global listeners are ones attached to the singleton instance of EventManager.
Which can be accessed anywhere in your code. When you attach a listener there
it's called for every event that happens no matter who triggers it.

When you attach event listener in the bootstrap.php of an app or plugin, then
you can use the global manager, else you have to get a reference to the Model
you need using ClassRegistry.

What EventManager To Use?

If the event you want to handle is for a specific Model, then attach the
listener to that Model's EventManager. To get a reference of the model you can
call the ClassRegistry::init(...).

If the event you want to handle could be triggered anywhere, then attach the
listener to the global EventManager.

Only you know how your listener should be used.

Inside A Listener

Generally, you put your business logic into models. You shouldn't need to access
a Controller from an event listener. Model's are much easier to access and use
in Cake.

Here is a template for creating a CakeEventListener. The listener is responsible
for monitoring when something happens, and then passing that information along
to another Model. You should place your business logic for processing the event
in Models.

<?php

App::uses('CakeEventListener', 'Event');

class MyListener implements CakeEventListener
{
    /**
     *
     * @var Document The model.
     */
    protected $Document;

    /**
     * Constructor
     */
    public function __construct()
    {
        // get a reference to a Model that we'll use
        $this->Document = ClassRegistry::init('Agg.Document');
    }

    /**
     * Register the handlers.
     *
     * @see CakeEventListener::implementedEvents()
     */
    public function implementedEvents()
    {
        return array(
            'Model.User.afterSave'=>'UserChanged'
        );
    }

    /**
     * Use the Event to dispatch the work to a Model.
     *
     * @param CakeEvent $event
     *          The event object and data.
     */
    public function UserChanged(CakeEvent $event)
    {
        $data = $event->data;
        $subject = $event->subject();

        $this->Document->SomethingImportantHappened($data,$subject);
    }
}

?>

What I like to do is place all my Events into the Lib folder. This makes it very
easy to access from anywhere in the source code. The above code would go into
App/Lib/Event/MyListener.php.

Attaching The EventListeners

Again, it depends on what events you need to listen for. The first thing you
have to understand is that an object must be created in order to fire the
event.

For example;

It's not possible for the Document model to fire Model.beforeSave event when the
Calendar controller is displaying an index, because the Calendar controller
never uses the Document model. Do you need to add a listener to Document in the
bootstrap.php to catch when it saves? No, if Document model is only used from
the Documents controller, then you only need to attach the listener there.

On the other hand, the User model is used by the Auth component almost every. If
you want to handle a User being deleted. You might have to attach an event
listener in the bootstrap.php to ensure no deletes sneak by you.

In the above example we can attach directly to the User model like so.

<?php
    App::uses('MyListener','Lib');
    $user = ClassRegistry::init('App.User');
    $user->getEventManager()->attach(new MyListener());
?>

This line will import your listener class.
    App::uses('MyListener','Lib');

This line will get an instance of the User Model.
    $user = ClassRegistry::init('App.User');

This line creates a listener, and attaches it to the User model.
    $user->getEventManager()->attach(new MyListener());

If the User Model is used in many different places. You might have to do this in
the bootstrap.php, but if it's only used by one controller. You can place that
code in the beforeFilter or at the top of the PHP file.

What About Global EventManager?

Assuming we need to listen for general events. Like when ever any thing is
saved. We would want to attach to the global EventManager. It would go something
like this, and be placed in the bootstrap.php.

<?php
    App::uses('MyListener','Lib');
    CakeEventManager::instance()->attach(new MyListener());
?