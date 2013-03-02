<div class="scores view">
<h2><?php  echo __('Score'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($score['Score']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($score['User']['name'], array('controller' => 'users', 'action' => 'view', $score['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Test'); ?></dt>
		<dd>
			<?php echo $this->Html->link($score['Test']['name'], array('controller' => 'tests', 'action' => 'view', $score['Test']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score'); ?></dt>
		<dd>
			<?php echo h($score['Score']['score']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($score['Score']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($score['Score']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Score'), array('action' => 'edit', $score['Score']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Score'), array('action' => 'delete', $score['Score']['id']), null, __('Are you sure you want to delete # %s?', $score['Score']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Scores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Score'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tests'), array('controller' => 'tests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Test'), array('controller' => 'tests', 'action' => 'add')); ?> </li>
	</ul>
</div>
