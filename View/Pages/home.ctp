<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');

echo $this->Html->link(
	'Events',
	array('controller'=>'Events'),
	array('target' => '_blank', 'escape' => false)
);

?>
</BR></BR>
<pre>
Up Dog Throw and Go Field and Rules
	Dog and handler must be behind the start line (furthest marked line at either end of field) before time begins.  
	
	Handler will signal to the line judge when they are ready.  Line judge will signal to time keeper/announcer and announcer will begin time.
	
	Handler may move anywhere on the field to retrieve disc of dog, but 
	all throws must originate with the thrower keeping both feet behind the throwing line until the disc is released.

	Handler and dog have 60 seconds to complete as many catches as possible.  Time is over as the “t” in time is enunciated by the announcer

Scoring:
	Catches in the 10-20 yard zone – 1 point
	Catches in the 20-30 yard zone – 2 points
	Catches in the 30-40 yard zone – 3 points
	Catches in the 40-50 yard zone – 4 points

	A catch in the interior ten yard section of field as noted by yellow boundary produces double the indicated score

	There is no anti-gravity bonus

Throw and Go Achievements (Level 1)
	5-9 points in a round
	10-14 points in a round
	15-19 points in a round
	20-24 points in a round
	25-29 points in a round
	30-34 points in a round
	35-39 points in a round
	40-44 points in a round
	45 points or higher in a round
	Sharpshooter Achievement - All throws regardless of point value were in the bonus zone 
	Golden Receiver Achievement – All throws caught regardless of points and/or OB

Throw and Go UPs (Level 1) – Collect 3 out of 5 ups to move to next level
	Sharpshooter UP – Five Sharpshooter Achievements
	Golden Receiver UP – Five Golden Receiver Achievements
	Throw and Go Bronze UP – Five rounds of 20 points or greater
	Throw and Go Silver UP – Five rounds of 30 points or greater
	Throw and Go Gold UP – Five rounds of 40 points or greater

Level 2: 
	Bonus zone becomes one of the sides – thrower choice

Level 3:
	Only points for middle zone

Level 4: 
	Middle zone is out, bonus zone is selected by thrower
</pre>
<?php


