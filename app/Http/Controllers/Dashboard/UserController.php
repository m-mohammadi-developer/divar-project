<?php


namespace App\Http\Controllers\Dashboard;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index(){
        $users = User::all();
        $page = 'users';
        $title = 'مدیریت کاربران';
        $data = array(
            'iterable' => $users,
        );
        return view('dashboard.main', compact('title', 'page' ,'data'));
    }

    public function list(){
        
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $page = 'edit-user';
        $data = array(
            'user' => $user,
        );
        return view('dashboard.main', compact('page', 'data'));
    }

    public function update(Request $request, $id)
    {
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

    public function destroy($id){
        $user = User::findOrFail($id);
        
        if($user->delete()) {
            return redirect('dashboard/users')->with('message', 'کاربر با موفقیت حذف شد');
        }
        return redirect('dashboard/users')->with('message', 'مشکلی در حذف اطلاعات پیش آمد!!! دوباره تلاش کنید');

    }

}
