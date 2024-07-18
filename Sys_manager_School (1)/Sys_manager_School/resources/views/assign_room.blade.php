@extends('layouts.app')

@section('content')
    <h1>Assign Room to Department</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Your assign room to department form goes here -->
    <form method="post" action="{{ route('post.assignRoomToDepartment') }}">
        @csrf

        <label for="room_id">Select Room:</label>
        <select name="room_id" id="room_id">
            @foreach($rooms as $room)
                <option value="{{ $room->id }}">{{ $room->name }}</option>
            @endforeach
        </select>

        <label for="department_id">Select Department:</label>
        <select name="department_id" id="department_id">
            @foreach($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>

        <button type="submit">Assign Room to Department</button>
    </form>
@endsection
