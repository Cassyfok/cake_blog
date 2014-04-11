<!-- File: /app/View/Users/view.ctp -->
<div class="users view">
	<h3>User Name: <?php echo h($user['User']['username']); ?></h3>
	<p>ID Number: <?php echo ($user['User']['id']); ?></p>
	<p>Role: <?php echo ($user['User']['role']); ?></p>
	<p>Created: <?php echo $user['User']['created']; ?></p>

***********************************************************************
	<?php echo '<p> You have  '.count($user['Post']).'  Posts </p>'; ?>
	<?php for ($x = 0; $x < count($user['Post']); $x++){
		echo 'Post: '.$x.'<p>Title: '.h($user['Post'][$x]['title']).'</p>'; 
		echo '<p>Body: '.h($user['Post'][$x]['body']).'</p>';
		echo '<p>Written on '.h($user['Post'][$x]['created']).'</p>'; 
		}?> 
</div>

<div class="actions">
	<ul>
		<li><?php if ($this->Session->check('Auth.User')){
			echo $this->Html->link("Return to Users Index",array('action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Logout',array('controller'=>'users', 'action'=>'logout')); }?></li>		
	</ul>
</div>