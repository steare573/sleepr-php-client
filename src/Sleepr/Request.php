<?php
namespace Sleepr;

class Request
{
    protected $headers;

    protected $queryString;

    protected $url;

    protected $auth;

    protected $body;

    protected $resource;

    protected $action;

    protected $config;

    protected $data;

    public function __construct($config, $resource, $action, $data) {
        $this->config = $config;
        $this->resource = $resource;
        $this->action = $action;
        $this->data = $data;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getQueryString()
    {
        return $this->queryString;
    }

    public function getUrl()
    {
        return $this->auth;
    }

    public function getAuth()
    {
        return $this->auth;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getResource()
    {
        return $this->resource;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getData()
    {
        return $this->data;
    }
}