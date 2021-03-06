<?php

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Novosga\Event;

use Novosga\Infrastructure\StorageInterface;

/**
 * StorageAwareTrait
 *
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
trait StorageAwareTrait
{
    /**
     * @var StorageInterface
     */
    private $storage;
    
    /**
     * {@inheritdoc}
     */
    public function setStorage(StorageInterface $storage)
    {
        $this->storage = $storage;
        return $this;
    }
        
    /**
     * {@inheritdoc}
     */
    public function getStorage(): StorageInterface
    {
        return $this->storage;
    }
}
