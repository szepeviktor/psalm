<?php

declare(strict_types=1);

namespace Psalm\Issue;

final class RedundantPropertyInitializationCheck extends CodeIssue
{
    public const ERROR_LEVEL = 4;
    public const SHORTCODE = 261;
}
