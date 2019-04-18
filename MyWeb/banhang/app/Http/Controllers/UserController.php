<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(6);
        return view('admin.users.index', ['users'=> $users]);
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'phone_number' => $request ->phone_number,
            'password' => bcrypt($request ->password),
            'address' => $request ->address,
            'remember_token' => $request ->remember_token,
            'role' => $request ->role

        ]);
        return redirect()->back()->with('thongbao', 'Thêm người dùng thành công');;
    }

    public function create(){
        return view('admin.users.create');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show', ['user'=> $user]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $user -> update([
            'name' => $request ->name,
            'email' => $request ->email,
            'phone_number' => $request ->phone_number,
            'address' => $request ->address,
            'password' => bcrypt($request ->password),
            'remember_token' => $request ->remember_token,
            'role' => $request ->role
        ]);
        return redirect()->back();
    }
    
    /*public function destroy($id)
    {
        $user = User::find($id);
        $user->bills()->delete();

        User::destroy($id);
        return redirect()->route('users.index');
    }*/

    public function dangki(){
        return view('dangki');
    }

    public function dangnhap(){
        return view('dangnhap');
    }

    public function dangxuat(){
        Auth::logout();
        Session::forget('cart');
        return redirect('luckycake/trangchu');
    }

    public function postDangki(Request $rq){
        $this->validate($rq,
            [
                'name'=>'required',
                'email'=>'required|email|unique:users,email',
                'phone_number'=>'required',
                'address'=>'required',
                'password'=>'required|min:5|max:20',
                're_password'=>'required|same:password'
            ],
            [
                'name.required'=>'Vui lòng nhập tên của bạn',
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'email.unique'=>'Email này đã có người sử dụng',
                'phone_number.required'=>'Vui lòng nhập số điện thoại của bạn',
                'address.required'=>'Vui lòng nhập địa chỉ của bạn',
                'password.required'=>'Vui lòng nhập password',
                'password.min'=>'Password ít nhất 5 kí tự',
                'password.max'=>'Password tối đa 20 kí tự',
                're_password.required'=>'Vui lòng xác nhận lại password',
                're_password.same'=>'Password không giống nhau'
            ]
            );
            $user = new User();
            $user->name = $rq->name;
            $user->email = $rq->email;
            $user->phone_number = $rq->phone_number;
            $user->address = $rq->address;
            $user->role = 'customer';
            $user->password = bcrypt($rq->password);
            $user->save();

            return redirect()->back()->with('thanhcong', 'Tạo tài khoản thành công');
    }
    public function postDangnhap(Request $request){
        $this->validate($request,
            [
                'email'=> 'required|email',
                'password'=> 'required|min:5|max:20',
            ],
            [
                'email.required'=> 'Vui lòng nhập email',
                'email.email'=> 'Email không đúng định dạng',
                'password.required'=> 'Vui lòng nhập mật khẩu',
                'password.min'=>'Password ít nhất 5 kí tự',
                'password.max'=>'Password tối đa 20 kí tự'
            ]           
            );
            $email = $request->email;
            $password = $request->password;
            
            if(Auth::attempt(['email' => $email , 'password' => $password, 'role' => "customer"])) {
                return redirect('luckycake/trangchu');
            }
            elseif (Auth::attempt(['email' => $email , 'password' => $password, 'role'=>"admin"])) {
                return redirect('admin/home');
            }
            else{
                return redirect()->back()->with('thongbao', 'Đăng nhập không thành công');
            }
    }
/*
    public function postAdminlogin(Request $r){
        $this->validate($r,
            [
                'name'=> 'required',
                'password'=> 'required|min:5|max:20'
            ],
            [
                'name.required'=> 'Vui lòng nhập tên đăng nhập',
                'password.required'=> 'Vui lòng nhập mật khẩu',
                'password.min'=>'Password ít nhất 5 kí tự',
                'password.max'=>'Password tối đa 20 kí tự'
            ]           
            );
            $name = $r->name;
            $password = $r->password;
            
                if(Auth::attempt(['name' => $name , 'password' => $password, 'role'=>"admin"])) {
                    return redirect('admin/home');
                }
                else{
                    return redirect()->back()->with('thongbao', 'Đăng nhập không thành công');
                }
    }
*/
    public function search(Request $re){
        $s = Input::get('search');
        $s_users = User::where('name', 'like', '%'.$s.'%')
                            ->orwhere('email', $s)->paginate(6);
        $s_users->appends(['search' => $s]);
        return view('admin.users.search', compact('s_users'));
    }
}
