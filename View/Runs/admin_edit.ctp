<div class="runs form">
<?php echo $this->Form->create('Run'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Run'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('round_id');
		echo $this->Form->input('team_pair_id');
		echo $this->Form->input('points_total');
		echo $this->Form->input('points_bonus');
		echo $this->Form->input('points_scored');
		echo $this->Form->input('points_faults');
		echo $this->Form->input('throws_total');
		echo $this->Form->input('throws_scored');
		echo $this->Form->input('throws_bonus');
		echo $this->Form->input('throws_missed');
		echo $this->Form->input('throws_dropped');
		echo $this->Form->input('throws_faults');
		echo $this->Form->input('time');
		echo $this->Form->input('is_official');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Run.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Run.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Runs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rounds'), array('controller' => 'rounds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Round'), array('controller' => 'rounds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Team Pairs'), array('controller' => 'team_pairs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team Pair'), array('controller' => 'team_pairs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actions'), array('controller' => 'actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Action'), array('controller' => 'actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
