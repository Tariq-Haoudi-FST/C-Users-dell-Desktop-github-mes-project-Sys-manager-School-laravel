<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;
use App\Models\Department;
use App\Models\Announcement;


class GuestController extends Controller
{
    public function index()
    {
        return view('Guest');
    }
    public function showFiliereInfo()
    {
        $filieres = Filiere::all();


        return view('filieres-show', compact('filieres'));
    }
    public function viewDepartmentsInfo() {

        $departments = Department::all();

        return view('departments-show', compact('departments'));
    }
    public function viewAnnouncementsInfo() {

        $announcements = Announcement::all();

        return view('announcements-show', compact('announcements'));
    }

}

