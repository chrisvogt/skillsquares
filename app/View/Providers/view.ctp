<div class="providers view">
<h2><?php  echo __('Provider'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($provider['Provider']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Provider'), array('action' => 'edit', $provider['Provider']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Provider'), array('action' => 'delete', $provider['Provider']['id']), null, __('Are you sure you want to delete # %s?', $provider['Provider']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Providers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provider'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tests'), array('controller' => 'tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'tests', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tests'); ?></h3>
	<?php if (!empty($provider['Test'])): ?>
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
		foreach ($provider['Test'] as $test): ?>
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
