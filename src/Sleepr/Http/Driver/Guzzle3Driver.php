<?php
namespace Sleepr\Http\Driver;

use Sleepr\Http\Driver\DriverInterface;
use Guzzle\Http\Client;

class Guzzle3Driver implements DriverInterface
{
    protected $requestMeta = null;

    public function __construct($requestMeta) {
        $this->requestMeta = $requestMeta;
    }

    public function get ($url, $headers, $payload, $auth) {

        $client = new Client();
        // Create a request with basic Auth
        $request = $client->get($url, $headers);

        if ($auth) {
            $request->auth($auth->user, $auth->password);
        }

        // Send the request and get the response
        $response = $request->send();
    }

    public function post ($url, $headers, $payload, $auth) {
        $client = new Client();
        // Create a request with basic Auth
        $request = $client->post($url, $headers, $payload);

        if ($auth) {
            $request->auth($auth->user, $auth->password);
        }

        // Send the request and get the response
        $response = $request->send();
    }

    public function put ($url, $headers, $payload) {
        $client = new Client();
        // Create a request with basic Auth
        $request = $client->put($url, $headers, $payload);

        if ($auth) {
            $request->auth($auth->user, $auth->password);
        }

        // Send the request and get the response
        $response = $request->send();
    }

    public function delete ($url, $headers, $payload) {

        $client = new Client();
        // Create a request with basic Auth
        $request = $client->delete($url, $headers, $payload);

        if ($auth) {
            $request->auth($auth->user, $auth->password);
        }

        // Send the request and get the response
        $response = $request->send();
    }

    public function head ($url, $headers, $payload, $auth) {
        $client = new Client();
        // Create a request with basic Auth
        $request = $client->head($url, $headers, $payload);

        if ($auth) {
            $request->auth($auth->user, $auth->password);
        }

        // Send the request and get the response
        $response = $request->send();
    }

    public function patch ($url, $headers, $payload, $auth) {
        $client = new Client();
        // Create a request with basic Auth
        $request = $client->patch($url, $headers, $payload);

        if ($auth) {
            $request->auth($auth->user, $auth->password);
        }

        // Send the request and get the response
        $response = $request->send();
    }

    public function options ($url, $headers, $payload, $auth) {
        $client = new Client();
        // Create a request with basic Auth
        $request = $client->options($url, $headers, $payload);

        if ($auth) {
            $request->auth($auth->user, $auth->password);
        }

        // Send the request and get the response
        $response = $request->send();
    }

}