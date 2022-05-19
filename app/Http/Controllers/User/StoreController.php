<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Requests\StoreRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\User;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();
        User::firstOrCreate([
            'email' => $data['email']
        ], $data); // проверка email на уникальность

        return redirect()->route('user.index');
    }
}
