<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/generate-token', function () {
    $user = User::where('email', 'test@example.com')->first();
    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }
    $token = $user->createToken('API Token')->plainTextToken;
    return ['token' => $token];
});