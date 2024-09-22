<?php
// app/Http/Controllers/UserController.php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.User.userlist', compact('users'));
    }

    public function create()
    {
        
        return view('admin.User.useradd');
    }

    public function store(Request $request)
    {

        $user = new User();
        $user->first_name = $request['first_name'];
            $user->last_name = $request['last_name'];
            $user->email = $request['email'];
            $user->phone = $request['phone'];
            if (!empty($request['password'])) {
                $user->password = Hash::make($request['password']);
            }
            $user->avatar_url = $request['avatar_url'];
            $user->preferred_currency = $request['preferred_currency'];
            $user->travel_hobby = $request['travel_hobby'];
            $user->role = $request['role'];
            $user->save();

        // // dd($request->all());
        //     $validatedData = $request->validate([
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users,email' ,
        //     'phone' => 'required|string|max:15',
        //     // 'password' => 'nullable|string|min:8',
        //     'avatar_url' => 'nullable|url',
        //     'preferred_currency' => 'nullable|string|max:3',
        //     'travel_hobby' => 'nullable|string|max:255',
        //     'role' => 'required|string|max:50',
        // ]);
        // // dd($request->all());
    
        // try {
        //       $user = new User();
        //     $user->first_name = $validatedData['first_name'];
        //     $user->last_name = $validatedData['last_name'];
        //     $user->email = $validatedData['email'];
        //     $user->phone = $validatedData['phone'];
        //     // if (!empty($validatedData['password'])) {
        //     //     $user->password = Hash::make($validatedData['password']);
        //     // }
        //     $user->avatar_url = $validatedData['avatar_url'];
        //     $user->preferred_currency = $validatedData['preferred_currency'];
        //     $user->travel_hobby = $validatedData['travel_hobby'];
        //     $user->role = $validatedData['role'];
        //     $user->save();
        // } catch (\Exception $e) {
        //     Log::error('Error updating user: ' . $e->getMessage());
        //     return redirect()->back()->withErrors(['error' => 'There was an error updating the user.']);
        // }
    
        // return redirect()->route('admin.user');
}
public function edit($id)
{
    $user = User::findOrFail($id);
    return view('admin.User.useredit', compact('user'));
}

public function update(Request $request, $id)
{
    dd($request->all());
    //     $validatedData = $request->validate([
//         'first_name' => 'required|string|max:255',
//         'last_name' => 'required|string|max:255',
//         'email' => 'required|string|email|max:255|unique:users,email,' . $id,
//         'phone' => 'required|string|max:15',
//         'password' => 'nullable|string|min:8|confirmed',
//         'avatar_url' => 'nullable|url',
//         'preferred_currency' => 'nullable|string|max:3',
//         'travel_hobby' => 'nullable|string|max:255',
//         'role' => 'required|string|max:50',
//     ]);

//     try {
//         $user = User::findOrFail($id);
//         $user->first_name = $validatedData['first_name'];
//         $user->last_name = $validatedData['last_name'];
//         $user->email = $validatedData['email'];
//         $user->phone = $validatedData['phone'];
//         if (!empty($validatedData['password'])) {
//             $user->password = Hash::make($validatedData['password']);
//         }
//         $user->avatar_url = $validatedData['avatar_url'];
//         $user->preferred_currency = $validatedData['preferred_currency'];
//         $user->travel_hobby = $validatedData['travel_hobby'];
//         $user->role = $validatedData['role'];
//         $user->save();
//     } catch (\Exception $e) {
//         Log::error('Error updating user: ' . $e->getMessage());
//         return redirect()->back()->withErrors(['error' => 'There was an error updating the user.']);
//     }

//     return redirect()->route('admin.user');
}
public function destroy($id)
{
    Log::info('Attempting to delete user with ID: ' . $id);

    try {
        $user = User::findOrFail($id);
        $user->delete();

        Log::info('User deleted successfully: ', ['id' => $id]);

        return redirect()->route('admin.user.index')->with('success', 'User deleted successfully');
    } catch (\Exception $e) {
        Log::error('Failed to delete user: ', ['id' => $id, 'error' => $e->getMessage()]);

        return redirect()->route('admin.user.index')->with('error', 'Failed to delete user');
    }
}
}