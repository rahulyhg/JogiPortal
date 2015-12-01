<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
	<?php echo $this->Html->charset(); ?>
        <title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
        </title>
	<?php
		echo $this->Html->meta('icon');

                echo $this->Html->css('bootstrap');
                echo $this->Html->css('bootstrap-responsive');
                echo $this->Html->css('bootstrap-3.1.1.min');
                echo $this->Html->css('font-awesome.min');
                echo $this->Html->css('custom');
               
                
                echo $this->Html->script('jquery-1.9.1.min');
                echo $this->Html->script('modernizr-2.7.1.min');
                echo $this->Html->script('jquery.cycle2');
                echo $this->Html->script('jquery.cycle2.carousel');
                echo $this->Html->script('jquery.validate.min');
                echo $this->Html->script('custom');
                echo $this->Html->script('bootstrap-2.3.2.min');
                
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    </head>
    <body>
			<?php echo $this->fetch('content'); ?>
	<?php echo $this->element('sql_dump'); ?>
    </body>
</html>
