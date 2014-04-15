<?php
/**
 *
 *
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
?>

<!DOCTYPE html>
<html>
<head>	
	<?php echo $this->Html->charset(); ?>
	<title>
	Digital Carte System		
	</title>
	
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->HTML->css('bootstrap');
		echo $this->HTML->css('styles');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');		
	?>
</head>

<body>
	<div id="container">
	
		<div id="header">
			<ul class="nav nav-pills">
			<li><?php echo $this->Html->link(
					$this->Html->image('icon_facebook.png', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.facebook.com/',
					array('target' => '_blank', 'escape' => false));?></li>
			<li><?php echo $this->Html->link(
					$this->Html->image('twitter.jpg', array('alt' => $cakeDescription, 'border' => '0')),
					'http://https://twitter.com//',
					array('target' => '_blank', 'escape' => false));?></li>	
			<li><?php if(!isset($username)) { //  if users not login, it will bring to login page when users click on button of USER           
               	echo $this->Html->link('User', array('controller' => 'users', 'action' => 'login'));            
			} else {
				echo $this->Html->link('User', array('controller' => 'users', 'action' => 'index'));}?> </li>
			<li><?php if(!isset($username)) { //  if users not login, it will bring tologin page when users click on button of POST           
               	echo $this->Html->link('Post', array('controller' => 'users', 'action' => 'login'));            
			} else {
				echo $this->Html->link('Post', array('controller' => 'posts', 'action' => 'index'));}?> </li>
			<li><?php echo $this->Html->link('Privacy', array('controller' => 'pages', 'action' => 'home')); ?></li>
			<li><?php if(AuthComponent::user()){
					echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'));
					}else {echo $this->Html->link('Login', array('controller'=>'users','action'=>'login'));}?></li>
			</ul>			
		</div>
		
		<div id="content">
		<div class="userlogout .col-md-3 .col-md-offset-3">
			<?php if(AuthComponent::user()){
				echo $this->Html->image('fb2.jpg');
				echo ' '.AuthComponent::user('username').',';
				echo $this->Html->link(' Logout', array('controller'=>'users','action'=>'logout'));
				}
			?>
			 
		</div>	
		
		<div id="welcome">	
			<h1>Hi <?php echo $username; ?>, Welcome To DCS Blog! </h1>
		</div>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>			
		
		
		<div id="footer">				
			<div class="copyright">		
			<h5><?php echo $this->Html->image('spiro-7xs.jpg');?> &copy; Copyright by Cassy0106Ken</h5>			
			</div>
		</div>	
		
	</div>	
</body>
</html>
