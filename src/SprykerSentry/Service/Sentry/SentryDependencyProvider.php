<?php

declare(strict_types = 1);

namespace SprykerSentry\Service\Sentry;

use Spryker\Service\Container\Container;
use Spryker\Service\Kernel\AbstractBundleDependencyProvider;
use SprykerSentry\Service\Sentry\Wrapper\SentryWrapper;

/**
 * @method \SprykerSentry\Service\Sentry\SentryConfig getConfig()
 */
class SentryDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const SENTRY_WRAPPER = 'SENTRY_WRAPPER';

    /**
     * @param \Spryker\Service\Kernel\Container $container
     *
     * @return \Spryker\Service\Kernel\Container
     */
    public function provideServiceDependencies(Container $container): Container
    {
        $container = $this->createSentryWrapper($container);

        return $container;
    }

    /**
     * @param \Spryker\Service\Kernel\Container $container
     *
     * @return \Spryker\Service\Kernel\Container
     */
    public function createSentryWrapper(Container $container): Container
    {
        $container->set(self::SENTRY_WRAPPER, function() {
            $options = [
                'dsn' => $this->getConfig()->getSentryDSN(),
                'logger' => $this->getConfig()->getLogger(),
                'release' => $this->getConfig()->getRelease(),
                'environment' => $this->getConfig()->getEnvironment(),
                'max_breadcrumbs' => $this->getConfig()->getMaxBreadcrumps(),
                'attach_stacktrace' => $this->getConfig()->getAttachStacktrace(),
                'send_default_pii' => $this->getConfig()->getPersonallyIdentifiableInformation(),
                'server_name' => $this->getConfig()->getServerName(),
                'in_app_include' => $this->getConfig()->getInAppInclude(),
                'in_app_exclude' => $this->getConfig()->getInAppExclude(),
                'max_request_body_size' => $this->getConfig()->getMaxRequestBodySize(),
                'max_value_length' => $this->getConfig()->getMaxValueLength(),
                'before_breadcrumb' => $this->getConfig()->getBeforeBreadcrumbs(),
                'sample_rate' => $this->getConfig()->getSampleRate(),
                'before_send' => $this->getConfig()->getBeforeSend(),
                'ignore_exceptions' => $this->getConfig()->getIgnoreExceptions(),
                'error_types' => $this->getConfig()->getSentryErrorTypes(),
                'context_lines' => $this->getConfig()->getSentryContextLines(),
                'traces_sample_rate' => $this->getConfig()->getTracesSampleRate(),
                'traces_sampler' => $this->getConfig()->getTracesSampler(),
                'ignore_transactions' => $this->getConfig()->getIgnoreTransactions(),
                'before_send_transaction' => $this->getConfig()->getBeforeSendTransactions(),
                'trace_propagation_targets' => $this->getConfig()->getTracePropagationTargets(),
                'before_send_check_in' => $this->getConfig()->getBeforeSendCheckIn(),
                'enable_logs' => $this->getConfig()->getEnableLogs(),
                'before_send_log' => $this->getConfig()->getBeforeSendLog(),
                'transport' => $this->getConfig()->getTransport(),
                'http_proxy' => $this->getConfig()->getHttpProxy(),
                'http_connect_timeout' => $this->getConfig()->getHttpConnectTimeout(),
                'http_timeout' => $this->getConfig()->getHttpTimeout(),
            ];

            return new SentryWrapper($options);
        });

        return $container;
    }
}