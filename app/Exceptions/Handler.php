<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Whoops\Handler\PrettyPageHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }

    protected function whoopsHandler()
    {
        return tap(new PrettyPageHandler, function ($handler) {
            $files = new Filesystem;
            $handler->setEditor('sublime');
            $handler->handleUnconditionally(true);
            $handler->setApplicationPaths(
                array_flip(Arr::except(
                    array_flip($files->directories(base_path())), [base_path('vendor')]
                ))
            );
        });
    }
}
