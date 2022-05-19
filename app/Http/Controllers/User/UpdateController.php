<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user) {
        $data = $request->validated();
        $user->update($data);

        return view('user.show', compact('user'));
    }
}
