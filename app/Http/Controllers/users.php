<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class users extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'unique:users',
            'email' => 'email|unique:users',
        ], [

            'name.unique' => 'The name has already been taken.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'The email has already been taken.',
        ]);

        $username = $request->input('name');
        $email = $request->input('email');
        $password = bcrypt($request->input('pass'));

        $existingUser = DB::table('users')->where('name', $username)->count();

        if ($existingUser == 0) {
            DB::table('users')->insert([
                'name' => $username,
                'email' => $email,
                'password' => $password,
            ]);

            Session::flash('AccountCreated', "true");
            return Redirect::to('loginSignup');
        } else {
            return Redirect::to('loginSignup');
        }
    }


    public function newpassword(Request $request)
    {


        $username = $request->input('username');
        $email = $request->input('email');
        $newPassword = bcrypt($request->input('pass'));

        // Check if the user exists
        $user = DB::table('users')
            ->where('email', $email)
            ->where('name', $username)
            ->first();

        if ($user) {
            // Update the password
            DB::table('users')
            ->where('name', $username)
                ->where('email', $email)
                ->update(['password' => $newPassword]);

            // Set success message
            Session::flash('newpassword', "true");
            return Redirect::to('loginSignup');
        } 


    }


    public function editUsername(Request $request)
    {

        $id = $request->input('id');
        $username = $request->input('name');


        $existingUser = DB::table('users')->where('name', $username)->count();
        $existingNotesUser = DB::table('notes')->where('Username', $username)->count();

        if ($existingUser == 0 && $existingNotesUser == 0) {
            DB::table('users')->where('id', $id)->update([
                'name' => $username,

            ]);

            $name = session('username');
            DB::table('notes')->where('Username', $name)->update([
                'Username' => $username,

            ]);
            Session::put('username', $username);

            Session::flash('edit', "true");
            return redirect('profile');
        } else {
            Session::flash('edit', "false");
            return redirect('profile');
        }
    }


    public function editemail(Request $request)
    {

        $id = $request->input('id');
        $email = $request->input('email');


        $existingUser = DB::table('users')->where('email', $email)->count();

        if ($existingUser == 0) {
            DB::table('users')->where('id', $id)->update([
                'email' => $email,

            ]);


            Session::flash('edit', "true");
            return redirect('profile');
        } else {
            Session::flash('edit', "false");
            return redirect('profile');
        }
    }



    public function editPassword(Request $request)
    {


        $id = $request->input('id');
        $password = bcrypt($request->input('pass'));

        $user = DB::table('users')->where('id', $id)->first();

        if (password_verify($request->input('pass'), $user->password)) {
            Session::flash('passwordmatch', "true");
            return redirect('profile');
        } else {
            DB::table('users')->where('id', $id)->update([
                'password' => $password,

            ]);
            Session::put('pass', $request->input('pass'));
            Session::flash('edit', "true");
            return redirect('profile');
        }

    }



    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('pass');

        $user = DB::table('users')
            ->where('email', $email)
            ->first();

        if ($user && password_verify($password, $user->password)) {
            Session::put('LoggedIn', "true");
            Session::put('username', $user->name);
            Session::put('email', $user->email);
            Session::put('pass', $password);

            return Redirect::to('welcome');
        } else {

            Session::flash('LoggedIn', 'false');
            return Redirect::to('loginSignup');
        }
    }

    public function changepassword(Request $request)
    {
        $username = $request->input('username');
        $email = $request->input('email');

        $user = DB::table('users')
            ->where([
                ['email', '=', $email],
                ['name', '=', $username]
            ])
            ->first();

        if ($user) {
            return view('changepassword', compact('user'));
        } else {

            Session::flash('LoggedIn', 'false');
            return Redirect::to('forgetpassword');
        }
    }

    public function check(Request $r)
    {
        if (session('LoggedIn') == 'true') {

            $search = $r['search'] ?? "";
            if ($search != "") {
                $notesData = DB::table('notes')->where('notesTitle', 'like', "%$search%")->get();
            } else {
                $notesData = DB::table('notes')->limit(12)->get();
            }


            return view('welcome', compact('notesData', 'search'));
        } else {
            return redirect('loginSignup');
        }
    }


    public function checkNotes()
    {
        if (session('LoggedIn') == 'true') {
            return view('uploadNotes');
        } else {
            return redirect('loginSignup');
        }
    }

    public function checkProfile()
    {
        if (session('LoggedIn') == 'true') {
            $name = session('username');


            $userData = DB::table('users')
                ->where('name', $name)
                ->first();


            $notesData = DB::table('notes')
                ->where('Username', $name)
                ->get();

            return view('profile', compact('userData', 'notesData'));
        } else {
            return redirect('loginSignup');
        }
    }




    public function logout()
    {
        session()->forget('LoggedIn');
        session()->forget('username');
        session::flash('logout', 'true');
        return redirect('loginSignup');
    }

    public function upload(Request $request)
    {
        if ($request->has('submit')) {
            if ($request->hasFile('notes') && $request->file('notes')->isValid()) {
                $targetDir = 'public/uploads/';

                $file = $request->file('notes');
                $fileName = $file->getClientOriginalName();
                $fileType = $file->getClientOriginalExtension();


                $allowedTypes = ['pdf'];

                if (!in_array(strtolower($fileType), $allowedTypes)) {
                    session()->flash('errorNotes', "true");
                } else {
                    $file->storeAs($targetDir, $fileName);

                    if ($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
                        $targetDir = 'public/uploads/';

                        $thumbnail = $request->file('thumbnail');
                        $thumbnailName = $thumbnail->getClientOriginalName();
                        $thumbnailType = $thumbnail->getClientOriginalExtension();

                        $allowedThumbnailTypes = ['jpg', 'jpeg', 'png'];

                        if (!in_array(strtolower($thumbnailType), $allowedThumbnailTypes)) {
                            session()->flash('errorThumbnail', "true");
                        } else {
                            $thumbnail->storeAs($targetDir, $thumbnailName);

                            $name = session('username');
                            $title = $request->input('title');

                            $query = DB::table('notes')->insert([
                                'Username' => $name,
                                'notesImg' => $thumbnailName,
                                'notesName' => $fileName,
                                'notesTitle' => $title,
                            ]);

                            if ($query) {
                                session()->flash('alertSuccess', "true");

                            } else {
                                session()->flash('alertError', "true");
                            }
                        }
                    }
                }
            }
        }

        return view('uploadNotes', compact('fileName'));
    }

    public function deleteNotes($id)
    {
        $del = DB::table('notes')->where('Id', $id)->delete();
        if ($del) {
            session()->flash('del', "success");
            return redirect('profile');
        } else {
            session()->flash('del', "error");
            return redirect('profile');
        }


    }


    public function adminLogin(Request $r)
    {
        $username = $r->input('name');
        $pass = $r->input('pass');
        if ($username == 'admin' && $pass == 'admin') {
            session()->put('admin', 'LoggedIn');
            return view('dashboard');
        } else {
            session()->flash('admin', 'fail');
            return view('adminLogin');
        }
    }


    public function logoutAdmin()
    {

        session()->forget('admin');
        return view('adminLogin');
    }

    public function viewUsers()
    {
        if (session('admin')) {
            $userData = DB::table('users')->get();
            return view('ViewUsers', compact('userData'));
        } else {
            return view('adminLogin');
        }
    }

    public function viewNotes()
    {
        if (session('admin')) {
            $notesData = DB::table('notes')->get();
            return view('viewNotes', compact('notesData'));
        } else {
            return view('adminLogin');
        }
    }

    public function removeUser($id, $name)
    {
        if (session('admin')) {
            $userRemove = DB::table('users')->where('id', $id)->delete();
            $RemoveUserNotes = DB::table('notes')->where('Username', $name)->delete();

            $userData = DB::table('users')->get();
            return view('ViewUsers', compact('userData'));
        } else {
            return view('adminLogin');
        }
    }


    public function removenote($id)
    {
        if (session('admin')) {
            $RemoveUserNotes = DB::table('notes')->where('Id', $id)->delete();

            $notesData = DB::table('notes')->get();
            return view('viewNotes', compact('notesData'));
        } else {
            return view('adminLogin');
        }
    }
}
