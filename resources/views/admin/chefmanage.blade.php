
<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')
  </head>
  <body>

    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.navbar')
      <!-- partial -->

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.topnav')


        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- form starts -->
            <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data" class="form-horizontal align-items-center" style="width:40%" >

                @csrf
                <fieldset>

                  <!-- validation error message start-->
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <!-- validation error message end -->
                <!-- Form Name -->
                <legend>New Chef to Add</legend>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="product_id">Chef Name</label>  
                <div class="col-md-12">
                <input style="color:white" id="product_id" name="chef_name" placeholder="Enter Name" class="form-control input-md" type="text" >
                    
                </div>
                </div>

                <!-- price input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">Speciality in Food</label>  
                <div class="col-md-12">
                <input style="color:white" id="product_name" name="chef_speciality" placeholder="Enter Price" class="form-control input-md" type="text" >
                    
                </div>
                </div>

                <!-- Description input-->
                <div class="form-group">
                <label class="col-md-4 control-label" for="product_name_fr">Country From</label>  
                <div class="col-md-12">
                <textarea style="color:white" class="form-control" id="product_name_fr" name="chef_country" ></textarea>
                    
                </div>
                </div>

                
                <!-- image button --> 
                <div class="form-group">
                <div class="col-md-8">
                <input id="filebutton" name="chef_image" class="input-file" type="file">
                </div>
                </div>


                <!-- Button -->
                <div class="form-group">
                <div class="col-md-8">
                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Add Chef</button>
                </div>
                </div>

                </fieldset>
            </form>
            <!-- form ends -->

            <!-- Table starts -->
            <div class="table-responsive mt-3">
            <div class="container-fluid"> 
              <div class="row">
                  <div class="col-sm-6 justify-content-start">
                    <h2>Chef List</h2>
                  </div>
              </div>
            </div>
            
              
              
              {!! $deta->links() !!} 
              
              
              <table class="table table-hover table-striped table-bordered table-dark table-responsive-sm">
                        <thead>
                            <tr align="center">
                            <th style="font-weight: bold; font-size: 100%;" scope="col">SL No.</th>
                            <th style="font-weight: bold; font-size: 100%;" scope="col">Chef Name</th>
                            <th style="font-weight: bold; font-size: 100%;" scope="col">Chef Speciality</th>
                            <th style="font-weight: bold; font-size: 100%;" scope="col">Chef Country</th>
                            <th style="font-weight: bold; font-size: 100%;" scope="col">Chef Image</th>
                            <th style="font-weight: bold; font-size: 100%;" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($deta as $data)
                            <tr align="center">

                            <td>1</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->speciality}}</td>
                            <td>{{$data->country}}</td>
                            <td><img src="/chef_images/{{$data->image}}" alt=""></td>
                            <td>
                              <a type="button" class="btn btn-info btn-sm" href="{{url('/editchef', $data->id)}}" ><i class="fa fa-edit"></i> Edit</a>
                              <a type="button" class="btn btn-danger btn-sm" href="{{url('/deletechef', $data->id)}}" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i>Delete</a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
              </table>
              <!-- Table Ends -->
          </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.js')
  </body>

  <!-- session message start-->
  @if(Session::has('addmsg'))
          <script>
            toastr.success("{!!Session::get('addmsg')!!}");
          </script>
        @endif

        @if(Session::has('delmsg'))
          <script>
            toastr.error("{!!Session::get('delmsg')!!}");
          </script>
        @endif
    <!-- session message end-->

</html>
