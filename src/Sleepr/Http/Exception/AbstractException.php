<?php
namespace Sleepr\Http\Exception;

class AbstractException extends \Exception
{
    protected $responseCode = null;

    public function getResponseCode()
    {
        return $this->responseCode;
    }
}