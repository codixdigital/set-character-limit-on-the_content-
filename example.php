<?php // This code does not need to be called via the functions.php file

// getting post content
$codix_content = get_the_content ();

// printing content with a character limit
echo mb_strimwidth($codix_content, 0, 400, '[...]');
?>
