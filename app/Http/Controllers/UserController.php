<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = User::with('department', 'designation');

            
            if ($request->has('search') && $request->search) {
                $search = $request->search;
                $query->where(function($q) use ($search) {
                    $q->where('name', 'like', "%$search%")
                      ->orWhereHas('department', function($q) use ($search) {
                          $q->where('name', 'like', "%$search%");
                      })
                      ->orWhereHas('designation', function($q) use ($search) {
                          $q->where('name', 'like', "%$search%");
                      });
                });
            }

            return response()->json([
                'data' => $query->get()
            ]);
        }

        return view('users.index');
    }
}
