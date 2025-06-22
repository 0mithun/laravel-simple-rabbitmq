<?php

namespace Mithun\SimpleRabbit\Facades;

use Illuminate\Support\Facades\Facade;
use Mithun\SimpleRabbit\MQ\Connection;
use Mithun\SimpleRabbit\MQ\MessageBuilder;

/**
 * @method static Connection connection(?string $name = null)
 * @method static MessageBuilder queue(?string $queueName = null)
 * @method static MessageBuilder exchange(string $exchangeName)
 * @method static MessageBuilder setBody(array $body)
 * @method static MessageBuilder setHeaders(array $headers)
 *
 * @see \Mithun\SimpleRabbit\SimpleMQ
 */
class SimpleMQ extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'simple-rabbitmq';
    }
}
