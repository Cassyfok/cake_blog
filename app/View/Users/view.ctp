<!-- File: /app/View/Users/view.ctp -->
<div class="users view">
<p><?php echo $this->Html->link('View All Users',array('action' => 'index'));?></p>
<h1><?php echo h($user['User']['username']); ?></h1>
<p>Password:<?php echo $user['User']['password']; ?></p>
<p>Role: <?php echo ($user['User']['role']); ?></p>
<p>Created: <?php echo $user['User']['created']; ?></p>

*******************************************************
<?php echo '<p> You have  '.count($user['Post']).'  Posts </p>'; ?>
<?php for ($x = 0; $x < count($user['Post']); $x++){
	 echo 'Post: '.$x.'<p>Title: '.h($user['Post'][$x]['title']).'</p>'; 
	 echo '<p>Body: '.h($user['Post'][$x]['body']).'</p>';
	 echo '<p>Created '.h($user['Post'][$x]['created']).'</p>'; 
	 }
?>	 
</div>