<!-- resources/views/student_requests.blade.php -->

@extends('layouts.app')

@section('content')
<style>

body {
  font-family: 'Arial', sans-serif;
  background-color: #f8f9fa;
  margin: 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
}

.announcement-container {
  border: 1px solid #ccc;
  background-color: #fff;
  padding: 20px;
  margin-bottom: 20px;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
  margin-bottom: 10px;
  color: #3498db;
}

p {
  color: #555;
}

.edit-button,
.delete-button {
  color: #fff;
  border: none;
  padding: 8px 12px;
  cursor: pointer;
  text-decoration: none;
  border-radius: 4px;
}

.edit-button {
  background-color: #2ecc71;
  margin-right: 5px;
}

.edit-button:hover {
  background-color: #27ae60;
}

.delete-button {
  background-color: #e74c3c;
}

.delete-button:hover {
  background-color: #c0392b;
}

</style>
    <h1>View Student Requests</h1>

    <h2>TPGroup Requests</h2>
    @foreach ($studentRequests as $tpGroupRequest)
    <div class="announcement-container">
            <p><strong>Request Type:</strong> TPGroup</p>
            <p><strong>Student ID:</strong> {{ $tpGroupRequest->student_id }}</p>
            <p><strong>Request Details:</strong> {{ $tpGroupRequest->details }}</p>
        </div>
    @endforeach

    <h2>Appointment Requests</h2>
    @foreach ($studentRequests1 as $appointmentRequest)
    <div class="announcement-container">
            <p><strong>Request Type:</strong> Appointment</p>
            <p><strong>Student ID:</strong> {{ $appointmentRequest->student_id }}</p>
            <p><strong>Professor concerned:</strong> {{ $appointmentRequest->teacher }}</p>
            <p><strong>Due to:</strong> {{ $appointmentRequest->jour }}</p>
            <p><strong>Time Slot:</strong> {{ $appointmentRequest->creneau }}</p>
            <p><strong>Request Details:</strong> {{ $appointmentRequest->details }}</p>
        </div>
    @endforeach

    <h2>Recommendation Requests</h2>
    @foreach ($studentRequests2 as $recommendationRequest)
    <div class="announcement-container">
            <p><strong>Request Type:</strong> Recommendation</p>
            <p><strong>Student ID:</strong> {{ $recommendationRequest->student_id }}</p>
            <p><strong>Professor concerned:</strong> {{ $recommendationRequest->teacher }}</p>
            <p><strong>Request Details:</strong> {{ $recommendationRequest->details }}</p>
        </div>
    @endforeach
@endsection
