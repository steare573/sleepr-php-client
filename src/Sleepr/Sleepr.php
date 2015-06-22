<?php
namespace Sleepr;

use Sleepr\Config;
use Sleepr\Client;
use Sleepr\Request;

/**
 * Base Sleepr Class for configuring and making rest api calls based on config passed in
 *
 * @author  Sean Teare <steare573@gmail.com>
 * @since  2015-06-20
 */
class Sleepr
{
    /**
     * Options to be used to configure sleepr
     *
     * @var array
     */
    protected $options = array();

    /**
     * Configuration object mapping out resources, actions, and action meta
     *
     * @var Sleepr\Config
     */
    protected $config = null;

    /**
     * Constructor - initialize options
     *
     * @param array $options
     */
    public function __construct ($options = array())
    {
        $this->options = $options;
    }

    /**
     * Lazy load getter for configuration object.
     *
     * Configuration will be generated from the following order if all are set
     * 1. options[config]
     * 2. options[config.array]
     * 3. options[config.json]
     * 4. options[config.filepath]
     *
     * @return Sleepr\Config
     */
    public function getConfig ()
    {
        if (is_null($this->config)) {
            $this->config = $this->options['config'] ?: $this->generateConfig($this->options);
        }

        return $this->config;
    }

    /**
     * Generate a new Configruation object based on options provided.
     *
     * Configuration will be generated from the following order if all are set
     * 1. options[config]
     * 2. options[config.array]
     * 3. options[config.json]
     * 4. options[config.filepath]
     *
     * @param array $options
     * @return Sleepr\Config
     */
    public function generateConfig (array $options)
    {

        if (is_null($options['config.json']) && is_null($options['config.array']) && is_null($options['config.filepath'])) {
            throw new \Exception('Invalid Parameters: JSON string or file path must be passed in');
        }

        if (!is_null($options['config.array'])) {
            return Config::createFromArray($options['config.array']);
        }

        if (!$options['config.json']) {
            return Config::createFromJson($options['config.json']);
        }

        return Config::createFromJson($options['config.filepath']);
    }

    /**
     * Setter for config object
     *
     * @param Config $config
     */
    public function setConfig (Config $config) {
        $this->config = $config;
    }

    /**
     * Set an option by key val pair
     *
     * @param string $key
     * @param mixed $val
     */
    public function setOption ($key, $val)
    {
        $this->options[$key] = $val;
    }

    /**
     * Get an option by key
     *
     * @param string $key
     *
     * @return mixed - value stored at $this->options[$key]
     */
    public function getOption ($key) {
        return $this->options[$key];
    }

    public function getClient ($resource, $options = array()) {
        return new Client($this->getConfig()->getResourceData($resource), $options);
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function executeRequest($resource, $action, $data, $options = array()) {
        $client = $this->getClient($resource, $options);
        $client->$action($data);
    }
}