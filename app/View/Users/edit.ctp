<!-- File: /app/View/Users/edit.ctp -->

<h1>Edit Users</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('User Name');
echo $this->Form->input('Password');
echo $this->Form->input('Re-confirm Password');
echo $this->Form->input('Role');
echo $this->Form->end('Save');
?>