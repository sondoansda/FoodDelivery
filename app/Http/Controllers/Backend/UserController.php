<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Services\Interfaces\UserServiceInterface as USI;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    protected $userService;
    public function __construct(USI $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        $users = $this->userService->paginate();
      
        $config = $this->config();
        $template = 'user.index';
        return view('dashboard.layout', compact('template', 'config', 'users'));

    }
    public function edit(Request $request, $id)
    {
   
        $request->validate(
            [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|string',
            'address' => 'required|string',
            ]
        );
        // Lấy người dùng từ ID
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'Người dùng không tồn tại!');
        }

        // Cập nhật thông tin người dùng
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->save();
        // Trả về thông báo và chuyển hướng
        return redirect()->route('users.index')->with('success', 'Cập nhật người dùng thành công!');
    }
    private function config()
    {
        return [
         'js' => [
            'js/plugins/switchery/switchery.js'
         ],
         'css'=>[
            'css/plugins/switchery/switchery.css'
         ]
        ];
    }

}

?>