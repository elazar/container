<?php

declare(strict_types=1);

namespace League\Container\Test\Asset;

class Bay implements BayInterface
{
    public $baz;

    public function __construct(BazInterface $baz)
    {
        $this->baz = $baz;
    }
}
