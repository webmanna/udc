<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();        

/**
 * Routes for REST API
 */       
    Router::connect(
        "/api/:controller/*",
        array("ext" => "json")
       );    
    
    Router::resourceMap(array(
        array('action' => 'index',  'method' => 'GET',      'id' => false),
        array('action' => 'view',   'method' => 'GET',      'id' => true),
        array('action' => 'add',    'method' => 'POST',     'id' => false),
        array('action' => 'edit',   'method' => 'PUT',      'id' => true),
        array('action' => 'delete', 'method' => 'DELETE',   'id' => true),
        array('action' => 'update', 'method' => 'POST',     'id' => true)
    ));
/**
 * Parse JSON Views when using .json extension
 */    
    Router::parseExtensions( 'json' );
        
        
/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
