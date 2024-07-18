@extends('layouts.app')

@section('content')
<div style="text-align: center; padding: 20px;">
<h1>Add TimeTable</h1>
    <form method="post" action="{{url('add_time.php')}}" enctype="multipart/form-data" style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        @csrf
        <input type="hidden" id="user" name="user" value="{{ auth()->user()->id }}">

        <label for="fill" style="display: block; text-align:left; margin-bottom: 8px;">Filiere:</label>
        <input type="text" id="fill" name="fill" required style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">

        <label for="dept" style="display: block;text-align:left; margin-bottom: 8px;">Departeement:</label>
        <input type="text" id="dept" name="dept" required style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">
<br>
        <label for="certificates" style="display: block; text-align:left;">Upload it:</label>
    <input type="file" id="certificates" name="certificates[]" accept=".pdf, .jpg, .jpeg, .png" multiple required>


        <button type="submit" class="edit-button" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='#007bff'">Submit</button>
    </form>
</div>

@endsection
