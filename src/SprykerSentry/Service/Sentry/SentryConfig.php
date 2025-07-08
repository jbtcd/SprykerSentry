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
     * @var int
     */
    public function getSentryErrorLevel(): int
    {
        return $this->get(SentryConstants::SENTRY_ERROR_LEVEL, E_ALL);
    }

    /**
     * @return string
     */
    public function getApplicationEnvironment(): string
    {
        return APPLICATION_ENV;
    }
}