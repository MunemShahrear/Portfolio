@extends('backend.layout.template')
@section('title')
    Dashboard
@endsection
@section('body-content')
<div class="container">
    <div class="content-container p-4 ">
      <h3 class=" text-center">Write Blog</h3><br>
      <form>
        <div class="form-group">
          <label for="blogTitle">Blog Title:</label>
          <input type="text" class="form-control" id="blogTitle" name="blogTitle" placeholder="Enter the blog title" required>
        </div>
        
        <div class="form-group">
          <label for="blogLink">Link to the Blog:</label>
          <input type="url" class="form-control" id="blogLink" name="blogLink" placeholder="Enter the blog URL" required>
        </div>

        <div class="form-group">
          <label for="blogThumbnail">Blog Thumbnail:</label>
          <input type="file" class="form-control-file" id="blogThumbnail" name="blogThumbnail" accept="image/*" required>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div><br>

  <style>
    /* Apply margin and padding to the content container */
    .content-container {
    
    
      background: #ffffff;
     
    }
  </style>
  <!-- Add Bootstrap JS and jQuery scripts (optional but may be required for certain features) -->
 

@endsection

@section('script')
    <script>

    </script>
@endsection