<!-- File: /app/View/Posts/add.ctp -->
<div class="posts form">
	<?php echo $this->Form->create('Post'); ?>
		<fieldset>
			<legend><?php echo __('Add Blog'); ?></legend>
			<?php
				echo $this->Form->create('Post');
				echo $this->Form->input('title');
				echo $this->Form->input('body', array('rows' => '3'));
			?>
		</fieldset>
	<?php echo $this->Form->end(__('Add')); ?>
</div>

<div class="actions">
	<div class="addpost">
		<ul>
		<li><?php if ($this->Session->check('Auth.User')){
			echo $this->Html->link("Return to Blog Index",array('action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Logout',array('controller'=>'users', 'action'=>'logout')); }?></li>		
		</ul>
	</div>
</div>