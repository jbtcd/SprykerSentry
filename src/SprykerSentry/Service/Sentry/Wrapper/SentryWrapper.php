<?php

declare(strict_types = 1);

namespace SprykerSentry\Service\Sentry\Wrapper;

use Sentry\ClientBuilder;
use Sentry\SentrySdk;
use Sentry\State\Scope;
use Throwable;

class SentryWrapper
{
    /**
     * @var array $options
     */
    public function __construct(array $options)
    {
        $client = ClientBuilder::create($options)
        ->setSdkIdentifier('sentry.php.spryker')
        ->setSdkVersion('dev')
        ->getClient();

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

    /**
     * @var string $key
     * @var string $value
     */
    public function setTag(string $key, string $value): void
    {
        \Sentry\configureScope(function(Scope $scope) use ($key, $value) {
            $scope->setTag($key, $value);
        });
    }
}