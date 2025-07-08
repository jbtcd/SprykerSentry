<?php

declare(strict_types = 1);

namespace SprykerSentry\Service\Sentry\Wrapper;

use Sentry\ClientBuilder;
use Sentry\SentrySdk;
use Throwable;

class SentryWrapper
{
    /**
     * @var array $options
     */
    public function __construct(array $options)
    {
        $client = ClientBuilder::create($options)->getClient();
        SentrySdk::setCurrentHub(new \Sentry\State\Hub($client));
    }

    /**
     * @var Throwable $exception
     * 
     * @return void
     */
    public function captureException(Throwable $exception): void
    {
        \Sentry\captureException($exception);
    }
}