# set-character-limit-on-the_content-wordpress

## How to set character limit on `the_content()` in wordpress. 

The easiest way and without the need to create a filter or function.

Using PHP's `mb_strimwidth` to truncate a string, defining a certain width (length).

You only need to use one of the `get_` syntaxes.

For example, with the content:

```php
<?php $codix_content = get_the_content (); echo mb_strimwidth($codix_content, 0, 400, '[...]'); ?>
```

This way, the string will be counted in 400 characters and then close with `[...]`.

Finally, just add a "read more" link at the end, pointing to the post or page.


## Como adicionar limite de caracteres no the_content() do wordpress.

A forma mais fácil e sem a necessidade de criar um filtro ou função.

Usando o `mb_strimwidth` do PHP para truncar uma string, definindo uma certa largura (comprimento). 

Você só precisará  usar uma das sintaxes `get_`. 

Por exemplo, com o conteúdo:

```php
<?php $codix_content = get_the_content(); echo mb_strimwidth($codix_content, 0, 400, '[...]'); ?>
```

Dessa forma, será contado a string em 400 caracteres e depois fechará com `[...]`.

Por fim, basta adicionar um link "leia mais" no final, apontando para o post ou pagina.
