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
    <form method="post" action="{{url('add_dept.php')}}" style="background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h2>Add Department</h2>

        @csrf 

        <label for="dept" style="display: block; text-align:left; margin-bottom: 8px;">Department:</label>
        <input type="text" id="dept" name="dept" required style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px;">

        <button type="submit" class="edit-button" style="background-color: #007bff; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;" onmouseover="this.style.backgroundColor='#0056b3'" onmouseout="this.style.backgroundColor='#007bff'">Submit</button>
    </form>
</div>

@foreach($dept as $announcement)
  <div class="announcement-container">
    <div>
      <h2>{{ $announcement->dept }}</h2>
    </div>
    
    <div>
      <button class="edit-button" onclick="openModal('{{ $announcement->id }}', '{{ $announcement->dept }}')">Edit</button>
      <form action="{{url('delete_dept.php')}}" method="POST" class="delete-form">
        @csrf
        <input type="hidden" name="id" value="{{ $announcement->id }}">
        <button type="submit" class="delete-button">Delete</button>
      </form>
    </div>
  </div>

  <div id="editModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Edit Department</h2>

      <form id="editForm" method="post" action="{{ url('edit_dept.php') }}">
        @csrf
        <input type="hidden" id="editId" name="id" value="">

        <label for="title">Department:</label>
        <input type="text" id="editDept" name="title" required>

        <button type="submit" class="edit-button">Save Changes</button>
      </form>
    </div>
  </div>
@endforeach

<script>
  var modal = document.getElementById('editModal');

  var span = document.getElementsByClassName('close')[0];

  function openModal(id, dept) {
    document.getElementById('editId').value = id;
    document.getElementById('editDept').value = dept; 
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

@endsection