/*
?>
<h2><?php echo __d('cake_dev', 'Release Notes for CakePHP %s.', Configure::version()); ?></h2>
<p>
	<a href="http://cakephp.org/changelogs/<?php echo Configure::version(); ?>"><?php echo __d('cake_dev', 'Read the changelog'); ?> </a>
</p>
<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>
<?php
if (file_exists(WWW_ROOT . 'css' . DS . 'cake.generic.css')):
?>
<p id="url-rewriting-warning" style="background-color:#e32; color:#fff;">
	<?php echo __d('cake_dev', 'URL rewriting is not properly configured on your server.'); ?>
	1) <a target="_blank" href="http://book.cakephp.org/2.0/en/installation/url-rewriting.html" style="color:#fff;">Help me configure it</a>
	2) <a target="_blank" href="http://book.cakephp.org/2.0/en/development/configuration.html#cakephp-core-configuration" style="color:#fff;">I don't / can't use URL rewriting</a>
</p>
<?php
endif;
?>
<p>
<?php
	if (version_compare(PHP_VERSION, '5.2.8', '>=')):
		echo '<span class="notice success">';
			echo __d('cake_dev', 'Your version of PHP is 5.2.8 or higher.');
		echo '</span>';
	else:
		echo '<span class="notice">';
			echo __d('cake_dev', 'Your version of PHP is too low. You need PHP 5.2.8 or higher to use CakePHP.');
		echo '</span>';
	endif;
?>
</p>
<p>
	<?php
		if (is_writable(TMP)):
			echo '<span class="notice success">';
				echo __d('cake_dev', 'Your tmp directory is writable.');
			echo '</span>';
		else:
			echo '<span class="notice">';
				echo __d('cake_dev', 'Your tmp directory is NOT writable.');
			echo '</span>';
		endif;
	?>
</p>
<p>
	<?php
		$settings = Cache::settings();
		if (!empty($settings)):
			echo '<span class="notice success">';
				echo __d('cake_dev', 'The %s is being used for core caching. To change the config edit %s', '<em>'. $settings['engine'] . 'Engine</em>', 'APP/Config/core.php');
			echo '</span>';
		else:
			echo '<span class="notice">';
				echo __d('cake_dev', 'Your cache is NOT working. Please check the settings in %s', 'APP/Config/core.php');
			echo '</span>';
		endif;
	?>
</p>
<p>
	<?php
		$filePresent = null;
		if (file_exists(APP . 'Config' . DS . 'database.php')):
			echo '<span class="notice success">';
				echo __d('cake_dev', 'Your database configuration file is present.');
				$filePresent = true;
			echo '</span>';
		else:
			echo '<span class="notice">';
				echo __d('cake_dev', 'Your database configuration file is NOT present.');
				echo '<br/>';
				echo __d('cake_dev', 'Rename %s to %s', 'APP/Config/database.php.default', 'APP/Config/database.php');
			echo '</span>';
		endif;
	?>
</p>
<?php
if (isset($filePresent)):
	App::uses('ConnectionManager', 'Model');
	try {
		$connected = ConnectionManager::getDataSource('default');
	} catch (Exception $connectionError) {
		$connected = false;
		$errorMsg = $connectionError->getMessage();
		if (method_exists($connectionError, 'getAttributes')):
			$attributes = $connectionError->getAttributes();
			if (isset($errorMsg['message'])):
				$errorMsg .= '<br />' . $attributes['message'];
			endif;
		endif;
	}
?>
<p>
	<?php
		if ($connected && $connected->isConnected()):
			echo '<span class="notice success">';
				echo __d('cake_dev', 'CakePHP is able to connect to the database.');
			echo '</span>';
		else:
			echo '<span class="notice">';
				echo __d('cake_dev', 'CakePHP is NOT able to connect to the database.');
				echo '<br /><br />';
				echo $errorMsg;
			echo '</span>';
		endif;
	?>
</p>
<?php endif; ?>
<?php
	App::uses('Validation', 'Utility');
	if (!Validation::alphaNumeric('cakephp')):
		echo '<p><span class="notice">';
			echo __d('cake_dev', 'PCRE has not been compiled with Unicode support.');
			echo '<br/>';
			echo __d('cake_dev', 'Recompile PCRE with Unicode support by adding <code>--enable-unicode-properties</code> when configuring');
		echo '</span></p>';
	endif;
?>

<p>
	<?php
		if (CakePlugin::loaded('DebugKit')):
			echo '<span class="notice success">';
				echo __d('cake_dev', 'DebugKit plugin is present');
			echo '</span>';
		else:
			echo '<span class="notice">';
				echo __d('cake_dev', 'DebugKit is not installed. It will help you inspect and debug different aspects of your application.');
				echo '<br/>';
				echo __d('cake_dev', 'You can install it from %s', $this->Html->link('GitHub', 'https://github.com/cakephp/debug_kit'));
			echo '</span>';
		endif;
	?>
</p>

<h3><?php echo __d('cake_dev', 'Editing this Page'); ?></h3>
<p>
<?php
echo __d('cake_dev', 'To change the content of this page, edit: %s.<br />
To change its layout, edit: %s.<br />
You can also add some CSS styles for your pages at: %s.',
	'APP/View/Pages/home.ctp', 'APP/View/Layouts/default.ctp', 'APP/webroot/css');
?>
</p>

<h3><?php echo __d('cake_dev', 'Getting Started'); ?></h3>
<p>
	<?php
		echo $this->Html->link(
			sprintf('<strong>%s</strong> %s', __d('cake_dev', 'New'), __d('cake_dev', 'CakePHP 2.0 Docs')),
			'http://book.cakephp.org/2.0/en/',
			array('target' => '_blank', 'escape' => false)
		);
	?>
</p>
<p>
	<?php
		echo $this->Html->link(
			__d('cake_dev', 'The 15 min Blog Tutorial'),
			'http://book.cakephp.org/2.0/en/tutorials-and-examples/blog/blog.html',
			array('target' => '_blank', 'escape' => false)
		);
	?>
</p>

<h3><?php echo __d('cake_dev', 'Official Plugins'); ?></h3>
<p>
<ul>
	<li>
		<?php echo $this->Html->link('DebugKit', 'https://github.com/cakephp/debug_kit') ?>:
		<?php echo __d('cake_dev', 'provides a debugging toolbar and enhanced debugging tools for CakePHP applications.'); ?>
	</li>
	<li>
		<?php echo $this->Html->link('Localized', 'https://github.com/cakephp/localized') ?>:
		<?php echo __d('cake_dev', 'contains various localized validation classes and translations for specific countries'); ?>
	</li>
</ul>
</p>

<h3><?php echo __d('cake_dev', 'More about CakePHP'); ?></h3>
<p>
<?php echo __d('cake_dev', 'CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Active Record, Association Data Mapping, Front Controller and MVC.'); ?>
</p>
<p>
<?php echo __d('cake_dev', 'Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.'); ?>
</p>

<ul>
	<li><a href="http://cakephp.org">CakePHP</a>
	<ul><li><?php echo __d('cake_dev', 'The Rapid Development Framework'); ?></li></ul></li>
	<li><a href="http://book.cakephp.org"><?php echo __d('cake_dev', 'CakePHP Documentation'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Your Rapid Development Cookbook'); ?></li></ul></li>
	<li><a href="http://api.cakephp.org"><?php echo __d('cake_dev', 'CakePHP API'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Quick API Reference'); ?></li></ul></li>
	<li><a href="http://bakery.cakephp.org"><?php echo __d('cake_dev', 'The Bakery'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Everything CakePHP'); ?></li></ul></li>
	<li><a href="http://plugins.cakephp.org"><?php echo __d('cake_dev', 'CakePHP Plugins'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'A comprehensive list of all CakePHP plugins created by the community'); ?></li></ul></li>
	<li><a href="http://community.cakephp.org"><?php echo __d('cake_dev', 'CakePHP Community Center'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Everything related to the CakePHP community in one place'); ?></li></ul></li>
	<li><a href="https://groups.google.com/group/cake-php"><?php echo __d('cake_dev', 'CakePHP Google Group'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Community mailing list'); ?></li></ul></li>
	<li><a href="irc://irc.freenode.net/cakephp">irc.freenode.net #cakephp</a>
	<ul><li><?php echo __d('cake_dev', 'Live chat about CakePHP'); ?></li></ul></li>
	<li><a href="https://github.com/cakephp/"><?php echo __d('cake_dev', 'CakePHP Code'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Find the CakePHP code on GitHub and contribute to the framework'); ?></li></ul></li>
	<li><a href="https://github.com/cakephp/cakephp/issues"><?php echo __d('cake_dev', 'CakePHP Issues'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'CakePHP Issues'); ?></li></ul></li>
	<li><a href="https://github.com/cakephp/cakephp/wiki#roadmaps"><?php echo __d('cake_dev', 'CakePHP Roadmaps'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'CakePHP Roadmaps'); ?></li></ul></li>
	<li><a href="http://training.cakephp.org"><?php echo __d('cake_dev', 'Training'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Join a live session and get skilled with the framework'); ?></li></ul></li>
	<li><a href="http://cakefest.org"><?php echo __d('cake_dev', 'CakeFest'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Don\'t miss our annual CakePHP conference'); ?></li></ul></li>
	<li><a href="http://cakefoundation.org"><?php echo __d('cake_dev', 'Cake Software Foundation'); ?> </a>
	<ul><li><?php echo __d('cake_dev', 'Promoting development related to CakePHP'); ?></li></ul></li>
</ul>
<?php 
*/
?>