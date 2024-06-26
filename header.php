<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    
<?php wp_head(); ?>

</head>

<body <?php echo body_class(); ?>>
    <div class="page-container">

<style type="text/css">
.form01 form .wpfs-w-20 {
    max-width: 100% !important;
    display: block !important;
}
#mc_embed_signup .mc-field-group input#mce-EMAIL {	
    color: #303030;
}
.wpfs-form-group .wpfs-form-control:not(.wpfs-form-control--error).wpfs-form-control--focus, 
.wpfs-form-group .wpfs-form-control:not(.wpfs-form-control--error):focus {
    border-color: var(--secondary-color);
    box-shadow: 0px 0px 0px 1px var(--black) !important;
}	
.mce_inline_error {
    font-family: proxy-nova;
}
button#submit--OGNhNmM {
    font-size: 0 !important;
    padding-bottom: 6px !important;
}
button#submit--OGNhNmM:before {
    content: "Donate now";
    font-size: 22px;
}
.com_heading h3 b { 
    font-weight: 600;
  }
.ab_part_img_inner > div:nth-child(2n+1) {
    width: 29%;
}

#other_amount,#other_amount_temp {
    float: right !important;
    width: 101px;
    position: absolute;
    right: 6%;
    bottom: 20px;
    border: 1px solid;
    height: 29px;
    padding-left: 10px;
}

.form01 { 
    position: relative;
}

.cus_post_outer .container,
.bredcrum01 .container { 
    max-width: 900px;
}

@media (max-width: 767px){
    .ab_part_img_inner > div:nth-child(2n+1) {
        width: 34%;
    }
    .ab_part_img_inner div {
        padding: 7px 6px;
    }
}

.f_logo img { 
    width: 200px;
}

@media (max-width: 1023px) {
    .td-site-mobile-header {
        display: block !important;
    }
}

@media print {
    .hed-wrap,
    .td-site-mobile-header,
    .more_from_issue,
    .footer_style_new,
    .footerFullMenu {
        display: none;
    }

    .td-site-mobile-header,
    .container.no-print {
        display: none !important;
        height: 1px !important;
    }

    .no-print .td-mobile-logo,
    .no-print .td-mobile-menus {
        display: none !important;
    }

    section.mission_outer {
        margin-bottom: 6rem;
    }

    .mission_outer > .container-fluid {
        padding-bottom: 10rem;
    }
}

@media (max-width: 823px) {
    #other_amount, #other_amount_temp {
        position: static !important;
        float: left !important;
        width: 115px !important;
        margin-left: 35px !important;
     }
}
</style>

<div class="site_container">
    <div class="content-wrap">
 <section class="hed-wrap">
    <div class="Container" id="tf-hide-mob" style="display: none;">

    <?php
      $pageID = get_the_id();
      
    ?>		
       <div class="menu_outer d-flex">

<?php
      $pageID = get_the_id();
      if ($pageID != 6 && $pageID != 8) {?>
        <div class="menu_box_one">
            <div class="drift_searchForm"><?php echo get_search_form();?></div>
            <?php
              wp_nav_menu(array("menu" => "Top Left", "menu_class" => "menu-top-left", "menu_class" => "nav d-flex" ))
            ?>
        </div>
<?php } ?>

        <div class="menu_box_two">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
            </a>         
            <?php
              $pageID = get_the_id();
              if ($pageID != 6 && $pageID != 8) {?>

            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar9">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
            </div>              	

                  <?php
              }
            ?> 	       
            </div>
      </div>
<?php  ?>
      <div class="only_mobile_show">
          <ul id="menu-top-left" class="nav d-flex">
            <li><a href="<?php echo home_url(); ?>/about/">about</a></li>
            <li><a href="<?php echo home_url(); ?>/issues/">issues</a></li>
            <li><a href="<?php echo home_url(); ?>/donate/">donate</a></li>
              <li><a href="<?php echo home_url(); ?>/subscribe/">subscribe</a></li>
              <li class="mob-search"><a><i class="fa fa-search"></i></a></li>
              <div class="drift_searchForm"><?php echo get_search_form();?></div>
        </ul>
    </div>
    </div>

    <div class="desktop_new_menu">
        <div class="desktop-logo">
            <a href="<?php echo home_url(); ?>">
                <img
                src="<?php echo get_theme_file_uri() . '/assets/images/drift_logo_large_2x.png'; ?>"
                type="image/png"
                alt="The Drift Magazine"
                width="272"
                height="130">
            </a> 
        </div>
      <?php
        wp_nav_menu(array("menu" => "Navigation Menu", "menu_id" => "navigation_menu", ""));
      ?>
      <div class="drift_searchForm"><?php echo get_search_form();?></div>	
    </div>
</section>
<header class="td-site-mobile-header-blocking-box hidden">
</header>
<header class="td-site-mobile-header" style="display: none;">
        <div class="container no-print">
            <div class="td-mobile-logo">
                <a href="<?php echo home_url(); ?>">
                    <img
                    src="<?php echo get_theme_file_uri() . '/assets/images/drift_logo_mobile_2x.png'; ?>"
                    type="image/png"
                    alt="The Drift Magazine"
                    width="209"
                    height="100">
                </a> 
            </div>
            <div class="td-mobile-menus">
                <div class="seach-mobile-view">
                    <a href="javascript:void(0);"><i class="fa fa-search"></i></a>
                </div>
                <span onclick="openMobileNav()" class="openMobMenuIcon">&#9776;</span>
            </div>
            <div class="drift_searchForm" style="display: none;"><?php echo get_search_form();?></div>
            <div id="myMobileNav" class="td-overlay-box">
              <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeMobileNav()">&times;</a> -->
              <div class="td-overlay-content">
                <?php
                    wp_nav_menu(array(
                        'menu' => 'Mobile Menu',
                    ));
                ?>

              </div>
            </div>
        </div>
</header>