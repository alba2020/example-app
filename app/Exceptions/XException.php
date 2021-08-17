<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

abstract class XException extends Exception
{
    public function __toString(): string
    {
        $class = get_class($this);
        $msg = $this->getMessage();
        $file = $this->getFile();
        $line = $this->getLine();

        return "$class $msg $file : $line";
    }

    /**
     * Report the exception.
     *
     * @return bool|null
     */
    public function report()
    {
        Log::error($this);

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
        return [ 'error' => $this->getMessage() ];
    }
}
