<?php

namespace PhpIntegrator\Mediating;

use Evenement\EventEmitterInterface;

use PhpIntegrator\Analysis\ClearableCacheInterface;

/**
 * Mediator that invokes a cache clear when an event happens.
 *
 * This class effectively mediates between objects emitting events that should trigger a cache clear and objects that
 * handle clearing the cache.
 */
class CacheClearingEventMediator
{
    /**
     * @var ClearableCacheInterface
     */
    protected $clearableCache;

    /**
     * @var EventEmitterInterface
     */
    protected $eventEmitter;

    /**
     * @var string
     */
    protected $eventName;

    /**
     * @param ClearableCacheInterface $clearableCache
     * @param EventEmitterInterface   $eventEmitter
     * @param string                  $eventName
     */
    public function __construct(
        ClearableCacheInterface $clearableCache,
        EventEmitterInterface $eventEmitter,
        $eventName
    ) {
        $this->clearableCache = $clearableCache;
        $this->eventEmitter = $eventEmitter;
        $this->eventName = $eventName;

        $this->setup();
    }

    /**
     * @return void
     */
    protected function setup()
    {
        $this->eventEmitter->on($this->eventName, function () {
            $this->clearCache();
        });
    }

    /**
     * @return void
     */
    protected function clearCache()
    {
        $this->clearableCache->clearCache();
    }
}
