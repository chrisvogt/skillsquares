<div class="skills view">
<h2><?php  echo __('Skill'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Skill'), array('action' => 'edit', $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Skill'), array('action' => 'delete', $skill['Skill']['id']), null, __('Are you sure you want to delete # %s?', $skill['Skill']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tests'), array('controller' => 'tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'tests', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tests'); ?></h3>
	<?php if (!empty($skill['Test'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Provider Id'); ?></th>
		<th><?php echo __('Icon'); ?></th>
		<th><?php echo __('Take Test Url'); ?></th>
		<th><?php echo __('Url Slug'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($skill['Test'] as $test): ?>
		<tr>
			<td><?php echo $test['id']; ?></td>
			<td><?php echo $test['name']; ?></td>
			<td><?php echo $test['provider_id']; ?></td>
			<td><?php echo $test['icon']; ?></td>
			<td><?php echo $test['take_test_url']; ?></td>
			<td><?php echo $test['url_slug']; ?></td>
			<td><?php echo $test['is_active']; ?></td>
			<td><?php echo $test['created']; ?></td>
			<td><?php echo $test['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tests', 'action' => 'view', $test['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tests', 'action' => 'edit', $test['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tests', 'action' => 'delete', $test['id']), null, __('Are you sure you want to delete # %s?', $test['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'tests', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
