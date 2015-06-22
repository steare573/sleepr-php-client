<?php
namespace Sleepr;

use Sleepr\Config;

class Client
{
    protected $config;

    public function __construct(Config $config, $options = array())
    {
        $this->config = $config;
        $this->options = $options;
    }

    public function __call($method, $arguments) {
        if ($this->config->)
    }
}