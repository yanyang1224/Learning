<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>发布文章页面</title>
<link rel="stylesheet" href="<?php echo SITE_URL;?>css/style.default.css" type="text/css" />
<script type="text/javascript" src="<?php echo SITE_URL;?>js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/plugins/jquery.alerts.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/plugins/tinymce/jquery.tinymce.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>js/custom/general.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){

	///// TINYMCE EDITOR /////
	jQuery('textarea.tinymce').tinymce({
	// Location of TinyMCE script
	script_url : '<?php echo SITE_URL;?>js/plugins/tinymce/tiny_mce.js',

	// General options
	theme : "advanced",
	skin : "themepixels",
	plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",
	inlinepopups_skin: "themepixels",
	// Theme options
	theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,outdent,indent,blockquote,formatselect,fontselect,fontsizeselect",
	theme_advanced_buttons2 : "pastetext,pasteword,|,bullist,numlist,|,undo,redo,|,link,unlink,image,help,code,|,preview,|,forecolor,backcolor,removeformat,|,charmap,media,|,fullscreen",
	theme_advanced_buttons3 : "",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom",
	theme_advanced_resizing : true,

	// Example content CSS (should be your site CSS)
	content_css : "<?php echo SITE_URL;?>css/plugins/tinymce.css",

	// Drop lists for link/image/media/template dialogs
	template_external_list_url : "lists/template_list.js",
	external_link_list_url : "lists/link_list.js",
	external_image_list_url : "lists/image_list.js",
	media_external_list_url : "lists/media_list.js",

	// Replace values for the template plugin
	template_replace_values : {
		username : "Some User",
		staffid : "991234"
	}
	});
		
		
	jQuery('.editornav a').click(function(){
		jQuery('.editornav li.current').removeClass('current');
		jQuery(this).parent().addClass('current');
		if(jQuery(this).hasClass('visual'))
			jQuery('#elm1').tinymce().show();
		else
			jQuery('#elm1').tinymce().hide();
		return false;
	});
});
</script>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="<?php echo SITE_URL;?>css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="<?php echo SITE_URL;?>css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="<?php echo SITE_URL;?>js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="withvernav">
<div class="bodywrapper">
    
    <div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">创建新的项目类</h1>
            <span class="pagedesc">This is a sample description of a page</span>
            
        </div><!--pageheader-->
        
        <div class="contentwrapper">
        	<div class="two_third">
                 <form action="__SELF__" method="post">
                    <input type="text" name="cname" class="fullwidth" placeholder="Enter cate here" />
                    <br /><br />
                    <input type="submit" name="save" value="Submit" />
                    <input type="reset" name="reset" value="Reset" />
                 </form>
             </div><!--two_third-->
        </div><!--contentwrapper-->
    
    </div><!--centercontent-->
    
    
</div><!--bodywrapper-->

</body>
</html>