# Bug with class_exists, PHP < 8.0, & Property Promotion

## Summary

Calling `class_exists()` on a class that uses constructor property promotion in 
PHP 7.4 triggers a parse error.

## Failed Output

```
developer@99320f0c7be5:/var/htdocs/attribute-test$ vendor/bin/phpunit -vvv
PHPUnit 9.5.4 by Sebastian Bergmann and contributors.

Runtime:       PHP 7.4.15
Configuration: /var/htdocs/attribute-test/phpunit.xml

E                                                                   1 / 1 (100%)

Time: 00:00.002, Memory: 6.00 MB

There was 1 error:

1) ConstructorPropertyPromotionTest::testClassExists
ParseError: syntax error, unexpected 'public' (T_PUBLIC), expecting variable (T_VARIABLE)

/var/htdocs/attribute-test/src/PromoteConstructorProperty.php:11
/var/htdocs/attribute-test/tests/ConstructorPropertyPromotionTest.php:13

ERRORS!
Tests: 1, Assertions: 0, Errors: 1.

```

## Use Case

In a project like Symfony, we leverage `class_exists()` to decide if functionality
can be used or not. e.g. `symfony/maker-bundle` uses this to determine if it needs
to throw deprecations, generate specific blocks of code in templates, etc...

## Expected Behavior

`class_exists` should return `bool` regardless of what PHP features are implemented
within a given class.
