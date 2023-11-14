<?php

namespace App\Http\Middleware;

use App\Models\Menu;
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

        $role_auth = Auth::user()->id_role;
        $getmenu = Role::leftJoin('role_access', 'role_access.role_id', 'm_role.id')
            ->leftJoin('m_menu', 'role_access.menu_id', 'm_menu.id')
            ->where('role_access.role_id', $role_auth)
            ->orderBy('m_menu.order', 'asc')
            ->get();

        // $getmenu = Menu::leftJoin('role_access', 'role_access.menu_id', 'm_menu.id')
        //     ->leftJoin('m_role', 'm_role.id', 'role_access.role_id')
        //     ->where('role_access.role_id', $role_auth)
        //     ->select('m_menu.id as idm', 'm_menu.*', 'role_access.*', 'm_role.id')
        //     ->get();

        view()->share('getmenu', $getmenu);
        return $next($request);

        return abort(403, 'Unauthorized');
    }
}
