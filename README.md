# 📘 AI Response API Documentation

## ✅ Endpoint  
**POST** `/api/ai-response`

This API receives a user prompt and returns an AI-generated response using OpenAI’s GPT-3.5-Turbo model.

---

## 🧠 Controller  
**Location:** `App\Http\Controllers\GetAiResponse`  
**Method:** `getAiResponse(Request $request)`

---

## 🔁 Route  
```php
Route::post('/ai-response', [GetAiResponse::class, 'getAiResponse']);

```
## 📝 Request Parameters  

- `prompt` (string, required, max: 1000 characters)  
  - **Description:** The message or question sent to the AI model.

**Example Request Body:**

```json
{
  "prompt": "What is Laravel?"
}
```

---

## 🔐 API Key Configuration

```.env
OPENAI_API_KEY=your_openai_api_key_here

```

**config/services.php**

```php
'openai' => [
    'key' => env('OPENAI_API_KEY'),
],
```

---

## 📤 Example Success Response

The response includes metadata and the AI-generated message.

Focus on:
choices[0].message.content

```json
{
  "id": "chatcmpl-abc123",
  "object": "chat.completion",
  "created": 1234567890,
  "model": "gpt-3.5-turbo",
  "choices": [
    {
      "message": {
        "role": "assistant",
        "content": "Laravel is a PHP framework for building web applications..."
      }
    }
  ],
  "usage": {
    "prompt_tokens": 12,
    "completion_tokens": 20,
    "total_tokens": 32
  }
}
```
---

## ❌ Validation Error Example

```json
{
  "message": "The given data was invalid.",
  "errors": {
    "prompt": [
      "The prompt field is required."
    ]
  }
}
```
---
## ⚙️ Tech Stack

- `Laravel 12`

- `PHP`

- `Laravel HTTP Client`

- `OpenAI GPT-3.5-Turbo`

---
## 🧑‍💻 Developer

  

**Made by**: Jahid Hasan  

**Stack**: Laravel 12, PHP, OpenAI GPT-3.5-Turbo, Laravel HTTP Client

## License

This project is open-sourced under the [MIT license](LICENSE).

### বাংলা লাইসেন্স (Bangla License)

আপনি এই প্রকল্পটি [MIT লাইসেন্সের অধীনে](LICENSE_BN.txt) ওপেন সোর্স হিসেবে ব্যবহার করতে পারবেন।

  

> © 2025 Jahid Hasan. All rights reserved.
