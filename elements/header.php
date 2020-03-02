<!DOCTYPE html>

<html>

	<head>

	    <?php
	    	$this->inc('app/page_settings.php');
	    	$po = new PageOptions();
	    ?>
			<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/_css/style.css">


			<?php Loader::element('header_required'); ?> <!-- must be last in load order -->

	</head>

	<body class="<?php if ($po->isHome()) { echo "home_wrapper"; } else {echo "internal_wrapper"; }  ?>">
		<body class="vibrant">
  <div class="<?php echo $c->getPageWrapperClass()?>">
  <header>
    <div class="topbar">
      <div class="contact-info">
        <div>Contact us for more information</div>
        <div> Stephanie Elberth or Scott Whitehead</div>
        <div>
            <div><i class="fas fa-phone"></i> 845-468-5280</div>
            <div><i class="fas fa-envelope"></i><a href="mailto:services@newhopecommunity.org">services@newhopecommunity.org</a></div>
        </div>
      </div>
      <div>
        <div class="social">
          <a href="/"><i class="fa fa-facebook"></i></a>
          <a href="/"><i class="fa fa-twitter"></i></a>
          <a href="/"><i class="fa fa-youtube"></i></a>
          <a href="/"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <div class="navigation">
      <!-- <div class="toggle-wrapper">
        <div class="menu-toggle inactive">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          <span class="bg"></span>
        </div>
        <p>MENU</p>
     </div>  -->
     <div class="links">
       <div><a href="/location">Location</a></div>
       <div><a href="/family-rentals">Family Rentals</a></div>
     </div>
     <div class="logo">
      <a href="/">
        <img src="<?php echo $this->getThemePath(); ?>/images/Compass-Pointe-Logo.svg" alt="Compass Pointe Logo" />
      </a>
      <div class="oval">
      </div>
     </div>
     <div class="join">
       <a href="/join">Join Our Community <i class="fa fa-angle-right"></i></a>
     </div>

     <!-- end of header internal div -->
    </div>
  </header>

		<!-- PLEASE REMOVE THIS SECTION BEFORE LAUNCH -- Just placeholder for some useful C5 elements
		--------------
		<?php
			$a = new Area("Some Name");
			$a->display();
	    ?>
	    -----------
	    
	    -----------
		<?php
			$a = new GlobalArea("Some Name");
			$a->display();
	    ?>
	    -----------

		--------NOTE THAT YOU MUST USE echo $this->getThemePath(); ?> FOR ALL ELEMENTS IN THEME IMAGES/JS/CSS etc. ------
	    <img class="logo" alt="Center for Disability Services Logo" src="<?php echo $this->getThemePath(); ?>/images/cfds-logo-full-color-rgb.jpg"> 
	    -------------

		--------FOR IF YOU ARE USING c5 BUILT IN SLIDESHOW FOR HOMEPAGE SLIDE-----------
	    <?php
		  $a = new Area("Some name");
		  $blocks = $a->getTotalBlocksInArea($c);

		  if ($blocks == 0 && !$c->isEditMode()) { echo "<img src=".$this->getThemePath().".defaultImage.jpg>"; } // Default Header
		  else { $a->display($c); } // Custom header
		?>
		-->