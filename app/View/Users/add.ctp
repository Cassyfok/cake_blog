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
<?php
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Return to Dashboard",   array('action'=>'index') ); 
echo "<br>";
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') ); 
}
?>