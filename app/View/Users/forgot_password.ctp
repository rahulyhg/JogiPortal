<?php

echo $this->element('header');?>
<div class="contentWrap">
    <div class='loginWrap'>
        <?php echo $this->element('flashMessage'); ?>
<h3 class='txtCenter'>Forgot Password</h3>
<?php echo $this->Form->create('User', array('action'=>'forgot_password','class'=>'loginForm','id' => 'web-form')); ?>
	<?php echo $this->Form->input('username', array('label' => 'Username', 'between'=>'<br />', 'type'=>'text')); ?>
	<?php echo $this->Form->submit('Send Password Reset Instructions', array('class' => 'btnFill')); ?>
        <?php // echo $this->Form->input('Login',array('type'=>'submit','class'=>'btnFill','label'=>'')); ?>
<?php echo $this->Form->end();  ?>
    </div>
</div>
<?php echo $this->element('footer');?>