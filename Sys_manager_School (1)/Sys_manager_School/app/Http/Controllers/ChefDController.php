<?php
namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use App\Models\Professor;

class ChefDController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $chefd = Professor::where('id', $id)->first();
        return view('ChefD', compact('chefd'));

    }
public function manageAnnouncements() {
    $FillAnnouncements = Announcement::all();
    return view('Fannouncements', compact('FillAnnouncements'));
}
    public function manageDepartmentSchedule() {
        return view('department_schedule');
    }

    public function manageDepartmentAnnouncements() {
        $departmentAnnouncements = Announcement::all();
        return view('department_announcements', compact('departmentAnnouncements'));
    }

}
