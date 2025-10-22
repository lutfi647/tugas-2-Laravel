<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if ($user && isset($user->role) && $user->role === 'admin') {
            return $next($request);
        }
        return response()->json(['message'=>'Access denied. Admin only.'],403);
    }
}
