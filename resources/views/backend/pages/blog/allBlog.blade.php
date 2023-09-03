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
          <th>Published Date</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @php
      $blogs = App\Models\Blog::orderBy('created_at', 'desc')->get();
    
        $count=0;
     @endphp
        <!-- Table rows with data -->
        @foreach( $blogs as $blog)
        @php
     
        $count++;
        @endphp
        <tr>
          <td>{{ $count }}</td>
          <td><img src="{{ asset('uploads/'. $blog->blog_image) }}" alt="Blog Image" width="50"></td>
          <td> {{ $blog->blog_title }}</td>
          <td> {{ $blog->created_at }}</td>
          <td>
            <button class="btn btn-primary btn-sm">Edit</button>
            <button class="btn btn-danger btn-sm">Delete</button>
          </td>
        </tr>
        @endforeach
        
        <!-- Add more rows as needed -->
      </tbody>
    </table> </div>
  </div><br>


 

@endsection

@section('script')
    <script>

    </script>
@endsection