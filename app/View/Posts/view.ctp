<!-- File: /app/View/Posts/view.ctp -->
<div class="post view">
<?php if(isset($post['Post'])) $title_for_layout = $post['Post']['title']?>
	<h3><?php echo h($post['Post']['title']); ?></h3><br />
	<p><?php echo h($post['Post']['body']); ?></p><br/>
	<p>Created: <?php echo $post['Post']['created']; ?></p>
	<p>Written By: <?php echo h($post['User']['username']); ?></p>
	<p>Role: <?php echo h($post['User']['role']); ?></p>
</div>

<div class="actions">
	<ul>
		<li><?php if ($this->Session->check('Auth.User')){
			echo $this->Html->link("Return to Blogs Index",array('action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Logout',array('controller'=>'users', 'action'=>'logout')); }?></li>		
	</ul>
</div>