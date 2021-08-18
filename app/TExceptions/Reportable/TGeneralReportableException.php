<?php

namespace App\TExceptions\Reportable;

use App\TExceptions\Traits\Reportable;
use App\TExceptions\TException;

class TGeneralReportableException extends TException
{
    use Reportable;
}
