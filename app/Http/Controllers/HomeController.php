<?php

namespace App\Http\Controllers;

use App\School;
use App\Student;
use App\StudentSchool;
use App\Bus;
use App\Interview;
use App\Notification;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Hash , Redirect;
class HomeController extends Controller
{
    
    public function __construct()
    {
        
       
    }
    public function notification()
    {
        if(session('school_id') != null)
        $datas['notifications'] = Notification::where('user_id' , session('school_id')) ->where('is_read',0)
        ->where('table' , 'schools')->count() ; 
        else
        $datas['notifications'] =  Notification::where('user_id' , session('student_id'))->where('is_read',0)                                        
        ->where('table' , 'students')->count();
       
        return response()->json($datas);
        
    }
    public function get_notification()
    {
        
        if(session('school_id') != null)
        {
            $datas['notifications'] = Notification::where('user_id' , session('school_id'))
                                                    ->where('is_read',0)
                                                    ->where('table' , 'schools')->count() ; 

                                                    Notification::where('user_id' , session('school_id'))
                                                    ->where('is_read',0)
                                                    ->where('table' , 'schools')->update(['is_read' => 1]);
            return view('school_notification' , $datas);
        }
       
        else
        {
            $datas['notifications'] =  Notification::where('user_id' , session('student_id'))
                                                    ->where('is_read',0)                                        
                                                    ->where('table' , 'students')->count();
                                                    Notification::where('user_id' , session('student_id'))
                                                    ->where('is_read',0)                                        
                                                    ->where('table' , 'students')->update(['is_read' => 1]);
            $datas['student_id'] = session('student_id');
            return view('student_notification' , $datas);
        }
    }
    public function students_registered()
    {
        if(session('school_id') != null)
        {
            $students = StudentSchool::where('school_id' , session('school_id'))->get();
            return view('students_registered' , compact('students'));
        }
    }
    public function school_respones($student_id)
    {
        if(session('student_id') != null)
        {
            $schools = StudentSchool::where('student_id' , session('student_id'))->get();
            $interviews  = Interview::where('student_id' ,$student_id)
                                    ->get();
            return view('school_respones' , compact('schools' , 'interviews'));
        }
    }
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
            session(['school_photo' => $school->photo]);
            $request->session()->forget('student_id');
            return  redirect('profile-school/'.$school->id);

        }
        return view('register_school');
    }

    public function registerStudent(Request $request)
    {
        if ($request->isMethod('post')) {
            if(isset($request->contract))
            $request['contract'] = $this->storeFile($request->contract);
            if(isset($request->photo2)){
               
                $request['photo'] = $this->storeFile($request->photo2); 
            }
                
            if(isset($request->medical_information_images2))
            {
                $request['medical_information_image'] = $this->storeFile($request->medical_information_images2);
            }

            if(isset($request->historicals))
            {
                $request['historical'] = $this->storeFile($request->historicals);
            }

            if(isset($request->statement_enrolments))
            {
                $request['Statement_enrolment'] = $this->storeFile($request->statement_enrolments);
            }

           if(isset($request->Transfers))
            {
                $request['Transfer'] = $this->storeFile($request->Transfers);
            }

            if(isset($request->transfers))
            {
                $request['transfers'] = $this->storeFile($request->transfers);
            }

            if(isset($request->Printouts))
            {
                $request['Printout'] = $this->storeFile($request->Printouts);
            }

            ///////////////////
            if(isset($request->Enrolments))
            {
                $request['Enrolment'] = $this->storeFile($request->Enrolments);
            }

            if(isset($request->degrees))
            {
                $request['degree'] = $this->storeFile($request->degrees);
            }

            if(isset($request->entrances))
            {
                $request['entrance'] = $this->storeFile($request->entrances);
            }


            //////////////
            if(isset($request->passports))
            {
                $request['passport'] = $this->storeFile($request->passports);
            }

            if(isset($request->ministrys))
            {
                $request['ministry'] = $this->storeFile($request->ministrys);
            }

            if(isset($request->guardian_passports))
            {
                $request['guardian_passport'] = $this->storeFile($request->guardian_passports);
            }

            if(isset($request->objection_letters))
            {
                $request['objection_letter'] = $this->storeFile($request->objection_letters);
            }




            // return implode(' ' , $request->medical_information) ;
            if(is_array($request->medical_information))
            $request['medical_information']  = implode(' ' , $request->medical_information);
            $request['password'] =bcrypt($request->password);
            $student = Student::create($request->all());
            session(['student_id' => $student->id]);
            session(['student_photo' => $student->photo]);
            // return $student;
            $request->session()->forget('school_id');
            return  redirect('profile-student/'.$student->id);
        }
        return view('register_student');
    }

    public function LoginSchool(Request $request)
    {
        if($request->isMethod('post'))
        {
            $request->session()->forget('student_id');
            $request->session()->forget('school_id');

            // return session('school_id');
            $school = School::where('email', $request->email)->first();
            if (School::where('email', $request->email)->exists()
            && Hash::check($request->password , $school->password)){
                session(['school_id' => $school->id]);
                session(['school_photo' => $school->photo]);
                return  redirect('profile-school/'.$school->id);
            }
            else{
                $student = Student::where('email', $request->email)->first();
                if (Student::where('email', $request->email)->exists()
                && Hash::check($request->password , $student->password)){
                    session(['student_id' => $student->id]);
                    session(['student_photo' => $student->photo]);
                    return  redirect('profile-student/'.$student->id);
                }
            }
            
            // $request->session()->flash('login' , "email or password is incorrect");
            return Redirect::back()->withInput()
                                   ->withErrors('email or password is incorrect');
        }
        
        $schools = School::get()->take(3);
        return view('homenew' , compact('schools'));
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
        $regisered = 0 ;
        if(session('student_id') != null){
            
            $student = StudentSchool::where('student_id', session('student_id'))->where('school_id' , $id)->first();
            if($student){
              $regisered = 1;
                
            }
           
        }
        return view("schhool_profile" , compact('school' , 'id' , 'regisered'));
    }
    public function studentProfile($id)
    {
        $student =  Student::findOrFail($id) ;
        $schoolHaveProfile = 0 ;
        $school = StudentSchool::where('school_id', session('school_id'))
                                ->where('student_id' , $id)->first();
            if($school){
                if($school->status == 0 )
                $schoolHaveProfile = 1 ;
                else{
                    $schoolHaveProfile = 2 ;
                }
                
            }
        return view("student_profile" , compact('student' , 'id' , 'schoolHaveProfile'));
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
        session(['school_photo' => $school->photo]);
        return  redirect('profile-school/'.$school->id);
    }

    public function editStudent($id)
    {
        $student =  Student::findOrFail($id) ;
        return view("edit-student" , compact('student' , 'id'));
    }
    public function updateStudent( $id , Request $request)
    {
        $requestArray = $request->all();
        // return $requestArray ;
        if(isset($request->contract_file))
        $requestArray['contract'] = $this->storeFile($request->contract_file);
        if(isset($request->photo_file))
        {
            $requestArray['photo'] = $this->storeFile($request->photo_file);
        }
       
        if(isset($request->medical_information_image2))
        {
            // return "test";
            $requestArray['medical_information_image'] = $this->storeFile($request->medical_information_image2);
            // return $request['medical_information_image'] ;
        }
        
        if(isset($request->historicals))
        {
            $requestArray['historical'] = $this->storeFile($request->historicals);
        }
        if(isset($request->activities_images))
        {
            $requestArray['activities_image'] = $this->storeFile($request->activities_images);
        }
        if(isset($request->statement_enrolments))
        {
            $requestArray['Statement_enrolment'] = $this->storeFile($request->statement_enrolments);
        }

       if(isset($request->Transfers))
        {
            $requestArray['Transfer'] = $this->storeFile($request->Transfers);
        }

        if(isset($request->transfers))
        {
            $requestArray['transfers'] = $this->storeFile($request->transfers);
        }

        if(isset($request->Printouts))
        {
            $requestArray['Printout'] = $this->storeFile($request->Printouts);
        }

        ///////////////////
        if(isset($request->Enrolments))
        {
            $requestArray['Enrolment'] = $this->storeFile($request->Enrolments);
        }

        if(isset($request->degrees))
        {
            $requestArray['degree'] = $this->storeFile($request->degrees);
        }

        if(isset($request->entrances))
        {
            $requestArray['entrance'] = $this->storeFile($request->entrances);
        }


        //////////////
        if(isset($request->passports))
        {
            $requestArray['passport'] = $this->storeFile($request->passports);
            // return $requestArray['passport'] ;
        }
        
        if(isset($request->ministrys))
        {
            $requestArray['ministry'] = $this->storeFile($request->ministrys);
        }

        if(isset($request->guardian_passports))
        {
            $requestArray['guardian_passport'] = $this->storeFile($request->guardian_passports);
        }
        if(isset($request->birth_certificates))
        {
            $requestArray['birth_certificate'] = $this->storeFile($request->birth_certificates);
        }
        if(isset($request->objection_letters))
        {
            $requestArray['objection_letter'] = $this->storeFile($request->objection_letters);
        }
        if(isset($requestArray['password']) && $requestArray['password'] != ""){
            $requestArray['password'] =  bcrypt($requestArray['password']);
        }else{
            unset($requestArray['password']);
        }
        $student =  Student::findOrFail($id);
        $student->update($requestArray) ;
        session(['student_photo' => $student->photo]);
        // return $student ;
        // return back();
        return  redirect('profile-student/'.$student->id);
    }

    public function home()
    {
        $schools = School::get()->take(3);
        return view('homenew' , compact('schools'));
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
        $destinationPath = 'uploads/';

        // return $destinationPath;

        if (!is_dir($destinationPath)) {
            mkdir($destinationPath);
        }
        $photo->move($destinationPath, $fileName);
        return 'uploads/' . $fileName;

    }
    public function registerInSchhool($school_id)
    {
        if(session('student_id') != null)
        StudentSchool::create([
            'student_id' => session('student_id'),
            'school_id'  => $school_id
        ]);
        Notification::create([
            'text' => "register in new school",
            'table'=> "schools",
            'type' => "registering",
            'is_read'=>0 ,
             "user_id" =>$school_id,
        ]);
        session(['regisered' => 1]);
        session()->flash('register' , "send profile successfully");
        return redirect()->back();
        
    }

    public function addBus(Request $request)
    {
        if($request->isMethod('post'))
        {
            Bus::create($request->all());
            session()->flash('bus' , "add new bus seccussfully");
            return  redirect()->back();
        }
        return view('add_bus');
    }

    public function updateRegisterStudent(Request $request , $student_id , $status = 0)
    {
        $register = StudentSchool::where('school_id', session('school_id') )
                                 ->where('student_id',  $student_id)->first();
        if($status != 0){
            $register->status = $status ; 
        }
        
        $register->comment = $request->comment;
        $register->save();     
        return redirect()->back();
        
    }
    public function interview(Request $request  , $student_id)
    {
        if($request->isMethod('post')){
            $request['school_id'] = session('school_id') ;
            $request['student_id'] = $student_id ;
            Interview::create($request->all());
            session()->flash('interview' , "set interview seccussfully");
            return redirect()->back();
            
        }
        return view('interview' , compact('student_id'));
    }

    public function logout()
    {
        session()->forget('student_id');
            session()->forget('school_id');
            session()->forget('school_photo');
            session()->forget('student_photo');
           
            return redirect()->route('home');
            
    }
}
