<!-- File: /app/View/Users/index.ctp -->
<div class="users index">
<div class="panel panel-default">
<div class="panel-heading">Users Index</div>
<div class="table-responsive">
<table class="table">
<thead>
    <tr>
		<th><?php echo $this->Form->checkbox('all', array('name' => 'CheckAll',  'id' => 'CheckAll')); ?></th>	
		<th><?php echo $this->Paginator->sort('id','ID');?>	
		<th><?php echo $this->Paginator->sort('username','Username');?></th>
        <th><?php echo $this->Paginator->sort('password','Password');?></th>
		<th><?php echo $this->Paginator->sort('role','Role');?></th>
		<th><?php echo $this->Paginator->sort('created','Created');?></th>
		<th><?php echo $this->Paginator->sort('edit','Edit')?></th>
	    <th><?php echo $this->Paginator->sort('Last Update');?></th>
		<th><?php echo $this->Paginator->sort('Delete')?></th>
    </tr>
</thead>
<tbody>
    <!-- Here is where we loop through our $posts array, printing out post info -->
<?php $count=0; ?>
     <?php foreach($users as $user): ?>                
     <?php $count ++;?>
     <?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
     <?php endif; ?>
<td><?php echo $this->Form->checkbox('User.id.'.$user['User']['id']); ?></td>
<td><?php echo $this->Html->link($user['User']['id'],array('action'=>'view',
			$user['User']['id'])); ?></td>
<td><?php echo $this->Html->link($user['User']['username'],array('action'=>'view', 
			$user['User']['id']),array('escape' => false));?></td>
<td><?php echo $user['User']['password']; ?></td>
<td><?php echo $user['User']['role']; ?></td>
<td><?php echo $this->Time->niceShort($user['User']['created']); ?></td> 
<td><?php echo $this->Html->link('Edit', array('action' => 'edit', 
			$user['User']['id']));?></td> <!-- send data to User model by identify the user Id-->
<td><?php echo $this->Time->niceShort($user['User']['modified']); ?></td>
<td><?php echo $this->Form->postLink('Delete',array('action'=>'delete', 
			$user['User']['id']),array('confirm' => 'Are you sure?')); ?></td>             
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
	</tbody>
</table>
<div>
<?php echo $this->Paginator->prev('<<  ' . __('previous  ', true), array(), null, array('class'=>'disabled'));?>
<?php echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php echo $this->Paginator->next(__(' next', true) . '  >>', array(), null, array('class' => 'disabled'));?>
</div>
</div>
</div>
</div>

<div class="actions">
<div class="addpost">
		<ul>
			<li><?php echo $this->Html->link('Add Blogs',array('controller' => 'posts', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link('Add Users',array('controller' => 'users', 'action' => 'add')); ?></li>
			<li><?php if (isset($username)) { ?>
				<?php echo $this->Html->link('Logout',array('plugin'=>null,//create a Log out button
				//and Html helper creates a link to logout page. It executes  action logout by controller from users. 
				'admin'=>false, 'controller'=>'users', 'action'=>'logout'));
				}
				//otherwise it create a Log in button if user has not login into application yet.
				else { echo $this->Html->link('Logout', array('plugin'=>null,
				'admin'=>false, 'controller'=>'users', 'action'=>'login'));	} ?></li>
		</ul>
</div>		
</div>

