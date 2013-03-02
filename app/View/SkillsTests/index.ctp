<div class="skillsTests index">
	<h2><?php echo __('Skills Tests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('skill_id'); ?></th>
			<th><?php echo $this->Paginator->sort('test_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($skillsTests as $skillsTest): ?>
	<tr>
		<td><?php echo h($skillsTest['SkillsTest']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($skillsTest['Skill']['title'], array('controller' => 'skills', 'action' => 'view', $skillsTest['Skill']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($skillsTest['Test']['name'], array('controller' => 'tests', 'action' => 'view', $skillsTest['Test']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $skillsTest['SkillsTest']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $skillsTest['SkillsTest']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $skillsTest['SkillsTest']['id']), null, __('Are you sure you want to delete # %s?', $skillsTest['SkillsTest']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Skills Test'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tests'), array('controller' => 'tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'tests', 'action' => 'add')); ?> </li>
	</ul>
</div>
