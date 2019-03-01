<?php
// This bug affects Safari on Mac and IE/Edge on Windows. Place this filter in your functions.php file to add fallback support

//contact form 7 fix for datepicker issue in (bug in safari and IE/Edge)
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );
