<?php

declare(strict_types = 1);

namespace SprykerSentry\Service\Sentry;

use Spryker\Service\Kernel\AbstractService;
use Throwable;

/**
 * @method \SprykerSentry\Service\Sentry\SentryFactory getFactory()
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
}