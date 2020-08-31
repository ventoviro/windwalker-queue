<?php

/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2019 LYRASOFT.
 * @license    MIT
 */

declare(strict_types=1);

namespace Windwalker\Queue\Event;

use Windwalker\Event\AbstractEvent;

/**
 * The BeforeJobRunEvent class.
 */
class BeforeJobRunEvent extends AbstractEvent
{
    use JobEventTrait;
}
