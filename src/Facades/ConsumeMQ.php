<?php

namespace Mithun\SimpleRabbit\Facades;

use Illuminate\Support\Facades\Facade;
use RuntimeException;

/**
 * @method static void listen(callable $callback)
 * @method static \Mithun\SimpleRabbit\ConsumeMQ queue(string $name = null)
 * @method static \Mithun\SimpleRabbit\ConsumeMQ connection(string $name = null)
 *
 * @see \Mithun\SimpleRabbit\ConsumeMQ
 */
class ConsumeMQ extends Facade
{
    /**
     * Get the registered name of the component.
     *
     *
     * @throws RuntimeException
     */
    protected static function getFacadeAccessor(): string
    {
        return \Mithun\SimpleRabbit\ConsumeMQ::class;
    }
}
