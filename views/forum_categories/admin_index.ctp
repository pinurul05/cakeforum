<div class="forumCategories index">
	<h2><?php __('Forum Categories');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('topics');?></th>
			<th><?php echo $this->Paginator->sort('posts');?></th>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<!--<th><?php #echo $this->Paginator->sort('last_topic_id');?></th>-->
			<th><?php echo $this->Paginator->sort('last_topic_subject');?></th>
			<th><?php echo $this->Paginator->sort('last_topic_created');?></th>
			<!--<th><?php #echo $this->Paginator->sort('last_topic_user_id');?></th>-->
			<th><?php echo $this->Paginator->sort('last_topic_username');?></th>
			<th><?php echo $this->Paginator->sort('parent_id');?></th>
			<th><?php echo $this->Paginator->sort('lft');?></th>
			<th><?php echo $this->Paginator->sort('rght');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($forumCategories as $forumCategory):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $forumCategory['ForumCategory']['id']; ?>&nbsp;</td>
		<td><?php echo $forumCategory['ForumCategory']['name']; ?>&nbsp;</td>
		<td><?php echo $forumCategory['ForumCategory']['description']; ?>&nbsp;</td>
		<td><?php echo $forumCategory['ForumCategory']['topics']; ?>&nbsp;</td>
		<td><?php echo $forumCategory['ForumCategory']['posts']; ?>&nbsp;</td>
		<td><?php echo $forumCategory['ForumCategory']['order']; ?>&nbsp;</td>
		<!--<td><?php #echo $forumCategory['ForumTopic']['last_topic_id']; ?>&nbsp;</td>-->
		<td><?php echo $forumCategory['ForumCategory']['last_topic_subject']; ?>&nbsp;</td>
		<td><?php echo $forumCategory['ForumCategory']['last_topic_created']; ?>&nbsp;</td>
		<!--<td><?php #echo $forumCategory['ForumCategory']['last_topic_user_id']; ?>&nbsp;</td>-->
		<td><?php echo $forumCategory['ForumCategory']['last_topic_username']; ?>&nbsp;</td>
		<td><?php echo $forumCategory['ForumCategory']['parent_id']; ?>&nbsp;</td>
		<td><?php echo $forumCategory['ForumCategory']['lft']; ?>&nbsp;</td>
		<td><?php echo $forumCategory['ForumCategory']['rght']; ?>&nbsp;</td>
		<td><?php echo $forumUtil->display_status($forumCategory['ForumCategory']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $forumCategory['ForumCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $forumCategory['ForumCategory']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $forumCategory['ForumCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $forumCategory['ForumCategory']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Forum Category', true), array('action' => 'add')); ?></li>
	</ul>
</div>
