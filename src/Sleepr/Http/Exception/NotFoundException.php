<?php
namespace Sleepr\Http\Exception;

use Sleepr\Http\Exception\AbstractException;

class BadRequestException extends AbstractException
{
    protected $responseCode = 404;
}