<?php

namespace Fomo\Services;

use Fomo\Cache\Cache as BaseCache;
use Swoole\Server;
use Fomo\Request\Request;

class Cache
{
    public function boot(Server $server = null, Request $request = null): void
    {
        BaseCache::setInstance();
    }
}