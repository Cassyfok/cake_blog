<!-- File: /app/View/Posts/index.ctp -->
<div class= "posts index">
<div class="panel panel-default">
<div class="panel-heading">MY BLOG POSTS</div>
<div class="table-responsive">
<table class="table">
    <tr>
		<th>Title</th>
        <th>Created</th>
		<th>Delete</th>
		<th>Edit</th>
		<th>User Id</th>
		<th>Editor</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->
	
    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $this->Html->link($post['Post']['title'],array('action'=>'view', $post['Post']['id'])); ?></td>
		
		<td><?php echo $this->Time->niceShort($post['Post']['created']); ?></td>
		
		<td><?php echo $this->Form->postLink('Delete',array('action'=>'delete', $post['Post']['id']),array('confirm' => 'Are you sure?')); ?></td>

		<td><?php echo $this->Html->link('Edit',array('action' => 'edit', $post['Post']['id'])); ?></td>
		<!--create another column or table data-->
		<td> <?php echo $post['Post']['user_id']; ?> </td> 
        <!-- and pass user_id from post database-->    
		<td><p><?php echo h($post['User']['username']); ?></p></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
</div>
</div>
</div>

<div class="actions">

	<ul>
		<li><?php echo $this->Html->link(__('Add Blog'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link('Logout',array('controller'=>'users', 'action'=>'logout')); ?></li>		
	</ul>
	
</div>

	



