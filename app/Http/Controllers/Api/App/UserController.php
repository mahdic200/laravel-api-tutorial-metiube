<?php

namespace App\Http\Controllers\Api\App;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return response()->json(["data" => $users]);
    }

    public function show($id) {
        
        return response()->json(["message" => "showing id : {$id}"]);
    }

    public function store(UserStoreRequest $request) {
        try {
            $inputs = $request->all();
            $inputs["password"] = bcrypt($inputs["password"]);
            $user = User::create($inputs);
            return response()->json([
                "message" => "! کاربر با موفقیت ایجاد شد",
                "data" => $user,
            ]);
        } catch (\Exception $e) {
            return response()->json(["message" => "! خطای سرور ، مشکلی پیش آمده است"], 500);
        }
    }

    public function update($id) {
        
        return response()->json(["message" => "update method : {$id}!"]);
    }

    public function destroy($id) {
        
        return response()->json(["message" => "destroy method : {$id} !"]);
    }

    public function restore($id) {
        
        return response()->json(["message" => "restore method {$id} !"]);
    }

    public function trash() {
        
        return response()->json(["message" => "trash method !"]);
    }

    public function clearTrash() {
        
        return response()->json(["message" => "clearTrash method !"]);
    }

    public function forceDelete($id) {
        
        return response()->json(["message" => "forceDelete method {$id} !"]);
    }
}
