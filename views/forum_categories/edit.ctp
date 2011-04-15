<div class="forumCategories form">
<?php echo $this->Form->create('ForumCategory');?>
	<fieldset>
 		<legend><?php __('Edit Forum Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('topics');
		echo $this->Form->input('posts');
		echo $this->Form->input('order');
		echo $this->Form->input('last_topic_id');
		echo $this->Form->input('last_topic_subject');
		echo $this->Form->input('last_topic_created');
		echo $this->Form->input('last_topic_user_id');
		echo $this->Form->input('last_topic_username');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('lft');
		echo $this->Form->input('rght');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ForumCategory.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ForumCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Forum Categories', true), array('action' => 'index'));?></li>
	</ul>
</div>