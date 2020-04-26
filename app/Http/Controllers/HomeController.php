<?php

namespace App\Http\Controllers;

use App\School;
use App\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function registerSchool(Request $request)
    {
        if ($request->isMethod('post')) {
            if(isset($request->contract))
            $request['contract'] = $this->storeFile($request->contract);
            if(isset($request->photo))
            $request['photo'] = $this->storeFile($request->photo);
            $school =  School::create($request->all());
            return  redirect('profile-school/'.$school->id);

        }
        return view('register_school');
    }

    public function schoolProfile($id)
    {
       $school =  School::findOrFail($id) ;
        return view("schhool_profile" , compact('school'));
    }
    public function registerStudent(Request $request)
    {
        if ($request->isMethod('post')) {
            if(isset($request->contract))
            $request['contract'] = $this->storeFile($request->contract);
            if(isset($request->photo))
            $request['photo'] = $this->storeFile($request->photo);
            Student::create($request->all());

            return redirect(route('home'));
        }
        return view('register_student');
    }
    public function home()
    {
        return view('home');
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
