<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Roles';
        return view('pages.role.index', $data);
    }

    public function create()
    {
        $data['title'] = 'New Role';
        return view('pages.role.create', $data);
    }

    public function store(RoleStoreRequest $request)
    {
        try {
            DB::beginTransaction();
            $user = new Role();
            $user->name = $request->name;
            $user->guard_name = 'web';
            $user->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error(
                $th->getMessage(),
                [
                    'action' => 'Store role',
                    'data' => $request->all()
                ]
            );
            return to_route('roles.create')->withInput()->withToastError($th->getMessage());
        }

        return to_route('roles.index')->withToastSuccess('Role created successfully!');
    }
}
