<?php

declare(strict_types = 1);

namespace SprykerSentry\Service\Sentry;

use Spryker\Service\Kernel\AbstractBundleConfig;
use SprykerSentry\Shared\Sentry\SentryConstants;

class SentryConfig extends AbstractBundleConfig
{
    /**
     * @return ?string
     */
    public function getSentryDataSourceName(): ?string
    {
        return $this->get(SentryConstants::SENTRY_DSN);
    }

    /**
     * @return string
     */
    public function getApplicationEnvironment(): string
    {
        return APPLICATION_ENV;
    }
}