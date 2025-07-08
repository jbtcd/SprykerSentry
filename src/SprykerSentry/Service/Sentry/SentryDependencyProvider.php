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
                'environment' => $this->getConfig()->getApplicationEnvironment(),
                'dsn' => $this->getConfig()->getSentryDataSourceName(),
                'error_types' => $this->getConfig()->getSentryErrorLevel(),
                'context_lines' => $this->getConfig()->getSentryContextLines(),
                'attach_stacktrace' => $this->getConfig()->getAttachStacktrace(),
            ];

            return new SentryWrapper($options);
        });

        return $container;
    }
}