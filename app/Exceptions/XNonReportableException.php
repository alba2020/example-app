<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

abstract class XNonReportableException extends XException
{

    /**
     * Report the exception.
     *
     * @return bool|null
     */
    public function report()
    {
        return null;
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response | array
     */
    public function render($request)
    {
        return parent::render($request);
    }
}
