<!DOCTYPE html>
<html lang="en">
  <head>
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

       <form action="{{url('/uploadresurs')}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="form-group">
          <!-- <label for="">Name</label> -->
          <input style="color:blue" type="text" name="title" placeholder="Resurs title" required >
        </div>
        <div class="form-group">
          <!-- <label for="">Description</label> -->
          <input style="color:blue"  type="text"  name="description" placeholder="Description" required >
        </div>
        <div class="form-group">
            <input type="text" name="link" placeholder="Resurs Link" required>
        </div>
        <div class="form-group">
          <!-- <label for="">Image</label> -->
          <input  type="file" name="image"  required >
        </div>
        <div class="form-group">
          <input class="btn btn-success"   type="submit" value="Save">
        </div>
        </form>




        <table class="table table-bordered">
          <tr class="text-center   table-primary"> 
            <th>T/r</th>
              <th> Resurs title </th>
              <th> Description </th>
              <th>Link</th>
              <th> Image  </th>
              <th > Action </th>
          </tr>

        @foreach($data as $data)
        <tr align="center">
           <th>{{$loop->index+1}}</th>
           <td>{{$data->title}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->link}}</td>
            <td><img height="200" width="200" src="/Resursimages/{{$data->image}}" > </td>        
            <td>  <a class="btn btn-danger" href="{{ url('/deleteresurs', $data->id) }}"><i class="bi bi-trash"></i></a>
            <a  class="btn btn-primary" href="{{ url('/updateresurs', $data->id) }}"><i class="bi bi-pencil-square"></i></a>
            </td>            
        </tr>
        @endforeach
        </table>
            




            
            
           
            
         
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