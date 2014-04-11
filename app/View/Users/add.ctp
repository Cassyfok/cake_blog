<!-- app/View/Users/add.ctp -->

<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Registration of New User'); ?></legend>
        <?php 
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('password_confirmation', array('type'=>'password'));		
        echo $this->Form->input('role', array('options' => array('admin' => 'Admin','author' => 'Author','customer'=>'Customer')));
		
	?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<div class="actions">
	<div class="addpost">
	<ul>
	<li><?php if ($this->Session->check('Auth.User')){
		echo $this->Html->link("Return to Dashboard",array('action'=>'index')); ?></li>
	<li><?php echo $this->Html->link('Logout',array('controller'=>'users', 'action'=>'logout')); }?></li>		
	</ul>
	</div>
</div>