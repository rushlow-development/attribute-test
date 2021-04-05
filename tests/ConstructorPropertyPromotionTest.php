<?php

use App\PromoteConstructorProperty;
use PHPUnit\Framework\TestCase;

/**
 * @author Jesse Rushlow <jr@rushlow.dev>
 */
class ConstructorPropertyPromotionTest extends TestCase
{
    public function testClassExists(): void
    {
        self::assertTrue(class_exists(PromoteConstructorProperty::class));
    }
}
