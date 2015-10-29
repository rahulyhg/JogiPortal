<?php

if ($this->Session->check('Message.flash')) {
    $Flashflag=$this->Session->read('flashFlag');
    if($Flashflag=='Success'){
    ?>
<div class="alert alert-success" role="alert" id="messageBox" >
    <?php echo $this->Session->flash();  ?>
</div>
<?php }else{ ?>
<div class="alert alert-danger" role="alert" id="messageBox">
    <?php echo $this->Session->flash();  ?>
</div>
<?php 
}
}?>

