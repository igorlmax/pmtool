<div
	class="index large-4 medium-4 large-offest-4 medium-offset-4 columns content">
	<div class="pane">
		<h3 class="text-center">PM Tool Sign Up</h3>
		<?= $this->Form->create($user); ?>
		<?php
			echo $this->Form->input ( 'first_name' );
			echo $this->Form->input ( 'last_name' );
			echo $this->Form->input ( 'bio' );
			echo $this->Form->input ( 'email' );
			echo $this->Form->input ( 'password' );
		?>
			<?php echo $this->Form->submit('Regiser', array('class' => 'button')); ?>
		<?= $this->Form->end(); ?>
	</div>
</div>