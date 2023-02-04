<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException; //この追加を忘れないで
use Throwable;

class Handler extends ExceptionHandler
{
protected function unauthenticated($request,Throwable $exception)
{
    if($request->expectsJson()) {
        return respomse()->json(['message' => $exception->getMessage()],401);
    }
    if($request->is('admin') || $request->is('admin/*')){ //追記
        return redirect()->guest('/admin/login');//追記
    }//追記
    return redirect()->guest($exception->redirectTo ?? route('login'));
}
    // /**
    //  * A list of exception types with their corresponding custom log levels.
    //  *
    //  * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
    //  */
    // protected $levels = [
    //     //
    // ];

    // /**
    //  * A list of the exception types that are not reported.
    //  *
    //  * @var array<int, class-string<\Throwable>>
    //  */
    // protected $dontReport = [
    //     //
    // ];

    // /**
    //  * A list of the inputs that are never flashed to the session on validation exceptions.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $dontFlash = [
    //     'current_password',
    //     'password',
    //     'password_confirmation',
    // ];

    // /**
    //  * Register the exception handling callbacks for the application.
    //  *
    //  * @return void
    //  */
    // public function register()
    // {
    //     $this->reportable(function (Throwable $e) {
    //         //
    //     });
    // }

// ここから追加。上は念の為コメント-------------------------------------------------------
/**
     * Create a new authentication exception.
     *
     * @param  string  $message
     * @param  array  $guards
     * @param  string|null  $redirectTo
     * @return void
     */
// 1/31ここをコメントすると動くーーーーーーーーーーーーーーーーーーーーーー
    // public function __construct($message = 'Unauthenticated.', array $guards = [], $redirectTo = null)
    // {
    //     parent::__construct($message);

    //     $this->guards = $guards;
    //     $this->redirectTo = $redirectTo;
    // }
// ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
    /**
     * Get the guards that were checked.
     *
     * @return array
     */
    public function guards()
    {
        return $this->guards;
    }

    /**
     * Get the path the user should be redirected to.
     *
     * @return string|null
     */
    public function redirectTo()
    {
        return $this->redirectTo;
    }
}
