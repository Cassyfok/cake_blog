<!-- File: /app/View/Users/index.ctp -->
<div class="users index">
<div class="panel panel-default">
<div class="panel-heading">Users Index</div>
<div class="table-responsive">
<table class="table">
    <tr>
        <th>UserId</th>
        <th>UserName</th>
        <th>Password</th>
		<th>Role</th>
        <th>Created</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td><?php echo $this->Html->link($user['User']['username'], array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['User']['password']; ?></td> 
		<td><?php echo $user['User']['role']; ?></td>
        <td><?php echo $user['User']['created']; ?></td> 		
        <td><?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id']));?></td> <!-- send data to User model by identify the user Id-->
        <td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id']), array('confirm' => 'Are you sure?')); ?>                   
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>
</div>
</div>

<div class="actions">
	<div id="addpost">
	<!--it is used in css div#addpost-->
		<ul>
			<td><?php echo $this->Html->link('Add User',array('controller' => 'users', 'action' => 'add')); ?></td>
			<td><?php if (isset($username)) { ?>
				<?php echo $this->Html->link('Logout',array('plugin'=>null,//create a Log out button
				//and Html helper creates a link to logout page. It executes  action logout by controller from users. 
				'admin'=>false, 'controller'=>'users', 'action'=>'logout'));
				}
				//otherwise it create a Log in button if user has not login into application yet.
				else { echo $this->Html->link('Logout', array('plugin'=>null,
				'admin'=>false, 'controller'=>'users', 'action'=>'login'));	} ?></td>
		</ul>	
	</div>	
</div>

