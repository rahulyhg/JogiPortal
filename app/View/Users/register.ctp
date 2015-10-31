
<?php
echo $this->element('header');?>
<div class="contentWrap">
    <div class='loginWrap'>
        <?php echo $this->element('flashMessage'); ?>
        <?php echo $this->Form->create('',array('class'=>'loginForm','id'=>'userReg'))?>
        <h3 class='txtCenter'>Register</h3>

        <div class="controlWrap">
                <?php echo $this->Form->input('',array('type'=>'text','placeholder'=>'Full Name','label'=>'','name'=>'fullname'))?>
        </div>

        <div class="controlWrap">
                <?php echo $this->Form->input('',array('type'=>'select','empty'=>'Select','options'=>$arrState,'placeholder'=>'State','label'=>'','name'=>'stateId','id'=>'stateId'));?>
        </div>

        <div class="controlWrap">
                <?php echo $this->Form->input('',array('type'=>'select','empty'=>'select','label'=>'','name'=>'districtId','id'=>'districtId'));?>
        </div>

        <div class="controlWrap">
            <?php echo $this->Form->input('',array('type'=>'text','placeholder'=>'Email','name'=>'email','label'=>''));?>
        </div>

        <div class="controlWrap">
            <?php echo $this->Form->input('',array('type'=>'text','placeholder'=>'Mobile No','name'=> 'mobileNo','label'=>''));?>
        </div>

        <div class="controlWrap">
            <?php echo $this->Form->input('',array('type'=>'text','placeholder'=>'Username','name'=> 'username','label'=>'')); ?>
        </div>

        <div class="controlWrap">
             <?php echo $this->Form->input('',array('type'=>'password','placeholder'=>'Password','name'=> 'password','id'=>'password','label'=>''));?>
        </div>

        <div class="controlWrap">
             <?php echo $this->Form->input('',array( 'type'=>'password','placeholder'=>'Confirm password','name'=> 'cPassword','id'=>'cPassword','label'=>''));?>
        </div>

        <div class="controlWrap">
             <?php echo $this->Form->input('',array('type'=>'checkbox','class'=>'userAccept','name'=> 'accept','label'=>'I accept all terms and conditions.'));?>
        </div>

        <div class="controlWrap">
            <a href="#">Don't have account? Register here.</a>
        </div>
        <div class="controlWrap txtCenter btnWrap">
            <button type="submit" class="btnFill">Register</button>
        </div>
        <?php echo $this->Form->end();?>
    </div>
</div>
<?php echo $this->element('footer');?>
<script type="text/javascript">

    $(document).ready(function () {
        $("#stateId").change(function ()
        {
            $("#loadimg").show();
            stateId = $("#stateId").val();
            url = 'getUserDistrict';
            data = "stateId=" + stateId;
            bodycontent = unescape(ajaxRequest(url, data));
            if (bodycontent)
            {
                $("#loadimg").hide();
                $('#districtId').html(bodycontent);
            }
        });
    });

    function ajaxRequest(url, data)
    {
        var bodycontent;
        bodycontent = $.ajax({
            url: url,
            data: data,
            type: "POST",
            global: false,
            dataType: "html",
            async: false,
            success: function (response) {
            }
        }).responseText;
        return escape(bodycontent);
    }
</script>