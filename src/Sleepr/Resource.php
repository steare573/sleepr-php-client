<?php
namespace Sleepr;

use Sleepr\Action;

class Resource
{
    protected $actions = array();

    protected $name = null;

    public function __construct($name, $actions = null)
    {
        $this->name = $name;
        if ($actions instanceof Action) {
            $this->actions[] = $actions;
        } elseif (is_array($actions)) {
            foreach($actions as $action) {
                if (!($action instanceof Action)) {
                    throw new \Exception('Invalid action passed in. Must be instance of Sleepr\\Action');
                }
            }
        } elseif (!is_null($actions)) {
            throw new \Exception('Actions must be an array of or single instance of Sleepr\\Action');
        }
    }

    public function addAction(Action $action) {
        $this->actions[] = $action;
    }

    public function getActions ()
    {
        return $this->actions;
    }

    public function getAction($actionName) {
        if (is_array($this->actions) && count($this->actions)) {
            foreach($this->actions as $action) {
                if ($action->getName() === $actionName) {
                    return $action;
                }
            }
        }

        return null;
    }
}