
@extends('layouts.app')

@section('content')
    <h1>Manage Department Announcements</h1>

    @foreach ($departmentAnnouncements as $announcement)
        <div>
            <h3>{{ $announcement->title }}</h3>
            <p>{{ $announcement->content }}</p>
        </div>
    @endforeach
@endsection
