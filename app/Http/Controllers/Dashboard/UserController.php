<?php


namespace App\Http\Controllers\Dashboard;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        $users = User::all();
        $page = 'users';
        $title = 'مدیریت کاربران';
        $data = array(
            'iterable' => $users,
        );
        return view('dashboard.main', compact('title', 'page' ,'data'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        $page = 'edit-user';
        $title = "ویرایش کاربر";
        $data = array(
            'user' => $user,
        );
        return view('dashboard.main', compact('page', 'data', 'title'));
    }

    public function update(Request $request, $id)
    {
        if (isset($request->action) && $request->action = 'update-password') {
            return $this->updatePassword($request, $id);
        }


        $request->validate([
            'user_name' => 'required|max:255',
            'user_email' => 'required|max:255',
        ]);
        $user = User::find($id);

        
        if (!$user) {
            return redirect('dashboard.users')->with('message', 'کاربر مورد نظر یافت نشد لطفا اطلاعات صحیح وارد کنید');
        }

        $user->name = $request->user_name;
        $user->email = $request->user_email;

        if ($user->save()) {
            return redirect('dashboard/users')->with('message', 'اطلاعات با موفقیت ذخیره شدند');
        } else {
            return redirect('dashboard/users')->with('message', 'مشکلی در ویرایش اطلاعات پیش آمد!!! دوباره تلاش کنید');
        }
    }

    public function updatePassword(Request $request, $id)
    {
        
        $request->validate([
            'user_pass' => 'required|min:8',
            'user_pass_confirm' => 'required|min:8',
        ]);
        $password = $request->user_pass;
        $password_confirmation = $request->user_pass_confirm;
        if ($password != $password_confirmation) {
            return redirect('dashboard.users')->with('message', 'رمز عبور و تایید آن باید یکسان باشند');
        }
        $user = User::find($id);
        if (!$user) {
            return redirect('dashboard.users')->with('message', 'کاربر مورد نظر یافت نشد لطفا اطلاعات صحیح وارد کنید');
        }

        $user->password = Hash::make($password);

        if ($user->save()) {
            return redirect('dashboard/users')->with('message', 'اطلاعات با موفقیت ذخیره شدند');
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        
        if($user->delete()) {
            return redirect('dashboard/users')->with('message', 'کاربر با موفقیت حذف شد');
        }
        return redirect('dashboard/users')->with('message', 'مشکلی در حذف اطلاعات پیش آمد!!! دوباره تلاش کنید');

    }

}
