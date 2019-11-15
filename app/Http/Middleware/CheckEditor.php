<?php

namespace App\Http\Middleware;

use App\Distributors;
use Closure;

class CheckEditor
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param $distributor_id
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_id = auth()->user()->getAuthIdentifier();
        $distributor = $request->route('distributor');

        if ($user_id != 1 and $user_id != $distributor->author_id) {
            $request->session()->put('result_bad', 'You are not able to edit or delete this');
            return redirect()->back();
        }

        return $next($request);
    }
}
