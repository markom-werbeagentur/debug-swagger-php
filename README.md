# Debug #1793 in zircote/swagger-php 

Set up the project (`composer install`), configure db and so on. Call the project in your browser and open the api docs or the example controller:

`http://example.com/api/`
`http://example.com/test/`

Cache needs to be warmed up in order to reproduce the issue. Use prod mode or run this:

`bin/console cache:clear && bin/console cache:warmup`

Implementing the Get annotation in src/Controller/HelloController makes the issue appear. Works fine if you remove this annotation.

More information:
https://github.com/zircote/swagger-php/issues/1793#issuecomment-3208065747