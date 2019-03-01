<?php
// place the following code in your functions.php file to fix the problem of pagination nav functions not respecting when no slashes are set on permalinks
// Reference: https://codex.wordpress.org/Function_Reference/get_previous_posts_link#Removing_Trailing_Slashes_from_Prev_.26_Next_links

//remove trailing slashes on previous/next links
add_filter( 'get_pagenum_link', 'user_trailingslashit' );
