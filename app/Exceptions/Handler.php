<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
{
    if ($exception instanceof HttpException && $exception->getStatusCode() === 403) {
        return response()->view('errors.403', [], 403);
    }

    if ($exception instanceof NotFoundHttpException) {
        return response()->view('errors.404', [], 404);
    }

    if ($exception instanceof HttpException && $exception->getStatusCode() == 500) {
        return response()->view('errors.500', [], 500);
    }

    // Tambahkan penanganan untuk semua pengecualian yang tidak tertangkap
    return $this->renderHttpException($exception);
}


}
