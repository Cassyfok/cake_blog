<!-- File: /app/View/Posts/index.ctp -->
<div class= "posts index">
<div class="panel panel-default">
<div class="panel-heading">MY BLOGS</div>
<div class="table-responsive">
<table class="table">
   <tr>
		<th>ID</th>
		<th>Title</th>
        <th>Created</th>
		<th>Edit</th>
		<th>Last Update</th>
		<th>User Id</th>
		<th>Editor</th>
		<th>Delete</th>
    </tr>
    <!-- Here is where we loop through our $posts array, printing out post info -->
	
    <?php foreach ($posts as $post): ?>

    <tr>
		<td><?php echo $this->Html->link($post['Post']['id'],array('action'=>'view', $post['Post']['id'])); ?></td>
        <td><?php echo $this->Html->link($post['Post']['title'],array('action'=>'view', $post['Post']['id'])); ?></td>		
		<td><?php echo $this->Time->niceShort($post['Post']['created']); ?></td>
		<td><?php echo $this->Html->link('Edit',array('action' => 'edit', $post['Post']['id'])); ?></td>
		<td><?php echo $this->Time->niceShort($post['Post']['modified']); ?></td>
		<!--create another column or table data-->
		<td> <?php echo $post['Post']['user_id']; ?> </td> 
        <!-- and pass user_id from post database-->    
		<td><?php echo h($post['User']['username']); ?></td>
		<td><?php echo $this->Form->postLink('Delete',array('action'=>'delete', $post['Post']['id']),array('confirm' => 'Are you sure?')); ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>

</table>
</div>
</div>
</div>

<div class="actions">
<div class="addpost">
	<ul>
		<li><?php echo $this->Html->link(__('Add Blog'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link('Logout',array('controller'=>'users', 'action'=>'logout')); ?></li>		
	</ul>
</div>	
</div>

	



