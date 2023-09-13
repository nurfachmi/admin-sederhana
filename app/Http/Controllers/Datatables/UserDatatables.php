<?php

namespace App\Http\Controllers\Datatables;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserDatatables extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = User::orderBy('name')->where('id', '<>', auth()->id());
        return DataTables::of($data)
            ->addColumn('action', function ($row) {
                $data = [
                    'edit_url'     => route('users.edit', ['user' => $row->getKey()]),
                    'delete_url'   => route('users.destroy', ['user' => $row->getKey()]),
                    'redirect_url' => route('users.index'),
                    'name'         => $row->name,
                    'resource'     => 'users',
                    'custom_links' => []
                ];

                array_push($data['custom_links'], ['label' => 'Set Password', 'url' => route('users.reset.show', ['user' => $row->getKey()]), 'name' => 'users.reset.show']);

                return view('components.datatable-action', $data);
            })
            ->editColumn('name', function ($row) {
                return "<a href='" . route('users.show', $row->getKey()) . "' title='Detail' alt='Detail'>$row->name</a>";
            })
            ->addColumn('jabatan', function ($row) {
                $roles = $row->getRoleNames();
                return $roles->implode(', ');
            })
            // ->filterColum('jabatan', function ($query, $keyword) {
            //     $query->where('');
            // })
            ->rawColumns(['name', 'action'])
            ->toJson();
    }
}
