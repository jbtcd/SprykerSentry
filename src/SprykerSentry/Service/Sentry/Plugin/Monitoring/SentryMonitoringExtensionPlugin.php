<?php

declare(strict_types = 1);

namespace SprykerSentry\Service\Sentry\Plugin\Monitoring;

use Spryker\Service\Kernel\AbstractPlugin;
use Spryker\Service\MonitoringExtension\Dependency\Plugin\MonitoringExtensionPluginInterface;

class SentryMonitoringExtensionPlugin extends AbstractPlugin implements MonitoringExtensionPluginInterface
{
    /**
     * @api
     *
     * @param string $message
     * @param \Exception|\Throwable $exception
     *
     * @return void
     */
    public function setError(string $message, $exception): void
    {
        dd($exception);
    }

    /**
     * @api
     *
     * @param string|null $application
     * @param string|null $store
     * @param string|null $environment
     *
     * @return void
     */
    public function setApplicationName(?string $application = null, ?string $store = null, ?string $environment = null): void
    {
        // TODO: NOT IMPLEMENT YET
    }

    /**
     * @api
     *
     * @param string $name
     *
     * @return void
     */
    public function setTransactionName(string $name): void
    {
        // TODO: NOT IMPLEMENT YET
    }

    /**
     * @api
     *
     * @return void
     */
    public function markStartTransaction(): void
    {
        // TODO: NOT IMPLEMENT YET
    }

    /**
     * @api
     *
     * @return void
     */
    public function markEndOfTransaction(): void
    {
        // TODO: NOT IMPLEMENT YET
    }

    /**
     * @api
     *
     * @return void
     */
    public function markIgnoreTransaction(): void
    {
        // TODO: NOT IMPLEMENT YET
    }

    /**
     * @api
     *
     * @return void
     */
    public function markAsConsoleCommand(): void
    {
        // TODO: NOT IMPLEMENT YET
    }

    /**
     * @api
     *
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    public function addCustomParameter(string $key, $value): void
    {
        // TODO: NOT IMPLEMENT YET
    }

    /**
     * @api
     *
     * @param string $tracer classname::function_name.
     *
     * @return void
     */
    public function addCustomTracer(string $tracer): void
     {
        // TODO: NOT IMPLEMENT YET
     }
}