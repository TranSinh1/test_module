<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Repositories\User\UserRepository;

class UserController extends Controller
{

    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function list() {
        $users = $this->userRepository->getAll();
        
        return view('user.list', compact('users'));
    }

    public function create() {

        return view('user.create');
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        echo"success create user";
        // return view('user.create');
    }

    public function edit($id) {
        $user = User::find($id);
        if ($user) {

            return view('user.edit', compact('user'));
        }

        echo "not found";
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $user->update($data);
        echo"success update user";
    }

    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $user = User::findOrFail($id);

        $user->delete();
        echo"success delete user";
    }

    public function TestI() {
        return $this->userRepository->TestI();
    }
}
