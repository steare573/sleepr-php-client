<?php
use Sleepr\Sleepr;
use Sleepr\Config;

class SleeprTest extends \PHPUnit_Framework_TestCase
{
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
        )
    );

    public function testInstatiation()
    {
        $sleepr = new Sleepr();
        $this->assertEquals($sleepr->getOptions(), array());
    }

    public function testGetConfigConfigSet ()
    {
        $options['config'] = new Config();
        $sleepr = new Sleepr($options);
        $config = $sleepr->getConfig();
        $this->assertEquals($options['config'], $options['config']);
    }

    public function testGetConfigArray()
    {
       $options['config.array'] = $this->configArray;
       $sleepr = new Sleepr($options);
       $config = $sleepr->getConfig();

    }

}