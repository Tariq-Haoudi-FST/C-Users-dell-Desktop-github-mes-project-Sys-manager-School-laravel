<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Appointments</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <!-- Blade Template -->
    @extends('layouts.app')

    @section('content')
        

        <h1> &nbsp;&nbsp;&nbsp; Set an appointement : </h1>

        <!-- HTML Form -->
        <div class="container">
        <form action="{{url('add_appoint.php')}}" method="post">
            @csrf <!-- CSRF token for Laravel -->

            <label for="teacher">Teacher's Name:</label>
            <input type="text" id="teacher" name="teacher" required>

            <br>
            <br>

            <label for="day">Select Day:</label>
    <select id="day" name="day">
        <option value="monday">Monday</option>
        <option value="tuesday">Tuesday</option>
        <option value="wednesday">Wednesday</option>
        <option value="thursday">Thursday</option>
        <option value="friday">Friday</option>
    </select>

    <br>
    <br>
    <input type="hidden" id="user" name="user" value="{{ auth()->user()->id }}">

    <label for="timeSlot">Select Time Slot:</label>
    <select id="timeSlot" name="timeSlot">
        <option value="9:00-10:30">9:00 - 10:30</option>
        <option value="10:45-12:15">10:45 - 12:15</option>
        <option value="13:00-14:30">13:00 - 14:30</option>
        <option value="14:45-16:15">14:45 - 16:15</option>
        <option value="16:30-18:00">16:30 - 18:00</option>
    </select>

            <br>
    <br>
            <label for="reason">Details:</label>
            <textarea id="reason" name="reason" rows="4" required></textarea>
            <br>

            <button type="submit">Submit</button>
        </form></div>
    @endsection

</body>
</html>
