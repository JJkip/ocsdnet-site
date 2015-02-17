/* buddypress - v2.1.0 - 2014-10-06 9:39:07 PM UTC - https://wordpress.org/plugins/buddypress/ */
jQuery(document).ready(function(){jQuery("a.confirm").click(function(){return confirm(BP_Confirm.are_you_sure)?!0:!1})});;function nextgen_lightbox_filter_selector($,selector)
{if(nextgen_lightbox_settings&&nextgen_lightbox_settings.context){var context=nextgen_lightbox_settings.context;if(context=='all_images'){selector=selector.add($('a > img').parent());}
else if(context=='all_images_direct'){selector=selector.add($('a[href] > img').parent().filter(function(){var href=$(this).attr('href').toLowerCase();var ext=href.substring(href.length-3);var ext2=href.substring(href.length-4);return(ext=='jpg'||ext=='gif'||ext=='png'||ext2=='tiff'||ext2=='jpeg');}));}
else if(context=='nextgen_and_wp_images'){selector=selector.add($('a > img[class*="wp-image-"]').parent());}
selector=selector.not('.gallery_link');}
return selector;}