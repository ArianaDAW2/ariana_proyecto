<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class usersAPICrud extends Controller
{
    use AuthorizesRequests;

    public function __construct()
    {
        $token = request()->bearerToken();

        if ($token) {
            $accessToken = \Laravel\Sanctum\PersonalAccessToken::findToken($token);
            if ($accessToken) {
                auth()->setUser($accessToken->tokenable);
            }
        }
    }

    public function index()
    {
        $this->authorize('view', User::class);

        return response()->json([
            'users' => User::paginate(10),
        ]);
    }

    public function store(UserRequest $request)
    {
        $this->authorize('create', User::class);

        $user = User::create($request->validated());
        return response()->json($user, 201);
    }

    public function show(User $user)
    {
        $this->authorize('view', $user);

        return response()->json($user);
    }

    public function update(UserRequest $request, User $user)
    {
        $this->authorize('update', $user);

        $user->update($request->validated());
        return response()->json($user);
    }

    public function destroy(User $user)
    {
        $this->authorize('delete', $user);

        $user->delete();
        return response()->json(null, 204);
    }
}
