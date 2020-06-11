<?php // for correct function of the code, the functions.php file can only have one code opening "<? php"

// For correct function function execution, add this code in the last line of the functions.php file
$codix_content = get_the_content (); echo mb_strimwidth($codix_content, 0, 400, '[...]');

// for correct code function, the functions.php file can only have a "? >" code closure ?>
