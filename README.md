# set-character-limit-on-the_content-wordpress

## How to set character limit on `the_content()` in wordpress. 

The easiest way and without the need to create a filter or function.

Using PHP's mb_strimwidth to truncate a string, defining a certain width (length).

You only need to use one of the get_ syntaxes.

For example, with the content:

```php
<?php $codix_content = get_the_content (); echo mb_strimwidth ($codix_content, 0, 400, '...'); ?>
```

This way, the string will be counted in 400 characters and then close with `[...]`.

Finally, just add a "read more" link at the end, pointing to the post or page.


## Como adicionar limite de caracteres no the_content() do wordpress.
