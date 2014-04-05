<!-- File: /app/View/Posts/view.ctp -->
<div class="post view">
<p><h1><?php echo h($post['Post']['title']); ?></h1></p>
<p>Created: <?php echo $post['Post']['created']; ?></p>
<p><?php echo h($post['Post']['body']); ?></p>
<p><?php echo h($post['User']['username']); ?></p>
<p><?php echo h($post['User']['role']); ?></p>
</div>

<div class="actions">
<div id = "goback">
<?php echo $this->Html->link('Back to index page',array('controller' => 'posts', 'action' => 'index')); ?>
</div>
</div>