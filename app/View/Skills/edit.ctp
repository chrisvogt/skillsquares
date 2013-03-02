<div class="skills form">
<?php echo $this->Form->create('Skill'); ?>
	<fieldset>
		<legend><?php echo __('Edit Skill'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('Test');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Skill.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Skill.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Skills'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tests'), array('controller' => 'tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'tests', 'action' => 'add')); ?> </li>
	</ul>
</div>
