<?php
namespace Sleepr;

use Sleepr\Resource;
use Sleepr\Action;

/**
 * Configuration object for encapsulating rest resource-action-actionMeta data
 *
 * @author Sean Teare <steare573@gmail.com>
 * @since  2015-06-20
 */
class Config
{
    /**
     * Associative array of resources objects
     *
     * @var array [Sleepr\Resource]
     */
    protected $resources  = array();

    /**
     * Constcutor - set up our resources based on param
     *
     * @param array|string(json) $configData [description]
     */
    public function __construct($configData = null)
    {
        if (!is_null($configData)) {
            $this->setResources($configData);
        }
    }

    /**
     * Get the action data attached to our configuration
     *
     * @param   $action [description]
     * @return [type]         [description]
     */
    public function getResourceConfig($resourceName) {

        return $this->configArray($resourceName);
    }

    /**
     * Get the action data for the parameters passed in
     *
     * @param  [type] $resource [description]
     * @param  [type] $action   [description]
     * @return [type]           [description]
     */
    public function getActionData($resource, $action = null)
    {

        $resourceData = $this->getResourceData($resourceName);

        return is_array($resourceData) ? $resourceData[$method] : null;
    }

    /**
     * Generate a Config instance from a json file path
     *
     * @param  string $filePath (including filename)
     *
     * @return Sleepr\Config
     */
    public static function createFromFile($filePath) {
        if (!file_exists($filePath)) {
            throw new \Exception('Invalid File Path');
        }

        $json = file_get_contents($filePath);

        return new static($json);
    }

    /**
     * Generate a Config instance from array configuration
     *
     * @param  array $configArray
     *
     * @return Sleepr\Config
     */
    public static function createFromArray(array $configArray) {
        return new static($configArray);
    }

    /**
     * Generate a Config instance from json configuration
     *
     * @param  string(json) $json
     *
     * @return Sleepr\Config
     */
    public static function createFromJson($json)
    {
        return new static($json);
    }

    /**
     * Get a resource object by name
     *
     * @param string $resourceName
     *
     * @return Sleepr\Resource | null
     */
    public function getResource($resourceName) {
        return $this->resources[$resourceName];
    }

    /**
     * Getter for the resources array
     *
     * @return array [Sleepr\Resource]
     */
    public function getResources()
    {
        return $this->resources;
    }
    /**
     * Add a resource object to our array
     *
     * @param Sleepr\Resource $resource
     */
    public function addResource(Sleepr\Resource $resource) {
        $this->resources[$resource->getName()] = $resource;
    }

    /**
     * Set our resources based on any configuration data passed in
     *
     * @param array|string(json) $configData
     */
    public function setResources($configData) {
        if (is_array($configData)) {
            $configArray = $configData;
        } else {
            $configArray = json_decode($configData, true);
        }

        if (is_array($configArray) && count($configArray)) {

            foreach($configArray as $curResource => $actions) {
                $this->resources[$curResource] = new Resource($curResource);
                if (is_array($actions) && count ($actions)) {
                    foreach($actions as $curAction => $actionMeta) {
                        $this->resources[$curResource]->addAction(new Action($curAction, $actionMeta));
                    }
                }
            }
        }

    }
}