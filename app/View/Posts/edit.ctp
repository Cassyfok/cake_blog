<!-- File: /app/View/Posts/edit.ctp -->

<div class="users form">
<?php echo $this->Form->create('Post');?>
		<h3>Edit Blog</h3>
		<fieldset>
			<?php
				echo $this->Form->create('Post');
				echo $this->Form->input('title');
				echo $this->Form->input('body', array('rows' => '3'));
				echo $this->Form->input('id', array('type' => 'hidden'));
			?>
		</fieldset>
		<?php echo $this->Form->end(__('Save')); ?>
</div>

<div class="actions">	
	<ul>
		<li><?php echo $this->Html->link("Return to Blogs Index",array('action'=>'index')); ?></li>
		<li><?php echo $this->Html->link(__('Add Blog'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link('Logout',array('controller'=>'users', 'action'=>'logout')); ?></li>		
	</ul>	
</div>