<?php

declare(strict_types=1);

namespace Rod\MagoGeneratorReproducer\App;

class File
{
    /** @param iterable<self> $values */
    public function foo(iterable $values): void
    {
        // random if statement included to remove variable not used error
        if ([] === iterator_to_array($values)) {
            exit;
        }
    }

    public function bar(): void
    {
        $this->foo(
            new \ArrayIterator([]),
        );
    }
}
