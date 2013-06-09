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
						$isActive = $this->navLvl1 == $thisURL || (isset($page['children']) && in_array($this->navLvl2, $page['children']))?>

						<li class="dropdown" <?php echo $isActive ? ' class="active"' : '' ?> >
							<a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo $thisURL?>.html"><?php echo $pageName?></a>
							<?php if(isset($page['children'])): ?>
							<ul class="dropdown-menu">
								<?php foreach($page['children'] as $childName => $childURL) : ?>
								<li><a<?php echo $this->navLvl2 == $childURL ? ' class="active"' : '' ?> href="<?php echo $childURL?>.html"><?php echo $childName?></a></li>
								<?php endforeach?>
							</ul>
							<?php endif;?>
						</li>

						<?php endforeach ?>
	                </ul>

	              </div><!-- /.nav-collapse -->
	          </div><!-- /navbar-inner -->
			</div>
		</div>
	</div>