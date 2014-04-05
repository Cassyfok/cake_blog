<!-- app/View/Users/login.ctp -->

<div class="users form">
<?php echo $this->Session->flash('auth')?>
<?php echo $this->Form->create('User', array('action' => 'login')); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>			
			 <?php echo $this->Form->input('username');
				echo $this->Form->input('password'); ?>	
			 
    </fieldset>
<?php echo $this->Form->end('Login'); ?>
	
</div>
<div class="actions">
	<h3><?php echo __('Dash Box'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		
	</ul>
</div>