<?php

declare(strict_types = 1);

namespace SprykerSentry\Service\Sentry;

use Psr\Log\LoggerInterface;
use Sentry\Transport\TransportInterface;
use Spryker\Service\Kernel\AbstractBundleConfig;
use SprykerSentry\Shared\Sentry\SentryConstants;

class SentryConfig extends AbstractBundleConfig
{
    /**
     * @return string
     */
    public function getSentryDSN(): string
    {
        return $this->get(SentryConstants::SENTRY_DSN);
    }

    /**
     * @return null|LoggerInterface
     */
    public function getLogger(): ?LoggerInterface
    {
        return $this->get(SentryConstants::SENTRY_LOGGER);
    }

    /**
     * @return null|string
     */
    public function getRelease(): ?string
    {
        return $this->get(SentryConstants::SENTRY_RELEASE);
    }

    /**
     * @return null|string
     */
    public function getEnvironment(): ?string
    {
        return $this->get(SentryConstants::SENTRY_RELEASE);
    }

    /**
     * @return null|int
     */
    public function getMaxBreadcrumps(): ?int
    {
        return $this->get(SentryConstants::SENTRY_MAX_BREADCRUMBS);
    }

    /**
     * @return null|bool
     */
    public function getAttachStacktrace(): ?bool
    {
        return $this->get(SentryConstants::SENTRY_ATTACH_STACKTRACE);
    }

    /**
     * @return null|bool
     */
    public function getPersonallyIdentifiableInformation(): ?bool
    {
        return $this->get(SentryConstants::SENTRY_SEND_DEFAULT_PII);
    }

    /**
     * @return null|string
     */
    public function getServerName(): ?string
    {
        return $this->get(SentryConstants::SENTRY_SERVER_NAME);
    }

    /**
     * @return null|array
     */
    public function getInAppInclude(): ?array
    {
        return $this->get(SentryConstants::SENTRY_IN_APP_INCLUDE);
    }

    /**
     * @return null|array
     */
    public function getInAppExclude(): ?array
    {
        return $this->get(SentryConstants::SENTRY_IN_APP_EXCLUDE);
    }

    /**
     * @return null|string
     */
    public function getMaxRequestBodySize(): ?string
    {
        return $this->get(SentryConstants::SENTRY_MAX_REQUEST_BODY_SIZE);
    }

    /**
     * @return null|int
     */
    public function getMaxValueLength(): ?int
    {
        return $this->get(SentryConstants::SENTRY_MAX_VALUE_LENGTH);
    }

    /**
     * @return null|callable
     */
    public function getBeforeBreadcrumbs(): ?callable
    {
        return $this->get(SentryConstants::SENTRY_BEFORE_BREADCRUMBS);
    }

    /**
     * @return null|float
     */
    public function getSampleRate(): ?float
    {
        return $this->get(SentryConstants::SENTRY_SAMPLE_RATE);
    }

    /**
     * @return null|callable
     */
    public function getBeforeSend(): ?callable
    {
        return $this->get(SentryConstants::SENTRY_BEFORE_SEND);
    }

    /**
     * @return null|array
     */
    public function getIgnoreExceptions(): ?array
    {
        return $this->get(SentryConstants::SENTRY_IGNORE_EXCEPTIONS);
    }

    /**
     * @return null|int
     */
    public function getSentryErrorTypes(): ?int
    {
        return $this->get(SentryConstants::SENTRY_ERROR_TYPES);
    }

    /**
     * @return null|int
     */
    public function getSentryContextLines(): ?int
    {
        return $this->get(SentryConstants::SENTRY_CONTEXT_LINES);
    }

    /**
     * @return null|float
     */
    public function getTracesSampleRate(): ?float
    {
        return $this->get(SentryConstants::SENTRY_TRACES_SAMPLE_RATE);
    }

    /**
     * @return null|callable
     */
    public function getTracesSampler(): ?callable
    {
        return $this->get(SentryConstants::SENTRY_TRACES_SAMPLER);
    }

    /**
     * @return null|array
     */
    public function getIgnoreTransactions(): ?array
    {
        return $this->get(SentryConstants::SENTRY_IGNORE_TRANSACTIONS);
    }

    /**
     * @return null|callable
     */
    public function getBeforeSendTransactions(): ?callable
    {
        return $this->get(SentryConstants::SENTRY_BEFORE_SEND_TRANSACTIONS);
    }

    /**
     * @return null|array
     */
    public function getTracePropagationTargets(): ?array
    {
        return $this->get(SentryConstants::SENTRY_TRACE_PROPAGATION_TARGETS);
    }

    /**
     * @return null|callable
     */
    public function getBeforeSendCheckIn(): ?callable
    {
        return $this->get(SentryConstants::SENTRY_BEFORE_SEND_CHECK_IN);
    }

    /**
     * @return null|bool
     */
    public function getEnableLogs(): ?bool
    {
        return $this->get(SentryConstants::SENTRY_ENABLE_LOGS);
    }

    /**
     * @return null|callable
     */
    public function getBeforeSendLog(): ?callable
    {
        return $this->get(SentryConstants::SENTRY_BEFORE_SEND_LOGS);
    }

    /**
     * @return null|TransportInterface
     */
    public function getTransport(): ?TransportInterface
    {
        return $this->get(SentryConstants::SENTRY_TRANSPORT);
    }

    /**
     * @return null|string
     */
    public function getHttpProxy(): ?string
    {
        return $this->get(SentryConstants::SENTRY_HTTP_PROXY);
    }

    /**
     * @return null|int
     */
    public function getHttpConnectTimeout(): ?int
    {
        return $this->get(SentryConstants::SENTRY_HTTP_CONNECT_TIMEOUT);
    }

    /**
     * @return null|int
     */
    public function getHttpTimeout(): ?int
    {
        return $this->get(SentryConstants::SENTRY_HTTP_TIMEOUT);
    }
}