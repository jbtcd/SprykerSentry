<?php

declare(strict_types = 1);

namespace SprykerSentry\Service\Sentry;

use Spryker\Service\Kernel\AbstractServiceFactory;
use SprykerSentry\Service\Sentry\Wrapper\SentryWrapper;

class SentryFactory extends AbstractServiceFactory
{
    public function getSentryWrapper(): SentryWrapper
    {
        return $this->getProvidedDependency(SentryDependencyProvider::SENTRY_WRAPPER);
    }
}