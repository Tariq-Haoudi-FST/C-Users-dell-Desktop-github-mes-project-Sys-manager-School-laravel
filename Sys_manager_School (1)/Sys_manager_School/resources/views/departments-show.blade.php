@extends('layouts.app')

@section('content')
<style>

    .cont {
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        margin-top: 20px;
    }

    h1, h2 {
        color: #333;
    }

    .announcement {
        background-color: #f0f8ff;
        border: 1px solid #add8e6;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
    }

    .report-form {
        margin-top: 20px;
    }

    button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>
<div class="container">
    <div class="cont">
        <h1>Our departments:</h1>

        @foreach($departments as $announcement)
            <!-- Display announcements -->
            <div class="announcement">
                <h2>{{ $announcement->dept }}</h2>
            </div>
        @endforeach

    </div>
</div>
@endsection
