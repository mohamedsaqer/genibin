<?php

namespace App\Http\Controllers;

use App\User;
use App\UserHistory;
use Illuminate\Http\Request;

class UserHistoryController extends Controller
{
    public function addPoints (Request $request, $id)
    {
        $user = User::find($id);
        $user->total_points = $user->total_points + $request->points;
        $user->save();
        UserHistory::create([
            'admin_id' => 1,
            'user_id' => $id,
            'points' => $request->points,
        ]);
        return ['msg' => true];
    }
}
