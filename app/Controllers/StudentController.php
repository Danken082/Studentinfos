<?php

namespace App\Controllers;

use App\Controllers\BaseController;
 use \App\Models\StudentModel2;
class StudentController extends BaseController
{
    private $student;
    private $students;
    public function __construct(){
        $this->student = new \App\Models\StudentModel();
        $this->students = new \App\Models\StudentModel2();
    }
    public function index()
    {
        //
    }
    public function save()
    {
        // $id = new $_POST['id'];
        $data =[
        'StudName' => $this->request->getVar('StudName'),
        'StudGender' => $this->request->getVar('StudGender'),
        'StudCourse' => $this->request->getVar('StudCourse'),
        'StudSection' => $this->request->getVar('StudSection'),
        'StudYear' => $this->request->getVar('StudYear'),
        ];
        if($_POST['id']!= null)
        {
            // var_dump($data);
            $this->student->set($data)->where('id', $_POST['id'])->update();
        }
        else{
        $this->student->save($data);
    }

        return redirect()->to('/studs');
    }
    
     public function student()
     {
    
      
         $data= ['student' =>$this->student->findAll(),
         'main' => $this->students->findAll(),];
        return view('students', $data);
        
     }
     public function edit($id =null){
        $data =['student' =>$this->student->findAll(),
        'studs' =>$this->student->where('id', $id)->first(),
        'main' =>$this->students->findAll(),
     ];
     return view('students', $data);
     }
     public function delete($id)
     {
        $this->student->delete($id);
        return redirect()->to('/studs');
     }
}
