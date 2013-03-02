<div class="skillsTests form">
<?php echo $this->Form->create('SkillsTest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Skills Test'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('skill_id');
		echo $this->Form->input('test_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SkillsTest.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SkillsTest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Skills Tests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tests'), array('controller' => 'tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'tests', 'action' => 'add')); ?> </li>
	</ul>
</div>
