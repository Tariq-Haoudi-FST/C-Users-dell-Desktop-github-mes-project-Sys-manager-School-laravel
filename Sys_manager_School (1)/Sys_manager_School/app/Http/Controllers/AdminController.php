<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use App\Models\Professor;
use App\Models\Filiere;
use App\Models\StudentClass;

class AdminController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $admin = Professor::where('id', $id)->first();
        return view('admin', compact('admin'));    
    }
 
    public function EditDept() {
        $dept = Department::all();
        return view('department', compact('dept'));
    }

    public function EditProfessor() {
        $professor = Professor::all();
        return view('modify_professor', compact('professor'));
    }

    public function EditStudent() {

        $student = StudentClass::all();

        return view('modify_student', compact('student'));
    }

    public function EditFiliere() {

        $filieres = Filiere::all();

        return view('filiere_content', compact('filieres'));
    }

}



