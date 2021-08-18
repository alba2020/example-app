<?php

namespace App\TExceptions\NonReportable;

use App\TExceptions\Traits\NonReportable;
use App\TExceptions\TException;

class TAuthException extends TException
{
    use NonReportable;

    protected $key = 'auth.failed';
}
