<div class="forum-path">
<?php $uname = Configure::read('username'); ?>
<?php echo $html->link('Forum index', array('controller' => 'forum', 'action' => 'index')); ?> » 
<?php echo $data['User'][$uname]; ?>
</div>
<div class="forum-topic-title">User: <?php echo $data['User'][$uname]; ?></div>
Joined: <?php echo $time->format('d.m.Y H:i', $data['User']['created']); ?>
