<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Task;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    
    // public function postTask(Request $request) {
    //     $task = Task::find($email && $password);
    //     $task->description = $request->input('description');
    //     $task->save();

    //     return response()->json($task, 201);
    // }
    public function createUser(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); // Criptografa a senha
        $user->age = $request->input('age');
        $user->save();

        return response()->json($user, 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('authToken')->plainTextToken;
            
            return response()->json(['message' => 'Login bem-sucedido', 'token' => $token]);
        } else {
            return response()->json(['message' => 'Credenciais inválidas'], 401);
        }
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'Logout bem-sucedido']);
    }
}
