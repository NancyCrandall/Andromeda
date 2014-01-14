/******************************************************************
	NAT- Front-End Development

_______________________________________________________________
	Author: Nancy Crandall
_______________________________________________________________
******************************
	
PHP and HTML
	
******************************
	
The php index file uses relative calls to the include folder for the header,footer, and sidebar.
The HTML file is the whole enchilada, not being broken up into php files.

******************************
	
Width and cross browser
	
******************************
	
I tested and built first in IE7 then tested in IE 8-10, Chrome, Firefox, Safari, and Opera. 
	
For browser inconsistencies with line heights, margins and font sizes,and more, I set up a reset sytles in the style sheet to ensure the padding in the browser is consistent .
	
After consulting with Dan Piscitiello and referring to the psd, I made the layout and containers witin a target screen size of  1240px
For positioning the  background image I  used just css and made the backgound city image an inline <img> element, which will be able to resize in any browser. I set a min-height which keeps it filling the browser window vertically, 
and set a 100% width which keeps it filling horizontally. 
I used the viewport meta tag to control layout on mobile browsers.



	
******************************
	
CSS3 Animations and Hover 
	
******************************
	
Implemented some simple css3 effects on hover, as seen on the search bar, to increase users interaction and make more areas clickable.
But kept in mind the restraints of IE7, and made sure to have the cross browser compatibility for opacity and transisitions.

******************************
	
fixed width @ 960px
	
******************************
	
I was uncertain of the scope and UX effect for some of the  responsive behavior, and IE7 being a target browser so I just set the min-width to the main container
, navigation, header and footer, this is also to help with consistency in whatever size browser the page is being opened at
	
***************

jquery plugin Flexslider
	
********************
	
Reasons for using Flexslider for the image carousel, it's easy to integrate in popular CMS like Drupal and WordPress, and it's built to be responsive.
******************************************************************/
