<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activation Key'); ?></dt>
		<dd>
			<?php echo h($user['User']['activation_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Spam'); ?></dt>
		<dd>
			<?php echo h($user['User']['is_spam']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Admin'); ?></dt>
		<dd>
			<?php echo h($user['User']['is_admin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Scores'), array('controller' => 'scores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Score'), array('controller' => 'scores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Scores'); ?></h3>
	<?php if (!empty($user['UserScore'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Test Id'); ?></th>
		<th><?php echo __('Score'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserScore'] as $userScore): ?>
		<tr>
			<td><?php echo $userScore['id']; ?></td>
			<td><?php echo $userScore['user_id']; ?></td>
			<td><?php echo $userScore['test_id']; ?></td>
			<td><?php echo $userScore['score']; ?></td>
			<td><?php echo $userScore['modified']; ?></td>
			<td><?php echo $userScore['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'scores', 'action' => 'view', $userScore['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'scores', 'action' => 'edit', $userScore['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'scores', 'action' => 'delete', $userScore['id']), null, __('Are you sure you want to delete # %s?', $userScore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Score'), array('controller' => 'scores', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
