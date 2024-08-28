<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function addUser(){
        return view('user.create');
    }

    public function store(Request $request){
        $request->validate([
            'hoten' => ['required', 'string', 'max:255', 'regex:/^[\pL\s]+$/u'],
            'email' => 'required|email',
            'password' => 'required|string|min:5',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ], [
            'hoten.required' => 'Họ tên là bắt buộc và không được để trống.',
            'hoten.string' => 'Họ tên phải là một chuỗi ký tự hợp lệ.',
            'hoten.max' => 'Họ tên không được vượt quá 255 ký tự.',
            'hoten.regex' => 'Họ tên chỉ được chứa chữ cái và khoảng trắng, không được có số hoặc ký tự đặc biệt.',
        
            'email.required' => 'Email là bắt buộc và không được để trống.',
            'email.email' => 'Email phải có định dạng hợp lệ, ví dụ: example@domain.com.',
                    
            'password.required' => 'Mật khẩu là bắt buộc và không được để trống.',
            'password.string' => 'Mật khẩu phải là một chuỗi ký tự hợp lệ.',
            'password.min' => 'Mật khẩu phải có ít nhất 5 ký tự.',
        
            'image.image' => 'Tệp tải lên phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng: jpg, jpeg, png, hoặc gif.',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
        ]);

        $user = new User();

        $user->name = $request->input('hoten');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //lấy đuôi file .jpg, .png,....
            $filename = time() . '.' . $extension;
            $file->move('uploads/users/', $filename);  //upload lên uploads/user
            $user->image = $filename;
        }
        $user->save();
        return redirect()->back()->with('status', 'Thêm user thành công');
    }
    
    public function index(){

        $user = User::all();

        return view('user.index', compact('user'));
    }

    public function editUser($id){
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id ){
        $request->validate([
            'hoten' => ['required', 'string', 'max:255', 'regex:/^[\pL\s]+$/u'],
            'email' => 'required|email',
            'password' => 'required|string|min:5',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ], [
            'hoten.required' => 'Họ tên là bắt buộc và không được để trống.',
            'hoten.string' => 'Họ tên phải là một chuỗi ký tự hợp lệ.',
            'hoten.max' => 'Họ tên không được vượt quá 255 ký tự.',
            'hoten.regex' => 'Họ tên chỉ được chứa chữ cái và khoảng trắng, không được có số hoặc ký tự đặc biệt.',
        
            'email.required' => 'Email là bắt buộc và không được để trống.',
            'email.email' => 'Email phải có định dạng hợp lệ, ví dụ: example@domain.com.',

            'password.required' => 'Mật khẩu là bắt buộc và không được để trống.',
            'password.string' => 'Mật khẩu phải là một chuỗi ký tự hợp lệ.',
            'password.min' => 'Mật khẩu phải có ít nhất 5 ký tự.',
        
            'image.image' => 'Tệp tải lên phải là một hình ảnh.',
            'image.mimes' => 'Hình ảnh phải có định dạng: jpg, jpeg, png, hoặc gif.',
            'image.max' => 'Kích thước hình ảnh không được vượt quá 2MB.',
        ]);

        $user = User::find($id);
        
        $user->name = $request->input('hoten');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        if ($request->hasFile('image')) {

            //check ảnh user
            $oldimage = 'uploads/users/' .$user->image;
            if(File::exists($oldimage)){
                File::delete($oldimage);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //lấy đuôi file .jpg, .png,....
            $filename = time() . '.' . $extension;
            $file->move('uploads/users/', $filename);  //upload lên uploads/user
            $user->image = $filename;
        }
        $user->update();
        return redirect()->back()->with('status', 'Update user thành công');
    }
    
    public function deleteUser($id){
        $user = User::find($id);
        $image = 'uploads/users/'.$user->image;
        if(File::exists($image)){
            File::delete($image);
        }
        $user->delete();
        return redirect()->back()->with('status', 'Xóa user thành công');
    }

    public function showUsers(){
        $users = User::all();
        return view('show', compact('users'));
    }

    public function aboutApp(){
        $users = User::all();
        return view('user.about', compact('users'));
    }

    public function contact(){
        $users = User::all();
        return view('user.contact', compact('users'));
    }

}
