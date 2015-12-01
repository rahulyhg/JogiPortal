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
                                            echo $this->Html->link('Logout',array('controller'=>'Users','action'=>'logout')); 
                                         ?>
				</div>
                                <?php }?>
                                
			</div>
		</div>
			
		<nav>
			<div class="container">
				<div class="menuContainer clearfix">
				<ul class='mainNav pull-left'>
					<li>
						<?php 
							echo $this->Html->link(
								$this->Html->tag('i', '', array('class' => 'fa fa-home'))."Home",
								array('controller'=>'Index','action'=>'home'),
								array('escape' => false));
						?>
					</li>
					<li class="hasSMenu"><a href="#"><i class="fa fa-exclamation"></i>About</a>
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
					<li>
						<?php 
						echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-in')).'Login',
							array('controller'=>'Users','action'=>'login'),
							array('escape' => false));
						?>
					</li>
					<li>
						<?php 
							echo $this->Html->link($this->Html->tag('i','',array('class' => 'fa fa-user-plus')).'Register',
								array('controller'=>'Users','action'=>'register'),
								array('escape' => false));
						?>
					</li>
					<!-- <li class="hasSMenu"><a href="#">Profile</a>
						<ul class="subNav">
							<li><a href="#">Account</a></li>
							<li><a href="#">Settings</a></li>
							<li><a href="#">Log out</a></li>
						</ul>
					</li> -->
					
				</ul>
				<!-- <ul class='userNav pull-right'>
					<li><a href="#">Login</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#"></a></li>
				</ul> -->
				</div>
			</div>
		</nav>
		</div>
		
	</header>
	<!-- end of header -->