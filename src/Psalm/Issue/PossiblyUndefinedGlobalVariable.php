<?php

declare(strict_types=1);

namespace Psalm\Issue;

final class PossiblyUndefinedGlobalVariable extends VariableIssue
{
    public const ERROR_LEVEL = 3;
    public const SHORTCODE = 126;
}
