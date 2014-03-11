<!-- File: /app/View/Users/index.ctp -->
<h1>Blog users</h1>
<table>
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
    <?php foreach ($users as $post): ?>
    <tr>
        <td><?php echo $post['User']['id']; ?></td>
		
        <td><?php echo $this->Html->link($post['User']['username'],array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?></td>
		
        <td><?php echo $post['User']['password']; ?></td>
        
        <td><?php echo $post['User']['role']; ?></td>
        
        <td><?php echo $post['User']['created']; ?></td>
        
        <td><?php echo $this->Html->link('Edit',array('action' => 'edit', $post['User']['id'])); ?></td><!-- send data to User model by identify the user Id-->
   
        <td><?php echo $this->Form->postLink('Delete',array('action' => 'delete', $post['User']['id']),array('confirm' => 'Are you sure?')); ?></td>   
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
<td>
	<?php echo $this->Html->link('Add User',array('controller' => 'users', 'action' => 'add')); ?>
	<?php echo $this->Html->link('Logout',array('controller' => 'posts', 'action' => 'logout')); ?>
</td>	