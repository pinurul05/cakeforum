<div class="forumCategories form">
<?php echo $this->Form->create('ForumCategory');?>
	<fieldset>
 		<legend><?php __('Admin Add Forum Category'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('order', array('type' => 'text', 'value' => 0));
		echo $this->Form->input('parent_id', array(
			'value' => '',
			'empty' => true,
			'type' => 'select',
			'options' => $parentCategory
		));
		echo $this->Form->input('lft', array('label' => 'Left'));
		echo $this->Form->input('rght', array('label' => 'Right'));
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Forum Categories', true), array('action' => 'index'));?></li>
	</ul>
</div>
