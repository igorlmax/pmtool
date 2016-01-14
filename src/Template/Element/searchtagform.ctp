<?php echo $this->Form->create('Post', array('action' => 'search')); ?>
	<?php echo $this->Form->input('searchtag', array('label' => '', 'placeholder' => 'Search by tag' )); ?>
<?php echo $this->Form->end(); ?>