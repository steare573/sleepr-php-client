<?php
namespace Sleepr\Http\Driver;

interface DriverInterface
{
    public function get ($url, $headers, $data, $auth);
    public function post ($url, $headers, $data, $auth);
    public function put ($url, $headers, $data, $auth);
    public function delete ($url, $headers, $payload, $auth);
    public function head ($url, $headers, $payload, $auth);
    public function patch ($url, $headers, $payload, $auth);
    public function options ($url, $headers, $payload, $auth);
}