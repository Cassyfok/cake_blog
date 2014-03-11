<!-- File: /app/View/Users/view.ctp -->

<h1><?php echo h($user['User']['id']); ?></h1>

<p><small>Created: <?php echo $user['User']['username']; ?></small></p>

<p><?php echo h($user['User']['password']); ?></p>
<p><?php echo h($user['User']['role']); ?></p>
<p><?php echo h($user['User']['created']); ?></p>