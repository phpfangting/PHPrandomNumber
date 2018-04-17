<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Cache\Adapter;

use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\CacheItem;

/**
<<<<<<< HEAD
 * Interface for adapters managing instances of Symfony's CacheItem.
=======
 * Interface for adapters managing instances of Symfony's {@see CacheItem}.
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface AdapterInterface extends CacheItemPoolInterface
{
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     *
     * @return CacheItem
     */
    public function getItem($key);

    /**
     * {@inheritdoc}
     *
     * return \Traversable|CacheItem[]
     */
    public function getItems(array $keys = array());
=======
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
}
