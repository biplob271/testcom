@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')

<div class="card">
    <div class="card-header">
        <h5 class="">
                                    
                Add Staff
        </h5>
    </div>
    <div class="card-body">

    <form method="post" class="p-3" enctype="multipart/form-data" action="{{route('register')}}">
            @csrf
            <div class="modal-body">
                <div class="row">
                
                <div class="col-md-4">
                    <div class="form-group">
                        <label> Role </label>
                        <select name="role" id="" class="form-control">
                               
                               <option value="staff">Staff</option>
                     </select>
                    </div>
                </div>       
                <div class="col-md-4">
                    <div class="form-group">
                        <label> Joining Date</label>
                        <input type="date" class="form-control" name="join_date" value="" required /> 
                    </div>
                </div>
              
                <div class="col-md-4">
                    <div class="form-group">
                        <label> Qualification *</label>
                        <select name="qualification" id="" class="form-control">
                             <option value="bsc">Msc</option>
                             <option value="bba">MBA</option>
                             <option value="ba">MA</option>
                            <option value="bba">BBA</option>
                               <option value="bsc">BSC</option>
                               <option value="ba">BA</option>
                               
                             
                            
                              
                           
                     </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Name *</label>
                        <input type="text" class="form-control" name="name" value="" required /> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Email *</label>
                        <input type="email" class="form-control" name="email" value="" required /> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Phone *</label>
                        <input type="number" class="form-control" name="phone" value="" required /> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Password *</label>
                        <input type="password" class="form-control" name="password" value="" required /> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="birthday">Birthday:</label>
                    <input class="form-control" type="date" id="birthday" name="birthday">
                    </div>
                </div>  
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Gender</label>
                     <select name="gender" id="" class="form-control">
                               
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            
                      </select>
                    </div>
                </div> 
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Religion</label>
                     <select name="religion" id="" class="form-control">
                               
                                <option value="islam">Islam</option>
                                <option value="hindu">Hindu</option>
                                <option value="others">Others</option>
                            
                      </select>
                    </div>
                </div> 
        
   

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Present Address</label>
                        <input type="textarea" class="form-control" name="present_address" value="" required /> 
                    </div>
                </div>
               
                
              
                
                <div class="col-md-6">
                         <div class="form-group">
                                    <label for="Name"> Photo</label>
                                    <input type="file" name="image" class="form-control" id="">
                                    @if(!empty($Setting))
                                        <input type="hidden" name="image" class="form-control" id=""  value="{{ (!empty($Setting)) ? $Setting->image : old('image') }}">
                                        <img src="{{url('/')}}/uploads/{{$Setting->image}}" style="width: 100px; margin-top: 5px;" alt=""/>
                                    @endif
                        </div>           
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label> Status</label>
                     <select name="status" id="" class="form-control">

                                <option value="Active">Active</option>
                                <option value="In-active"> In Active</option>

                      </select>
                    </div>
                </div>
                
                
               
            </div>
            </div>
            
            <div class="modal-footer">
                <div class="form-group">
                     <button type="submit" class="btn btn-success">Save</button> 
                 </div>
             </div>
         </form>



    </div>
</div>





@endsection

@section('cusjs')

<!-- DataTables -->
  <!-- DataTables -->
<link rel="stylesheet" href="{{asset('/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<script src="{{asset('/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


@endsection