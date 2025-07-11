<?php

declare(strict_types = 1);

namespace SprykerSentry\Service\Sentry;

use Spryker\Service\Kernel\AbstractService;
use Throwable;

/**
 * @method \SprykerSentry\Service\Sentry\SentryServiceFactory getFactory()
 */
class SentryService extends AbstractService
{
    /**
     * @var Throwable $exception
     * 
     * @return void
     */
    public function captureException(Throwable $exception): void
    {
        $this->getFactory()->getSentryWrapper()->captureException($exception);
    }

    /**
     * @var string $key
     * @var string $value
     */
    public function setTag(string $key, string $value): void
    {
        $this->getFactory()->getSentryWrapper()->setTag($key, $value);
    }
}