<?php

declare(strict_types=1);

namespace Psalm\Issue;

/**
 * This is different from PossiblyNullReference, as PHP throws a notice (vs the possibility of a fatal error with a null
 * reference)
 */
final class PossiblyNullPropertyFetch extends CodeIssue
{
    public const ERROR_LEVEL = 3;
    public const SHORTCODE = 82;
}
