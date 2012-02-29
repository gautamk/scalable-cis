<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link(__('CakePHP: the rapid development php framework'), 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => __('CakePHP: the rapid development php framework'), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php
	echo "<!--"; 
	echo WWW_ROOT.":".DS.":".WEBROOT_DIR.":".JS.":".CSS;
	echo "\n".$this->params['action'];
	echo "-->"; 

    /*
    	WWW_ROOT generally refers to your webroot directory
    	DS is usually '/'
    	$this->params['controller'] returns controller name in lowercase 
    	$this->params['action'] returns action name in lowercase 
    	Refer 
    		* http://book.cakephp.org/2.0/en/core-libraries/global-constants-and-functions.html
    		* http://stackoverflow.com/a/1425219
    */
    if (is_file(WWW_ROOT . 'js' . DS . $this->params['controller'] . DS . $this->params['action'] . '.js')) {
        echo $this->Html->script($this->params['controller'].DS.$this->params['action']);
    }

    if (is_file(WWW_ROOT . 'css' . DS . $this->params['controller'] . DS . $this->params['action'] . '.css')) {
        echo $this->Html->css($this->params['controller'].DS.$this->params['action']);
    }

    /*
		Where to place JS and CSS files
		APP_DIR/webroot/js/<lowercase_controller_name>/<lowercase_action_name>.js
		APP_DIR/webroot/css/<lowercase_controller_name>/<lowercase_action_name>.css

		Example
		APP_DIR/webroot/js/pages/index.js
		APP_DIR/webroot/css/pages/index.css
	*/

	?>




</body>
</html>