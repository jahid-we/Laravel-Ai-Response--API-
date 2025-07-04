<?php

use App\Http\Controllers\GetAiResponse;
use Illuminate\Support\Facades\Route;

Route::post('/ai-response', [GetAiResponse::class, 'getAiResponse']);
