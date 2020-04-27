<?php

namespace App\Http\Controllers;

use App\School;
use App\Student;
use Illuminate\Http\Request;
use Hash;
class HomeController extends Controller
{
    /////////// if (User::where('name', $request->name)->exists()  && Hash::check($request->password , $user->password))
    public function registerSchool(Request $request)
    {
        if ($request->isMethod('post')) {
            if(isset($request->contract_file))
            $request['contract'] = $this->storeFile($request->contract_file);
            if(isset($request->photo_file))
            {

                $request['photo'] = $this->storeFile($request->photo_file);
            }

            $request['password'] =bcrypt($request->password);
            $school =  School::create($request->all());
            session(['school_id' => $school->id]);
            return  redirect('profile-school/'.$school->id);

        }
        return view('register_school');
    }

    public function registerStudent(Request $request)
    {
        if ($request->isMethod('post')) {
            if(isset($request->contract))
            $request['contract'] = $this->storeFile($request->contract);
            if(isset($request->photo))
            $request['photo'] = $this->storeFile($request->photo);
            $request['password'] =bcrypt($request->password);
            $student = Student::create($request->all());

            return  redirect('profile-student/'.$student->id);
        }
        return view('register_student');
    }

    public function LoginSchool(Request $request)
    {
        $school = School::where('email', $request->email)->first();
        if (School::where('email', $request->email)->exists()
        && Hash::check($request->password , $school->password)){
            session(['school_id' => $school->id]);
            return  redirect('profile-school/'.$school->id);
        }
        $request->session()->flash('login' , "email or password is incorrect");
        // return back()->withErrors('login' , "email or password is incorrect");
        return view('about');
    }
    public function LoginStudent(Request $request)
    {
        $student = Student::where('email', $request->email)->first();
        if (Student::where('email', $request->email)->exists()
        && Hash::check($request->password , $student->password)){
            session(['school_id' => $student->id]);
            return  redirect('profile-student/'.$student->id);
        }
        $request->session()->flash('login' , "email or password is incorrect");
        // return back()->withErrors('login' , "email or password is incorrect");
        return view('about_student');
    }

    public function aboutSchool(Request $request)
    {
        return view('about');
    }
    public function aboutStudent()
    {
        return view('about_student');
    }
    public function schoolProfile($id)
    {
        $school =  School::findOrFail($id) ;
        return view("schhool_profile" , compact('school' , 'id'));
    }
    public function studentProfile($id)
    {
        $student =  Student::findOrFail($id) ;
        return view("student_profile" , compact('student' , 'id'));
    }
    public function editSchool($id)
    {
        $school =  School::findOrFail($id) ;
        return view("school_edit" , compact('school' , 'id'));
    }
    public function updateSchool( $id , Request $request)
    {
        $requestArray = $request->all();
        if(isset($request->contract_file))
        $requestArray['contract'] = $this->storeFile($request->contract_file);
        if(isset($request->photo_file))
        {

            $requestArray['photo'] = $this->storeFile($request->photo_file);
        }

        if(isset($requestArray['password']) && $requestArray['password'] != ""){
            $requestArray['password'] =  bcrypt($requestArray['password']);
        }else{
            unset($requestArray['password']);
        }
        $school =  School::findOrFail($id);
        $school->update($requestArray) ;

        return  redirect('profile-student/'.$school->id);
    }

    public function editStudent($id)
    {
        $student =  Student::findOrFail($id) ;
        return view("edit-student" , compact('student' , 'id'));
    }
    public function updateStudent( $id , Request $request)
    {
        $requestArray = $request->all();
        if(isset($request->contract_file))
        $requestArray['contract'] = $this->storeFile($request->contract_file);
        if(isset($request->photo_file))
        {

            $requestArray['photo'] = $this->storeFile($request->photo_file);
        }

        if(isset($requestArray['password']) && $requestArray['password'] != ""){
            $requestArray['password'] =  bcrypt($requestArray['password']);
        }else{
            unset($requestArray['password']);
        }
        $student =  Student::findOrFail($id);
        $student->update($requestArray) ;
        // return back();
        return  redirect('profile-student/'.$student->id);
    }

    public function home()
    {
        $schools = School::get()->take(3);
        return view('home' , compact('schools'));
    }
    public function showSchools()
    {
        $schools = School::get();
        return view('show_schools', compact('schools'));
    }
    protected function storeFile($photo)
    {

        // $photo = $request->file('image');
        $fileName = time() . str_random('10') . '.' . $photo->getClientOriginalExtension();
        $destinationPath = public_path('uploads/');

        // return $destinationPath;

        if (!is_dir($destinationPath)) {
            mkdir($destinationPath);
        }
        $photo->move($destinationPath, $fileName);
        return 'uploads/' . $fileName;

    }
}
