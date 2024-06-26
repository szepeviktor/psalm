<?php

declare(strict_types=1);

namespace Psalm\Issue;

final class PossiblyUndefinedMethod extends MethodIssue
{
    public const ERROR_LEVEL = 3;
    public const SHORTCODE = 108;
}
