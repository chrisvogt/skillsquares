<div class="tests view">
<h2><?php  echo __('Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($test['Test']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($test['Test']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provider'); ?></dt>
		<dd>
			<?php echo $this->Html->link($test['Provider']['name'], array('controller' => 'providers', 'action' => 'view', $test['Provider']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Icon'); ?></dt>
		<dd>
			<?php echo h($test['Test']['icon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Take Test Url'); ?></dt>
		<dd>
			<?php echo h($test['Test']['take_test_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Slug'); ?></dt>
		<dd>
			<?php echo h($test['Test']['url_slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($test['Test']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($test['Test']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($test['Test']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Test'), array('action' => 'edit', $test['Test']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Test'), array('action' => 'delete', $test['Test']['id']), null, __('Are you sure you want to delete # %s?', $test['Test']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('controller' => 'providers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('controller' => 'providers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Skills'); ?></h3>
	<?php if (!empty($test['Skill'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($test['Skill'] as $skill): ?>
		<tr>
			<td><?php echo $skill['id']; ?></td>
			<td><?php echo $skill['title']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'skills', 'action' => 'view', $skill['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'skills', 'action' => 'edit', $skill['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'skills', 'action' => 'delete', $skill['id']), null, __('Are you sure you want to delete # %s?', $skill['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
