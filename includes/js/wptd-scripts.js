/*
* @package Wp_Theme_Downloader
* @author  Bhupender Singh
* @version 1.0.0
*/

/*
   Copyright (c) 2013-2018 by BhupenderSingh

   This program is free software; you can redistribute it and/or
   modify it under the terms of the GNU General Public License
   as published by the Free Software Foundation; either version 2
   of the License, or (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.
*/
jQuery(document).ready( function($){

	$('.themes .theme .theme-actions').each( function( index, element ){

		var theme_folder  = $(this).parents('.theme').attr('aria-describedby').split(' ')[0].slice( 0, -7 );
		var download_link = '<a href="?wptd_download='+theme_folder+'" class="button button-primary wptd_download_link">'+wptd.download_title+'</a>';

		$(this).prepend(download_link)
	});

    var theme_folder  = $('.theme').attr('aria-describedby').split(' ')[0].slice( 0, -7 );
    var download_link = '<a href="?wptd_download='+theme_folder+'" class="button button-primary wptd_download_link">'+wptd.download_title+'</a>';

    $('.active-theme').prepend(download_link)
    
});
