
@extends('layouts.app')

@section('content')
    <h1>Module Announcements</h1>

    @foreach ($moduleAnnouncements as $announcement)
        <div>
            <h3>{{ $announcement->title }}</h3>
            <p>{{ $announcement->content }}</p>
        </div>
    @endforeach
@endsection
