<div class="users form">
<?php echo $this->Form->create('User', $twitterBootstrapCreateOptions); ?>
	<fieldset>
		<legend><?php echo __('Room Mate Signup'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('nickname');
	?>
	</fieldset>
<?php echo $this->Form->end($twitterBootstrapEndOptions); ?>
</div>

