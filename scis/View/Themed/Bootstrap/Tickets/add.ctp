<div class="posts form">
<?php echo $this->Form->create('Ticket' , array( 'type' => 'Ticket' ));?>
	<fieldset>
 		<legend><?php __('Add Ticket');?></legend>
	<?php
		echo $this->Form->input('subject');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end('Submit');?>
</div>