<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Announcement;
use App\Models\Appointment;
use App\Models\Recommendation;
use App\Models\TPGroup;
use App\Models\Professor;
class ChefFController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $cheff = Professor::where('id', $id)->first();
        return view('ChefF', compact('cheff'));    }


    public function manageAnnouncements() {
        $FillAnnouncements = Announcement::all();
        return view('Fannouncements', compact('FillAnnouncements'));
    }

    public function respondToStudentRequests() {
        $studentRequests = TPGroup::all();
        $studentRequests1 = Appointment::all();
        $studentRequests2 = Recommendation::all();
        return view('student_request', compact('studentRequests', 'studentRequests1','studentRequests2'));
    }
}


