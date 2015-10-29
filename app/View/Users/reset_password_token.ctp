<?php

echo $this->element('header');?>
<div class="contentWrap">
    <div class='loginWrap'>
        <h3 class='txtCenter'>Login</h3>
        <?php echo $this->element('flashMessage'); ?>
<?php echo $this->Form->create('', array('action' => 'reset_password_token', 'id' => 'web-form')); ?>
    <?php echo $this->Form->hidden('User.reset_password_token'); ?>
	<?php echo $this->Form->input('User.new_passwd',  array('type' => 'password', 'label' => 'Password', 'between' => '<br />', 'type' => 'password') ); ?>
	<?php echo $this->Form->input('User.confirm_passwd',  array('type' => 'password', 'label' => 'Confirm Password', 'between' => '<br />', 'type' => 'password') ); ?>
	<?php echo $this->Form->submit('Change Password', array('class' => 'submit', 'id' => 'submit')); ?>
<?php echo $this->Form->end(); ?>
    </div>
</div>
<?php echo $this->element('footer');?>
