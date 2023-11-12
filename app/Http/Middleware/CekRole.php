<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        // dd(Auth::user()->id_role);
        $role_auth = Auth::user()->id_role;
        $getmenu = Role::leftJoin('role_access', 'role_access.role_id', 'm_role.id')
            ->leftJoin('m_menu', 'role_access.menu_id', 'm_menu.id')
            ->where('role_access.role_id', $role_auth)->get();

        // $getmenu = Role::with('menu')->where('role_access.role_id', Auth::user()->id_role);
        // dd($getmenu);
        view()->share('getmenu', $getmenu);
        return $next($request);


        // dd(Auth::user()->roles->pluck('nama_role'));
        // $userRoles = Auth::user()->roles->pluck('nama_role')->first();
        // dd($userRoles);

        // foreach ($roles as $role) {
        //     if (in_array($role, $userRoles)) {
        //         return $next($request);
        //     }
        // }

        return abort(403, 'Unauthorized');
    }
}
