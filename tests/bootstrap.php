<?php

defined('MEMCACHED_HOST') or define('MEMCACHED_HOST', getenv('MEMCACHED_HOST') ?: \Yiisoft\Memcached\Memcached::DEFAULT_SERVER_HOST);
defined('MEMCACHED_PORT') or define('MEMCACHED_PORT', getenv('MEMCACHED_PORT') ?: \Yiisoft\Memcached\Memcached::DEFAULT_SERVER_PORT);
