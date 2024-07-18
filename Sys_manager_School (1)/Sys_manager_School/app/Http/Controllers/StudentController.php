<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Timetable;
use App\Models\Announcement;
use App\Models\Recommendation;
use App\Models\Appointment;
use App\Models\Absence;
use App\Models\TPGroup;
use App\Models\StudentClass;

class StudentController extends Controller
{

    public function index()
    {
        $id = Auth::user()->id;
        $student = StudentClass::where('id', $id)->first();
    
        return view('student', compact('student'));
    }


    public function viewTimetable() {
        
        $id = Auth::user()->id;
        $student = StudentClass::where('id', $id)->first();
        $timetable = Timetable::where('filiere', $student->filiere)->get();
        return view('timetable', compact('timetable'));
    }

    public function viewAnnouncements() {
        $student = Auth::user();
        $announcements = Announcement::all();
        return view('announcements', compact('announcements'));
    }

    public function requestRecommendationLetter() {
        $student = Auth::user();
        $recommendation = new Recommendation([
            'student_id' => $student->id,
        ]);
        $recommendation->save();

        return redirect()->back()->with('success', 'Recommendation letter requested successfully.');
    }

    public function requestAppointment() {
        $student = Auth::user();
        $appointment = new Appointment([
            'student_id' => $student->id,
        ]);
        $appointment->save();

        return redirect()->back()->with('success', 'Appointment requested successfully.');
    }

    public function justifyAbsence() {
        $student = Auth::user();
        $absence = new Absence([
            'student_id' => $student->id,
        ]);
        $absence->save();

        return redirect()->back()->with('success', 'Absence justified successfully.');
    }

    public function changeTroup() {
        $student = Auth::user();
        $tpGroupChange = new TPGroup([
            'student_id' => $student->id,
        ]);
        $tpGroupChange->save();

        return redirect()->back()->with('success', 'TP group change requested successfully.');
    }

    public function reportIssue() {

        return view('reportissue');
    }

    public function viewRecommendations() {
        $student = Auth::user();
        $recommendations = Recommendation::where('student_id', $student->id)->get();
        return view('recommendations', compact('recommendations'));
    }

    public function viewAppointments() {
        $student = Auth::user();
        $appointments = Appointment::where('student_id', $student->id)->get();
        return view('appointments', compact('appointments'));
    }

    public function viewAbsences() {
        $student = Auth::user();
        $absences = Absence::where('student_id', $student->id)->get();
        return view('absences', compact('absences'));
    }

    public function viewTPGroups() {
        $student = Auth::user();
        $tpGroups = TPGroup::where('student_id', $student->id)->get();
        return view('tp_groups', compact('tpGroups'));
    }
}