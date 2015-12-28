<?php

echo $this->element('header');
?>
<div class="contentWrap">
    <div class='loginWrap'>
        <table class="table">
            <tr>
                <th>News</th>
                <th>News Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php 
            $newCount=count($arrNews);
            for($i=0;$i<$newCount;$i++){ 
                ?>
            <tr>
                <td><?php echo $arrNews[$i]['News']['newsDetails']?></td>
                <td><?php echo $arrNews[$i]['News']['createdDate']?></td>
                <td><?php echo $this->Html->link('Update',array('controller'=>'News','action'=>'edit'));?></td>
                <td><?php echo $this->Html->link('Delete',array('controller'=>'News','action'=>'delete'));?></td>
            </tr>    
           <?php  }
            ?>
        </table>
    </div>
</div>
<?php
echo $this->element('footer');
?>

