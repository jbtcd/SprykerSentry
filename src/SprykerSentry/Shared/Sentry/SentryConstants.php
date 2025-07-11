<?php

declare(strict_types = 1);

namespace SprykerSentry\Shared\Sentry;

interface SentryConstants
{
    // CORE OPTIONS

    /**
     * @var string
     */
    public const SENTRY_DSN = 'SENTRY:CONFIG:DSN';
    
    /**
     * @var string
     */
    public const SENTRY_LOGGER = 'SENTRY:CONFIG:LOGGER';
    
    /**
     * @var string
     */
    public const SENTRY_RELEASE = 'SENTRY:CONFIG:RELEASE';
    
    /**
     * @var string
     */
    public const SENTRY_ENVIRONMENT = 'SENTRY:CONFIG:ENVIRONMENT';
    
    /**
     * @var string
     */
    public const SENTRY_MAX_BREADCRUMBS = 'SENTRY:CONFIG:MAX_BREADCRUMBS';

    /**
     * @var string
     */
    public const SENTRY_ATTACH_STACKTRACE = 'SENTRY:CONFIG:ATTACH_STACKTRACE';

    /**
     * @var string
     */
    public const SENTRY_SEND_DEFAULT_PII = 'SENTRY:CONFIG:SEND_DEFAULT_PII';

    /**
     * @var string
     */
    public const SENTRY_SERVER_NAME = 'SENTRY:CONFIG:SERVER_NAME';

    /**
     * @var string
     */
    public const SENTRY_IN_APP_INCLUDE = 'SENTRY:CONFIG:IN_APP_INCLUDE';

    /**
     * @var string
     */
    public const SENTRY_IN_APP_EXCLUDE = 'SENTRY:CONFIG:IN_APP_EXCLUDE';

    /**
     * @var string
     */
    public const SENTRY_MAX_REQUEST_BODY_SIZE = 'SENTRY:CONFIG:MAX_REQUEST_BODY_SIZE';

    /**
     * @var string
     */
    public const SENTRY_MAX_VALUE_LENGTH = 'SENTRY:CONFIG:MAX_VALUE_LENGTH';

    /**
     * @var string
     */
    public const SENTRY_BEFORE_BREADCRUMBS = 'SENTRY:CONFIG:BEFORE_BREADCRUMBS';

    // Error Monitoring Options

    /**
     * @var string
     */
    public const SENTRY_SAMPLE_RATE = 'SENTRY:CONFIG:SAMPLE_RATE';

    /**
     * @var string
     */
    public const SENTRY_BEFORE_SEND = 'SENTRY:CONFIG:BEFORE_SEND';

    /**
     * @var string
     */
    public const SENTRY_IGNORE_EXCEPTIONS = 'SENTRY:CONFIG:IGNORE_EXCEPTIONS';

    /**
     * @var string
     */
    public const SENTRY_ERROR_TYPES = 'SENTRY:CONFIG:ERROR_TYPES';

    /**
     * @var string
     */
    public const SENTRY_CONTEXT_LINES = 'SENTRY:CONFIG:CONTEXT_LINES';

    // Tracing Options

    /**
     * @var string
     */
    public const SENTRY_TRACES_SAMPLE_RATE = 'SENTRY:CONFIG:TRACES_SAMPLE_RATE';

    /**
     * @var string
     */
    public const SENTRY_TRACES_SAMPLER = 'SENTRY:CONFIG:TRACES_SAMPLER';

    /**
     * @var string
     */
    public const SENTRY_IGNORE_TRANSACTIONS = 'SENTRY:CONFIG:IGNORE_TRANSACTIONS';

    /**
     * @var string
     */
    public const SENTRY_BEFORE_SEND_TRANSACTIONS = 'SENTRY:CONFIG:BEFORE_SEND_TRANSACTIONS';

    /**
     * @var string
     */
    public const SENTRY_TRACE_PROPAGATION_TARGETS = 'SENTRY:CONFIG:TRACE_PROPAGATION_TARGETS';

    // Cron Monitoring Options

    /**
     * @var string
     */
    public const SENTRY_BEFORE_SEND_CHECK_IN = 'SENTRY:CONFIG:BEFORE_SEND_CHECK_IN';

    /**
     * @var string
     */
    public const SENTRY_ENABLE_LOGS = 'SENTRY:CONFIG:ENABLE_LOGS';

    /**
     * @var string
     */
    public const SENTRY_BEFORE_SEND_LOGS = 'SENTRY:CONFIG:BEFORE_SEND_LOGS';

    // Transport Options

    /**
     * @var string
     */
    public const SENTRY_TRANSPORT = 'SENTRY:CONFIG:TRANSPORT';

    /**
     * @var string
     */
    public const SENTRY_HTTP_PROXY = 'SENTRY:CONFIG:HTTP_PROXY';

    /**
     * @var string
     */
    public const SENTRY_HTTP_CONNECT_TIMEOUT = 'SENTRY:CONFIG:HTTP_CONNECT_TIMEOUT';

    /**
     * @var string
     */
    public const SENTRY_HTTP_TIMEOUT = 'SENTRY:CONFIG:HTTP_TIMEOUT';
}