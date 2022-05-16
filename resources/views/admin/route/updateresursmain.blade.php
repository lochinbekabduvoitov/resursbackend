<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Resurs Admin</title>
    <!-- START CSS -->
    @include('admin.admincss')
    <!-- END CSS -->
    
    <x-app-layout>
    
    </x-app-layout>
  </head>
  <body>
   
    
    <div class="container-scroller">
   
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
     
      <!-- partial -->
      
      <div class="container-fluid page-body-wrapper">
          
        <!-- partial:partials/_sidebar.html -->
       @include('admin.adminnavbar')
       
        <!-- partial -->
        <div class="main-panel">
       <div class="content-wrapper">           
            
           
            
       <form action="{{url('/updatedresursmain', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <input style="color:blue" type="text" name="title" placeholder="Resurs title"value="{{$data->title}}" required >
      </div>
      <div class="form-group">
        <input style="color:blue"  type="text"  name="description" placeholder="Description" value="{{$data->description}}" required >
      </div>
      <div class="form-group">
            <input type="text" name="link" placeholder="Resurs Link" value="{{$data->link}}" required>
        </div>
      <div class="form-group">
      <img  height="200" width="200" src="/ResursMainimages/{{$data->image}}" alt="">
      </div>
      <div class="form-group">
        <input  type="file" name="image"  required >
      </div>
      <div class="form-group">
        <input class="btn btn-outline-primary" type="submit" value="Save">
      </div>
      </form>
          </div>
        
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">© 2022 | JDPI — Raqamli ta’lim texnologiyalari markazi</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        
      </div>
      
    </div>
    
    <!-- START SCRIPT -->
    @include('admin.adminscript')
    <!-- END SCRIPT -->

  </body>
</html>