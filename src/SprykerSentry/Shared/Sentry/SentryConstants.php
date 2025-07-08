<?php

declare(strict_types = 1);

namespace SprykerSentry\Shared\Sentry;

interface SentryConstants
{
    /**
     * @var string
     */
    public const SENTRY_DSN = 'SENTRY:CONFIG:DATA_SOURCE_NAME';

    /**
     * @var string
     */
    public const SENTRY_ERROR_LEVEL = 'SENTRY:CONFIG:ERROR_LEVEL';

    /**
     * @var string
     */
    public const SENTRY_CONTEXT_LINES = 'SENTRY:CONFIG:CONTEXT_LINES';

    /**
     * @var string
     */
    public const SENTRY_ATTACH_STACKTRACE = 'SENTRY:CONFIG:ATTACH_STACKTRACE'
}