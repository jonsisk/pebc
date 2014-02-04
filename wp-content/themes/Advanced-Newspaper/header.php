<?php global $npdv_options, $currentcat, $themeinfo; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php if(is_home() ) { bloginfo('name'); ?> | <?php bloginfo('description'); } ?><?php if(is_single() || is_page() || is_archive() || is_tag() || is_category() ) { wp_title('',true); ?> | <?php bloginfo('name'); } ?><?php if(is_404()) { ?> <?php _e('404 Error! Page Not Found','WpAdvNewspaper'); ?> | <?php bloginfo('name'); } ?><?php if(is_search()) { ?><?php _e('Search results for:','WpAdvNewspaper'); ?> <?php echo wp_specialchars($s, 1); ?> | <?php bloginfo('name'); } ?></title>
	<?php /* add favicon */ if ( $npdv_options["gab_favico"] <> "" ) { ?>
			<link rel="shortcut icon" href="<?php echo $npdv_options["gab_favico"]; ?>" />
	<?php } ?>
	<style type="text/css" media="screen">@import url( <?php bloginfo('stylesheet_url'); ?> );</style>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/<?php echo $npdv_options["style"]; ?>.css" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( $npdv_options["feedlink"] <> "" ) { echo $npdv_options["feedlink"]; } else { echo bloginfo('rss2_url'); } ?>" />	
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php if ( $npdv_options["feedlink"] <> "" ) { echo $npdv_options["feedlink"]; } else { echo bloginfo('rss_url'); } ?>" />	
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	
	<?php wp_get_archives('type=monthly&format=link'); if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<?php if($npdv_options['enCufon'] == 1) { ?>
	<script type="text/javascript">
		Cufon.replace('#leaveComment');
		Cufon.replace('.widgetbgTitle');
		Cufon.replace('.narrowSidebarTitle');
	</script>
	<?php } ?>
	<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>

<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/22210871/pebc_ee_sidebar', [300, 250], 'div-gpt-ad-1347995100926-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
</head>
<body>
<style>
#toplinks li {
	float:right;
	padding: 3px;
	}
#toplinks {
	float:right;
	font:normal 17px helvetica, sans-serif;
	margin-right: 5px;
	}
#tinymail {
	background:url(<?php bloginfo('template_url'); ?>/images/tiny-mail.png);
	display:block;
	width: 20px;
	height: 20px;
	}
#tinyfacebook {
	background:url(<?php bloginfo('template_url'); ?>/images/tiny-facebook.png);
	display:block;
	width: 20px;
	height: 20px;
	}
#tinymail:hover {
	background:url(<?php bloginfo('template_url'); ?>/images/tiny-mail-lit.png);
	}
#tinyfacebook:hover {
	background:url(<?php bloginfo('template_url'); ?>/images/tiny-facebook-lit.png);
	}
</style>
<?php /* Define id number of current category for category based advertisement */
	if(is_category() || is_single()) {
		$category = get_the_category();
		$currentcat = $category[0]->cat_ID;
	}
?>

<?php if($npdv_options['enable728'] == 1) { ?>
	<div id="topad">
		<?php
			if(file_exists(TEMPLATEPATH . '/ads/sitewide_728x90/'.$currentcat.'.php') && (is_single() || is_category())) {
				include_once(TEMPLATEPATH . '/ads/sitewide_728x90/'.$currentcat.'.php');
			}
			else {
				include_once(TEMPLATEPATH . '/ads/sitewide_728x90.php');
			}
		?>
	</div>
<?php } ?>
<div id="wrapper">
<div id="header">
	<div id="flag">

<?php /*
		<div id="headercart">
			<span id="headercartcount"><?php echo wpsc_cart_item_count(); ?></span> Items &nbsp &nbsp &nbsp <a href='<?php echo get_option('shopping_cart_url'); ?>'>View Cart/Checkout </a>
		</div>
*/ ?>
		<div id="logo">
			<a href="http://www.pebc.org"><img src="<?php bloginfo('template_url'); ?>/images/pebc-30-years.png"></a>
		</div>
		<ul id="toplinks">
			<li><a href="http://www.facebook.com/pebcorg" id="tinyfacebook"></a></li>
			<li><a href="mailto:info@pebc.org" id="tinymail"></a></li>
			<li> | </li>
			<li><a href="/about/contact-us/">Contact</a></li>
			<li> | </li>
			<li><a href="/about/employment/">Join Our Staff</a></li>
		</ul>
<?php /*				
		<div id="donatenow">
			<a href="/about/support-pebc/"><img src="<?php bloginfo('template_url'); ?>/images/donate.png"></a>
		</div>
		<div id="donatenow" style="margin: 15px 30px 5px 0; height:65px;">
			<a href="http://www.pebc.org/slider/centurylink-teachers-technology-program/"><img src="<?php bloginfo('template_url'); ?>/images/1314clgrant-homepage-button.png"></a>
		</div>
*/?>
		<div id="pebc_network" style="margin-top:80px;" >
			The PEBC Network: <a href="http://www.pebc.org">PEBC.org</a> | <a href="http://www.boettcherteachers.org">BoettcherTeachers.org</a>
		</div>

	</div>
	<div id="navmenu">
			<?php wp_nav_menu(array('menu'=>'Main Menu')); ?>
	</div>
</div>
<div id="contentwrapper">
<div class="clear"></div>