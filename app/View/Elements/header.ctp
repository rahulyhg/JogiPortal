<?php ?>
<!-- header start -->
<header>
    <div class="headerTop">
        <div class="container">
            <a href="index.html" class="logo"></a>
            <div class="langWrap pull-right">
                <a href="#">Hindi</a>
                <a href="#">English</a>
            </div>
                                <?php 
                                    $userId=$this->Session->read('userId');
                                    $userFullName=$this->Session->read('userFullName');
                                        if($userId!=''){?>
            <div class="langWrap pull-right">
					<?php 
                                            echo "Hello $userFullName";
//                                            echo $this->Html->link('Logout',array('controller'=>'Users','action'=>'logout')); 
                                         ?>
            </div>
                                <?php }?>

        </div>
    </div>

    <nav>
        <div class="container">
            <div class="menuContainer clearfix">
                <ul class='mainNav pull-left menu'>

						<?php 
                                                    if($activeMenu=="home"){
                                                       $setClass="active";
                                                    }else{
                                                        $setClass="";
                                                    } ?>
                    <li class="<?php echo $setClass; ?>">
                        <?php
							echo $this->Html->link(
								$this->Html->tag('i', '', array('class' => 'fa fa-home'))."Home",
								array('controller'=>'Index','action'=>'home'),
								array('escape' => false));
                                                        
						?>
                    </li>
                    <?php 
                                                    if($activeMenu=="about"){
                                                       $setClass="active";
                                                    }else{
                                                        $setClass="";
                                                    } ?>
                    <li class="hasSMenu <?php echo $setClass ?>">
                        <a href="#"><i class="fa fa-exclamation"></i>About</a>
                        <ul class="subNav">
                            <li>
								<?php 
									echo $this->Html->link('History of Jogi samaj',
										array('controller'=>'About','action'=>'samaj_history'),
										array('escape' => false));
								?>
                            </li>
                            <li><?php 
									echo $this->Html->link('Navnath History',
										array('controller'=>'About','action'=>'navnath_history'),
										array('escape' => false));
								?></li>
                            <li><?php 
									echo $this->Html->link('Navnath Temples',
										array('controller'=>'About','action'=>'navnath_temples'),
										array('escape' => false));
								?></li>

                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-file-photo-o"></i>Gallery</a></li>
                    <li><a href="news.html"><i class="fa fa-newspaper-o"></i>News</a></li>
                    <li><a href="searchUser.html"><i class="fa fa-search"></i>Directory</a></li>
                </ul>
                <ul class='loginMenu pull-right'>
                     <?php 
                                                    if($activeMenu=="profile"){
                                                       $setClass="active";
                                                    }else{
                                                        $setClass="";
                                                    } ?>
                    <?php 
                    if(!empty($userId)){ ?>
                    <li class="hasSMenu <?php echo $setClass; ?>"><a href="#">Profile</a>
                        <ul class="subNav">
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Settings</a></li>
                            <li>
                                <?php echo $this->Html->link('Manage News',array('controller'=>'News','action'=>'view'));?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('Logout',array('controller'=>'Users','action'=>'logout'));?>
                            </li>
                        </ul>
                    </li>     
                    <?php }else{
                         if($activeMenu=="login"){
                                                       $setClass="active";
                                                    }else{
                                                        $setClass="";
                                                    } ?>
                    <li class="<?php echo $setClass ?>">
						<?php 
						echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-in')).'Login',
							array('controller'=>'Users','action'=>'login'),
							array('escape' => false));
						?>
                    </li>
                    <?php 
                                                    if($activeMenu=="register"){
                                                       $setClass="active";
                                                    }else{
                                                        $setClass="";
                                                    } ?>
                    <li class="<?php echo $setClass ?>">
						<?php 
							echo $this->Html->link($this->Html->tag('i','',array('class' => 'fa fa-user-plus')).'Register',
								array('controller'=>'Users','action'=>'register'),
								array('escape' => false));
						?>
                    </li>
                    <?php } ?>
                </ul>             
            </div>
        </div>
    </nav>
</div>

</header>
<!-- end of header -->
