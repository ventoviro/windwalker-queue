<?php declare(strict_types=1);
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2019 LYRASOFT.
 * @license    LGPL-2.0-or-later
 */

namespace Windwalker\Queue\Driver;

use Windwalker\Queue\QueueMessage;

/**
 * The AbstractQueueDriver class.
 *
 * @since  3.2
 */
interface QueueDriverInterface
{
    /**
     * push
     *
     * @param QueueMessage $message
     *
     * @return int|string
     */
    public function push(QueueMessage $message);

    /**
     * pop
     *
     * @param string $queue
     *
     * @return QueueMessage
     */
    public function pop($queue = null);

    /**
     * delete
     *
     * @param QueueMessage|string $message
     *
     * @return static
     */
    public function delete(QueueMessage $message);

    /**
     * release
     *
     * @param QueueMessage|string $message
     *
     * @return static
     */
    public function release(QueueMessage $message);
}
