<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ChefFController;
use App\Http\Controllers\ChefMController;
use App\Http\Controllers\ChefDController;
use App\Http\Controllers\GuestController;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

Route::middleware(['auth'])->group(function () {


    Route::middleware(['auth', 'isAdmin'])->group(function () {
        
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/admin/manage-student', [AdminController::class, 'EditStudent'])->name('admin.enrollNewStudentClass');
        Route::get('/admin/manage-filiere', [AdminController::class, 'EditFiliere'])->name('admin.addModifyFiliereContent');
        Route::get('/admin/manage-Department', [AdminController::class, 'EditDept'])->name('admin.manageRoomSchedules');
        Route::get('/admin/manage-professor', [AdminController::class, 'EditProfessor'])->name('admin.modifyDepartmentProfessor');


    });
    
    Route::middleware(['auth', 'isStudent'])->group(function () {
        Route::get('/student', [StudentController::class, 'index'])->name('student.dashboard');

    Route::get('/student/timetable', [StudentController::class, 'viewTimetable']);
    Route::get('/student/announcements', [StudentController::class, 'viewAnnouncements']);
    Route::get('/student/recommendations', [StudentController::class, 'viewRecommendations']);
    Route::get('/student/appointments', [StudentController::class, 'viewAppointments']);
    Route::get('/student/absences', [StudentController::class, 'viewAbsences']);
    Route::get('/student/tp_groups', [StudentController::class, 'viewTPGroups']);
    Route::get('/student/report-issue', [StudentController::class, 'reportIssue']);


    Route::post('/student/request-recommendation', [StudentController::class, 'requestRecommendationLetter']);
    Route::post('/student/request-appointment', [StudentController::class, 'requestAppointment']);
    Route::post('/student/justify-absence', [StudentController::class, 'justifyAbsence']);
    Route::post('/student/change-tp-group', [StudentController::class, 'changeTroup']);
});

    Route::middleware(['auth', 'isChefF'])->group(function () {
        Route::get('/chefF', [ChefFController::class, 'index'])->name('chefF.dashboard');
        Route::get('/Fannouncements', [ChefFController::class, 'manageAnnouncements']);
        Route::get('/respond-to-student-requests', [ChefFController::class, 'respondToStudentRequests']);
    
    });
    
    Route::middleware(['auth', 'isChefM'])->group(function () {
        Route::get('/chefM', [ChefMController::class, 'index'])->name('chefM.dashboard');
    });
    
    Route::middleware(['auth', 'isChefD'])->group(function () {
        Route::get('/chefD', [ChefDController::class, 'index'])->name('chefD.dashboard');
        Route::get('/manage-department-schedule', [ChefDController::class, 'manageDepartmentSchedule']);

        Route::get('/manage-department-announcements', [ChefDController::class, 'manageAnnouncements']);
    
    });
    
    Route::middleware(['auth', 'isGuest'])->group(function () {
        Route::get('/show-filiere-info', [GuestController::class, 'showFiliereInfo']);
        Route::get('/view-departments-info', [GuestController::class, 'viewDepartmentsInfo']);
        Route::get('/view-announcements-info', [GuestController::class, 'viewAnnouncementsInfo']);
        Route::get('/guest', [GuestController::class, 'index'])->name('guest.dashboard');
    });
        
});


