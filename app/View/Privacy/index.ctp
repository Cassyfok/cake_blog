<!-- File: /app/View/Privacy/index.ctp -->


<div class="actions">
	<ul>
		<td><?php echo $this->Html->link(__('Add Blog'), array('action' => 'add')); ?></td>
		<td><?php echo $this->Html->link('Logout',array('controller'=>'users', 'action'=>'logout')); ?></td>		
	</ul>
</div>
	