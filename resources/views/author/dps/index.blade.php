@extends('layouts.admin_layout')
@section('styles')

@endsection


@section('content')


<!--begin::Card-->
<div class="card card-custom gutter-b">
  <div class="card-header flex-wrap py-3">
    <div class="card-title">
      <h3 class="card-label">All DPS Rate
    </div>
    <div class="card-toolbar">
         
      <a href="{{ route('author.dps.create') }}" class="btn btn-primary pull-right">DPS Import & Export</a>
    </div>
  </div>
  <div class="card-body">

    <table id="myTable" class="table table-striped table-bordered" >
  <thead>
      @include('partial.msg')
      <tr>
        <th>Bank Id</th>
        <th>Bank Name</th>
        <th>Interset Rate</th>
        <th>Installment Amount</th>  
        <th>Duration</th>
        <th>Mature Amount</th>
  
       
       
      </tr>
  </thead>
  <tbody>
    
    @foreach ($dps as $row)
    <tr>
    <td>{{$row->user_id}}</td>
    <td>{{$row->users->name_of_bank}}</td>
    <td>{{$row->interset_rate}}%</td>
    <td>{{$row->installment_amount}}BDT</td>
    <td>{{$row->duration}}Year</td>
    <td>{{$row->mature_amount}}BDT</td>
    
    </tr>
    @endforeach
   
  </tbody>
</table>
 
 <!--end: Datatable-->
</div>
</div>
<!--end::Card-->


<!-- modal -->
{{-- <div class="modal fade" id="category" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="categoryLabel">Add Post</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="ti-close"></i>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('post.store') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
            <div class="form-group">
                <label class="control-label" for="name">Post Title Bangla Name <span class="m-l-5 text-danger"> *</span></label>
                <input class="form-control " type="text" name="title_bn" id="title_bn" value="{{old('title_bn')}}"/>
                
            </div>

            <div class="form-group">
                <label class="control-label" for="name">Post Title English Name <span class="m-l-5 text-danger"> *</span></label>
                <input class="form-control" type="text" name="title_en" id="title_en" value="{{old('title_en')}}"/>
                
            </div>

            <div class="form-group">
              <label class="control-label" for="name">Status <span class="m-l-5 text-danger"> *</span></label>
            
              
              <select class="form-control" id="exampleFormControlSelect1" name="status">
                  <option value="1">Active</option>
                  <option value="0">Deactive</option>
                 
                </select>
          </div>

          <div class="form-group">
            <label class="control-label" for="name">Category<span class="m-l-5 text-danger"> *</span></label>
            <select class="form-control" id="exampleFormControlSelect1" name="category_id">
              @foreach ($categories as $category)
             
              <option value="{{$category->id}}">{{$category->name_en}}</option>
              @endforeach

              </select>
        </div>
         
        <div class="form-group">
          <label class="control-label" for="name">Category<span class="m-l-5 text-danger"> *</span></label>
          <select class="form-control" id="exampleFormControlSelect1" name="subcategory_id">
            @foreach ($subcategories as $subcategory)
           
            <option value="{{$subcategory->id}}">{{$subcategory->name_en}}</option>
            @endforeach

            </select>
      </div>
      

            <div class="form-group">
                <label class="control-label" for="name">Post Details English Name <span class="m-l-5 text-danger"> *</span></label>
                <input class="form-control" type="text" name="details_en" id="details_en" value="{{old('details_en')}}"/>
                
            </div>

            <div class="form-group">
                <label class="control-label" for="name">Post Details Bangla Name <span class="m-l-5 text-danger"> *</span></label>
                <input class="form-control" type="text" name="details_bn" id="details_bn" value="{{old('details_bn')}}"/>
                
            </div>

            <div class="form-group">
                <label class="control-label" for="name">Tages English Name <span class="m-l-5 text-danger"> *</span></label>
                <input class="form-control" type="text" name="tages_en" id="tages_en" value="{{old('tages_en')}}"/>
                
            </div>

            <div class="form-group">
                <label class="control-label" for="name">Tages English Name <span class="m-l-5 text-danger"> *</span></label>
                <input class="form-control" type="text" name="tages_bn" id="tages_bn" value="{{old('tages_bn')}}"/>
                
            </div>
           
           
           

            <div class="form-group">
              <img id="image" src="#" />
                <label for="exampleInputPassword11">Photo</label>
                <input type="file"  name="image" accept="image/*"  required onchange="readURL(this);">
            </div>
           
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
            </button>
            <button type="submit" class="btn btn-primary">Save</button>
         </div>
        </form>
       </div>
    </div>
  </div> --}}


@endsection



@section('scripts')
<script type="text/javascript">
	function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>


{{-- <script src="{{url('')}}/asset/vendors/dataTable/jquery.dataTables.min.js"></script>

<!-- Bootstrap 4 and responsive compatibility -->
<script src="{{url('')}}/asset/vendors/dataTable/dataTables.bootstrap4.min.js"></script>
<script src="{{url('')}}/asset/vendors/dataTable/dataTables.responsive.min.js"></script>
<script src="{{url('')}}/asset/assets/js/examples/datatable.js"></script>
 --}}

   <script>
   $(document).ready(function (){
    $('#myTable').DataTable({
        "scrollY": "400px",
        "scrollCollapse": true
    });
});

  </script>
 
@endsection
