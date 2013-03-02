<div class="skillsTests view">
<h2><?php  echo __('Skills Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($skillsTest['SkillsTest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skill'); ?></dt>
		<dd>
			<?php echo $this->Html->link($skillsTest['Skill']['title'], array('controller' => 'skills', 'action' => 'view', $skillsTest['Skill']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Test'); ?></dt>
		<dd>
			<?php echo $this->Html->link($skillsTest['Test']['name'], array('controller' => 'tests', 'action' => 'view', $skillsTest['Test']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Skills Test'), array('action' => 'edit', $skillsTest['SkillsTest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Skills Test'), array('action' => 'delete', $skillsTest['SkillsTest']['id']), null, __('Are you sure you want to delete # %s?', $skillsTest['SkillsTest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills Tests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skills Test'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tests'), array('controller' => 'tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'tests', 'action' => 'add')); ?> </li>
	</ul>
</div>
