<?php

namespace App;

/**
 * @author Jesse Rushlow <jr@rushlow.dev>
 */
class PromoteConstructorProperty
{
    public function __construct(
        public string $var
    ) {
    }
}
