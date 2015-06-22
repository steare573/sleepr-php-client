<?php
use Sleepr\Config;

/**
 * Unit tests for our Sleepr\Config class
 *
 * @author Sean Teare <steare573@gmail.com>
 * @since  2015-06-20
 */
class ConfigTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Array containing config data for testing against
     *
     * @var array
     */
    public $configArray = array(
        'test' => array(
            'get' => array(
                'url' => 'http://testUrl.com',
                'method' => 'get'
            ),
            'post' => array(
                'url' => 'http://testUrl.com',
                'method' => 'post'
            )
        ),
        'test2' => array(
            'get' => array(
                'url' => 'http://testUrl2.com',
                'method' => 'get'
            ),
            'post' => array(
                'url' => 'http://testUrl2.com',
                'method' => 'post'
            )
        )
    );

    /**
     * Test setting resources by array
     *
     * @return void
     */
    public function testSetResourcesByArray() {
        $config = new Config();
        $config->setResources($this->configArray);
        $resources = $config->getResources();
        $this->assertTrue(is_array($resources));
        $this->assertEquals(count($resources), 2);
        $this->assertArrayHasKey('test', $resources);
        $this->assertArrayHasKey('test2', $resources);
        $this->assertInstanceOf('Sleepr\Resource', $resources['test']);
        $this->assertInstanceOf('Sleepr\Resource', $resources['test2']);
    }

    /**
     * Test setting resources by json string
     *
     * @return void
     */
    public function testSetResourcesByJson() {
        $config = new Config();
        $json = json_encode($this->configArray);
        $config->setResources(json_encode($this->configArray));
        $resources = $config->getResources();
        $this->assertTrue(is_array($resources));
        $this->assertEquals(count($resources), 2);
        $this->assertArrayHasKey('test', $resources);
        $this->assertArrayHasKey('test2', $resources);
        $this->assertInstanceOf('Sleepr\Resource', $resources['test']);
        $this->assertInstanceOf('Sleepr\Resource', $resources['test2']);
    }
}