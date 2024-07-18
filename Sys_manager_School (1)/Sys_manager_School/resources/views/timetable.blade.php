@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Image</title>
    <style>
        img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <h1>Student's timetable</h1>

    @foreach ($timetable as $student)
        @if ($student['image'])
            <img src="{{ asset($student['image']) }}" alt="Timetable Image">
        @else
            No Image
        @endif
        @endforeach

</body>
</html>

@endsection
