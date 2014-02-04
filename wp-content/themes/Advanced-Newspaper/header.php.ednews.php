<?php global $npdv_options, $newspaper; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<title>
		<?php if(is_home() ) { bloginfo('name'); ?> | <?php bloginfo('description'); } ?>
		<?php if(is_single() || is_page() || is_archive() || is_tag() || is_category() ) { wp_title('',true); ?> | <?php bloginfo('name'); } ?>
		<?php if(is_404()) { ?> <?php echo $newspaper["404"]; ?> | <?php bloginfo('name'); } ?>
		<?php if(is_search()) { ?><?php echo $newspaper["seresults"]; ?> <?php echo wp_specialchars($s, 1); ?> | <?php bloginfo('name'); } ?>
	</title>
	<meta name="original-source" content="<?php echo get_permalink(); ?>">
	<meta property="fb:page_id" content="82599518413" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<style type="text/css" media="screen">@import url( <?php bloginfo('stylesheet_url'); ?> );</style>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/styles/<?php echo $npdv_options["style"]; ?>.css" type="text/css" media="screen" />
	<?php if (in_category ('standout')) { include (TEMPLATEPATH . '/standout.php'); } ?>
	<script src="<?php bloginfo('template_url'); ?>/includes/effects.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/includes/carousel.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url'); ?>/includes/dropdown.js"  type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/includes/contentslider.js" type="text/javascript"></script>	
	<script src="<?php bloginfo('template_url'); ?>/includes/tabber.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
	<script>
	$(document).ready(function()
		{
		$("#readmore").hide();
		});
	</script>
	<script>
		function jon_hidetoggling()
		{
		$("#readmore").toggle();
		}
	</script>
    <link rel="shortcut icon" href="http://ednewscolorado.org/favicon.ico" />
    
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />	
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />	
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	
	<?php wp_get_archives('type=monthly&format=link'); if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>	
	<?php wp_head(); ?>

<!-- Quantcast Tag -->
<script type="text/javascript">
var _qevents = _qevents || [];

(function() {
var elem = document.createElement('script');
elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
elem.async = true;
elem.type = "text/javascript";
var scpt = document.getElementsByTagName('script')[0];
scpt.parentNode.insertBefore(elem, scpt);
})();

_qevents.push({
qacct:"p-19SP32CVhpWsQ"
});
</script>

<noscript>
<div style="display:none;">
<img src="//pixel.quantserve.com/pixel/p-19SP32CVhpWsQ.gif" border="0" height="1" width="1" alt="Quantcast"/>
</div>
</noscript>
<!-- End Quantcast tag -->
</head>

<body>
<?php if($npdv_options['enable728'] == 1) { ?>
	<div id="headerAd"><?php include (TEMPLATEPATH . '/ADmainPage728x90.php'); ?></div>
<?php } ?>

<div id="wrapper">
	<div id="header1">

	<div id="search"><?php include (TEMPLATEPATH . '/searchform.php'); ?></div>

<div class=top-banner style="padding:3px 14px 0 0;">
	<a href="itpc://feeds.feedburner.com/ednewscoloradopodcasts" rel="alternate" type="application/rss+xml"><img src="http://www.ednewscolorado.org/podcast16x16.png" alt="" style="vertical-align:middle;border:0;position:relative;top:-2px;"/></a>&nbsp;<a href="itpc://feeds.feedburner.com/ednewscolorado" rel="alternate" type="application/rss+xml">Subscribe to podcast</a>
</div>

<div class=top-banner style="padding:3px 14px 0 0;">
	<a href="http://feeds.feedburner.com/ednewscolorado" rel="alternate" type="application/rss+xml"><img src="http://www.feedburner.com/fb/images/pub/feed-icon16x16.png" alt="" style="vertical-align:middle;border:0;position:relative;top:-2px;"/></a>&nbsp;<a href="http://feeds.feedburner.com/ednewscolorado" rel="alternate" type="application/rss+xml">Subscribe in a reader</a>
</div>

<div class=top-banner style="width:76px;overflow-x:hidden;">
	<g:plusone size="medium" href="http://www.ednewscolorado.org"></g:plusone>
</div>

<div class=top-banner>
	<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="https://facebook.com/ednewscolorado" send="false" layout="button_count" width="100" show_faces="false" font="verdana"></fb:like>
</div>

<div id="date"><script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/date.js"></script></div>
        
<?php /*?> 		
<div id="subscribe">&nbsp;&nbsp;&nbsp;<a href="<?php bloginfo('rss_url'); ?>" rel="nofollow" title="<?php echo $newspaper["titleFeed"]; ?>"><?php echo $newspaper["rssFeed"]; ?></a> | <a href="<?php bloginfo('comments_rss2_url'); ?>" rel="nofollow" title="<?php echo $newspaper["titleCFed"]; ?>"><?php echo $newspaper["rssCom"]; ?></a><?php if($npdv_options['enableMailSubscribe'] == 1) { ?> | <a href="<?php echo $npdv_options["emailSubscribeLink"]; ?>" rel="nofollow" title="<?php echo $newspaper["titleMFed"]; ?>"><?php echo $newspaper["rssEmail"]; ?></a><?php } ?></div>
<?php */?> 	
		<div class="clear"></div>

	</div><!-- end of topBar -->
	
	<div id="header2">
   	  <div id="network-nav">
   	  	
  	  <div id="survey-btn"><a href="<?php print $npdv_options["feaButtonLink"];?>"><img src="<?php print $npdv_options["feaButtonImg"];?>"/></a></div>
        <img src="<?php bloginfo('template_url'); ?>/images/header-nav-1.jpg" alt="The PEBC Network" width="251" height="40" /><br />
        <a href="http://www.pebc.org"><img src="<?php bloginfo('template_url'); ?>/images/header-nav-2.jpg" alt="Click to PEBC.org" width="251" height="25" border="0" /></a><br />
        <a href="http://ednewscolorado.org"><img src="<?php bloginfo('template_url'); ?>/images/header-nav-3.jpg" alt="Click to EdNewsColorado.org" width="251" height="19" border="0" /></a><br />
        <a href="http://www.boettcherteachers.org"><img src="<?php bloginfo('template_url'); ?>/images/header-nav-4.jpg" alt="Click to BoettcherTeachers.org" width="251" height="18" border="0" /></a><br />
        <a href="http://ednewsparent.org/"><img src="<?php bloginfo('template_url'); ?>/images/header-nav-5.jpg" alt="Click to EdNewsParent.org" width="251" height="17" border="0" /></a> 
      </div><!-- /#network-nav -->   
           
		<?php 
			if($npdv_options['switchheader'] == 1) { include (TEMPLATEPATH . '/headerWithQ.php'); } 
			if($npdv_options['switchheader'] == 0) { include (TEMPLATEPATH . '/headerWithAd.php'); } 
		?>
	</div><!-- enf od header -->
	<div class="clear"></div>		
	
	<div id="navbar">
	<ul id="navcatlist">

<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</div>
	
<div id=secondmenu> 
<?php wp_nav_menu( array('menu' => 'second menu' )); ?>
</div>
<div class="clear"></div>
