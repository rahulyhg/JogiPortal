<?php

echo $this->element('header');?>
<div class="contentWrap">
    <div class='loginWrap'>
        <?php echo $this->element('flashMessage'); ?>
        <?php echo $this->Form->create('',array('id'=>'loginForm','class'=>'loginForm'));?>
        <h3 class='txtCenter'>Login</h3>
        <div class="controlWrap">
            <?php echo $this->Form->input('',array('type'=>'text','name'=>'username','id'=>'username','placeholder'=>'Username'));?>
        </div>

        <div class="controlWrap">
            <?php echo $this->Form->input('',array('type'=>'password','name'=>'password','id'=>'password','placeholder'=>'Password'));?>
        </div>

        <div class="controlWrap">
            <label>
                <?php echo $this->Form->input('',array('type'=>'checkbox','id'=>'remember','name'=>'remember','div'=>false))?>
                Remember me
            </label>
        </div>

        <div class="controlWrap">
            <?php echo $this->Html->link('Forgot your password ?',array('controller'=>'Users','action'=>'forgot_password'));?>
            <?php echo $this->Html->link("Don't have account? Register here.",array('controller'=>'User','action'=>'register'));?>
        </div>
        <div class="controlWrap txtCenter btnWrap">
            <?php echo $this->Form->input($this->Html->tag('i', '',
                array('class' => 'fa fa-home')).'Login',
                array('type'=>'button','class'=>'btnFill','label'=>false),
                array('escape' => false)); 
            ?>
        </div>
        <?php echo $this->Form->end();?>
    </div>
</div>
<?php echo $this->element('footer');?>