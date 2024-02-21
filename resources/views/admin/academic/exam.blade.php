@extends('admin.layouts.master')
@section('page-content')
@include('admin.layouts.message')

<div class="card">
    <div class="card-header">
          <button  class="btn btn-success btn-sm" data-toggle="modal" data-target="#newBankAccount">Add Exam</button>
    </div>
    <div class="card-body">
         <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SL</th>
              <th>For Class</th>
              <th>Exam Name</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($getData as $key => $data)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$data->for_class}}</td>
              <td> {{$data->exam_name}}</td>
              <td> 
              <a href="{{route('examDestroy', $data->id)}}" class="btn text-white btn-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
            </tfoot>
      </table>
    </div>
</div>







<!-- Modal for new bank account entry -->
<div class="modal fade" id="newBankAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog xmodal-dialog-centered " role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Exam</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        
        
        <form method="post" class="p-3" enctype="multipart/form-data" action="{{route('addExam')}}">
            @csrf
            <div class="modal-body">
                <div class="row">
                
                        
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label>For Class</label>
                     <select name="for_class" id="" class="form-control">
                                 <option value="All">For All Class</option>
                                 @foreach($class as $item)
                                <option value="{{$item->name_bn}}">{{$item->name_bn}}</option>
                                @endforeach
                                
                      </select>
                    </div>
                </div> 
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Exam Name</label>
                        <input type="text" class="form-control form-control-sm" name="exam_name" value="" required /> 
                    </div>
                </div>
             

                
             
                
            <div class="modal-footer">
                <div class="form-group">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Submit</button> 
                 </div>
             </div>
         </form>
        
        
        
        
     </div>
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