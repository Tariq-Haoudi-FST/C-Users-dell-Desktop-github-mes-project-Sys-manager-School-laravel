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

    @extends('layouts.app')

    @section('content')
        

        <h1> &nbsp;&nbsp;&nbsp; Request a recommandation letter</h1>

        <div class="container">
        <form method="post" action="{{url('add_recom.php')}}">
            @csrf 

            <label for="teacher">Teacher's Name:</label>
            <input type="text" id="teacher" name="teacher" required>

            <br>
            <input type="hidden" id="user" name="user" value="{{ auth()->user()->id }}">


            <label for="module">Module:</label>
            <input type="text" id="module" name="module" required>

            <br>
            <label for="reason">Details:</label>
            <textarea id="reason" name="reason" rows="4" required></textarea>
            <br>

            <button type="submit">Submit</button>
        </form></div>
    @endsection

</body>
</html>
