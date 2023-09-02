@extends('backend.layout.template')
@section('title')
    Dashboard
@endsection
@section('body-content')
<div class="container card">
<div class="content-container p-4 ">
      <h3 class=" text-center">All Blog's</h3><br>
    <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search...">

    <!-- Table -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th>SN</th>
          <th>Thumbnail</th>
          <th>Blog Title</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- Table rows with data -->
        <tr>
          <td>1</td>
          <td><img src="image1.jpg" alt="Blog Image" width="50"></td>
          <td>Blog Title 1</td>
          <td>
            <button class="btn btn-primary btn-sm">Edit</button>
            <button class="btn btn-danger btn-sm">Delete</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td><img src="image2.jpg" alt="Blog Image" width="50"></td>
          <td>Blog Title 2</td>
          <td>
            <button class="btn btn-primary btn-sm">Edit</button>
            <button class="btn btn-danger btn-sm">Delete</button>
          </td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table> </div>
  </div><br>


 

@endsection

@section('script')
    <script>

    </script>
@endsection