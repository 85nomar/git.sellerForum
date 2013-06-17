<div class="navbar-wrapper">
	<div class="container-fluid">
		<div class="navbar bavbar-inverse">
			<div class="navbar-inner">
	            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	            </button>
	            <a href="#" class="brand" contenteditable="true">API Information</a>
	            <div class="nav-collapse collapse">
		            <ul class="nav">

						<?php 
						$thisNav = $this->mainNav;
						
						foreach($thisNav as $pageName => $page) : 

						$thisURL = $page['url']; 
						$isActive = $this->navLvl1 == $thisURL || (isset($page['children']) && in_array($this->navLvl2, $page['children'])); 
						
						$children = (isset($page['children'])); 
						?>

						<li class="dropdown">
							
							<?php  

							if($children == 1) {
								$dropChildren = "data-toggle='dropdown' class='dropdown-toggle'";
							}else {
								$dropChildren = '';
							}
							?>
							<a <?php echo $isActive ? ' class="active"' : '' ?> href="<?php echo $thisURL?>.php"  <?php echo $dropChildren; ?>  > <?php echo $pageName?></a>
							<?php if(isset($page['children'])): ?>
								<ul class="dropdown-menu">
									<?php foreach($page['children'] as $childName => $childURL) : ?>
									<li><a<?php echo $this->navLvl2 == $childURL ? ' class="active"' : '' ?> href="<?php echo $childURL?>.php"><?php echo $childName?></a></li>
									<?php endforeach?>
								</ul>
							<?php endif;?>
						</li>
						<?php endforeach?>
					</ul>

            	</div><!-- /.nav-collapse -->
			</div><!-- /navbar-inner -->
		</div>
	</div>
</div>



<nav id="headerNav">
    <div class="navbar container">
        <div class="row-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="logo" contenteditable="true"><img src="../../img/logo.png"><span>API
                    Information</span></a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="dropdown">
                        <a class="active" href="index.php"> Home</a>
                    </li>
                    <li class="dropdown">
                        <a href=".php" data-toggle="dropdown" class="dropdown-toggle"> Documentation</a>
                        <ul class="dropdown-menu">
                            <li><a href="api-services.php">ricardo API Services</a></li>
                            <li><a href="api-technical.php">Technical Documentation</a></li>
                            <li><a href="api-security.php">Security Documentation</a></li>
                            <li><a href="api-howto.php">How to</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="forum/index.php"> Forum</a>
                    </li>
                    <li class="dropdown">
                        <a href="news.php"> News</a>
                    </li>
                    <li class="dropdown">
                        <a href="register.php"> Register</a>
                    </li>
                </ul>
            </div><!-- /.nav-collapse -->
        </div><!-- /navbar-inner -->
    </div>
</nav>