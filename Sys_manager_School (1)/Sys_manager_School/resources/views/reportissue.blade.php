<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your TP Groups</title>

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
        

        <h1> &nbsp;&nbsp;&nbsp; Report an Issue : </h1>

        <div class="container">
        <form method="post" action="{{url('add_report.php')}}">
            @csrf 
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>
            <input type="hidden" id="user" name="user" value="{{ auth()->user()->id }}">

            <br>
    <br>

            <label for="material">Material:</label>
            <input type="text" id="material" name="material" required>
            <br>
            <label for="reason">Details:</label>
            <textarea id="reason" name="reason" rows="4" required></textarea>
            <br>

            <button type="submit">Submit</button>
        </form></div>
    @endsection

</body>
</html>
