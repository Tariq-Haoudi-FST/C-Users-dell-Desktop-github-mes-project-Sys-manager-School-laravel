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
  display: flex;
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
/* Modal Styles */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px; /* Place modal 60px from the top */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto; /* 5% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* Form Styles */
form {
  margin-top: 20px;
}

label {
  display: block;
  margin-bottom: 8px;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 8px;
  margin-bottom: 16px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Save Changes Button */
.edit-button {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

.edit-button:hover {
  background-color: #0056b3;
}

</style>
<div style="text-align: center; padding: 20px;">
    <form method="post" action="{{url('add_announ.php')}}" style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h2>Add Announcement</h2>

        @csrf 
        <input type="hidden" id="user" name="user" value="{{ auth()->user()->id }}">

        <label for="title" style="display: block; text-align:left; margin-bottom: 8px;">Title:</label>
        <input type="text" id="title" name="title" required style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">

        <label for="details" style="display: block;text-align:left; margin-bottom: 8px;">Description:</label>
        <textarea id="details" name="details" rows="4" required style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;"></textarea>

        <button type="submit" class="edit-button" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='#007bff'">Submit</button>
    </form>
</div>


@foreach($FillAnnouncements as $announcement)
  <div class="announcement-container">
    <div>
      <h2>{{ $announcement->title }}</h2>
      <p>{{ $announcement->content }}</p>
    </div>
    
    <div>
    <button class="edit-button" onclick="openModal('{{ $announcement->id }}', '{{ $announcement->title }}', '{{ $announcement->content }}')">Edit</button>
      <form action="{{url('delete_announ.php')}}" method="POST" class="delete-form">
        @csrf
        <input type="hidden" name="id" value="{{ $announcement->id }}">

        <button type="submit" class="delete-button">Delete</button>
      </form>
    </div>
  </div>
  <!-- Modal -->
<div id="editModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Edit Announcement</h2>

    <form id="editForm" method="post" action="{{ url('edit_announ.php') }}">
      @csrf
      <input type="hidden" id="editId" name="id" value="">

      <label for="title">Title:</label>
      <input type="text" id="editTitle" name="title" required>

      <label for="editDetails">Description:</label>
      <textarea id="editDetails" name="details" rows="4" required></textarea>

      <button type="submit" class="edit-button">Save Changes</button>
    </form>
  </div>
</div>

<script>
var modal = document.getElementById('editModal');

var span = document.getElementsByClassName('close')[0];

function openModal(id, title, details) {
  document.getElementById('editId').value = id;
  document.getElementById('editTitle').value = title;
  document.getElementById('editDetails').value = details;
  modal.style.display = 'block';
}

span.onclick = function () {
  modal.style.display = 'none';
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
};
</script>

@endforeach
@endsection
