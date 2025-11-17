<?php

namespace dwes\app\exceptions;
use dwes\app\exceptions\AppException;

class QueryException extends AppException
{
    public function __construct(string $message = "")
    {
        parent::__construct($message);
    }
}