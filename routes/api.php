<?php

use App\Http\Controllers\WhatsAppController;
use App\Http\Middleware\TwilioRequestMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/new_message', [WhatsAppController::class, 'new_message'])
->middleware(TwilioRequestMiddleware::class)
->name('new_message');
