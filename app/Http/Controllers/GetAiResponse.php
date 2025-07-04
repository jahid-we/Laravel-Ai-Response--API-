<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetAiResponse extends Controller
{
    public function getAiResponse(Request $request)
    {
        $request->validate([
            'prompt' => 'required|string|max:1000',
        ]);
        $prompt = $request->prompt;

        $response = Http::withOptions([
            'verify' => false,
        ])->withHeaders([
            'Authorization' => 'Bearer '.config('services.openai.key'),
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',

            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);

        return response()->json($response->json());

    }
}
