<?php
namespace Sleepr;

class Action
{
    protected $name = null;

    protected $metadata = null;

    public function __construct($name, $metadata) {
        $this->name = $name;
        $this->metadata = $metadata;
    }

    public function getName() {
        return $this->name;
    }

    public function getMetadata()
    {
        return $this->metadata;
    }
}