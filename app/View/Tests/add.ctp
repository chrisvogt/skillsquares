<div class="tests form">
<?php echo $this->Form->create('Test'); ?>
	<fieldset>
		<legend><?php echo __('Add Test'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('provider_id');
		echo $this->Form->input('icon');
		echo $this->Form->input('take_test_url');
		echo $this->Form->input('url_slug');
		echo $this->Form->input('is_active');
		echo $this->Form->input('Skill');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
	</ul>
</div>
