<div class="index large-4 medium-4 large-offest-4 medium-offset-4 columns content">
	<div class="pane">
		<h3 class="text-center">PM Tool Login</h3>
		
		<?php echo $this->Form->create(); ?>
			<?php echo $this->Form->input('email'); ?>
			<?php echo $this->Form->input('password', array('type' => 'password')); ?>
			<?php echo $this->Form->submit('Login', array('class' => 'button')); ?>
		<?php echo $this->Form->end(); ?>
	</div>
</div>