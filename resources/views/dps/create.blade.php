@extends('layouts.admin_layout')

@section('styles')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection

@section('content')
  
    <div class="row">
      <div class="col-md-4">
      <div class="panel-body">
        <form role="form" action="{{ route('import') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <div class="form-group">
                <label for="exampleInputPassword20">Xlsx File Import</label>
                <input type="file"  name="import_file"  required>
              </div>
            <button type="submit" class="btn btn-success waves-effect waves-light">Upload</button>
        </form>
    </div>
    <div class="tile">
      @include('partial.msg')
      <div class="panel-heading"><h3 class="panel-title text-white">Dps Import
        <a href="{{ route('export') }}" class="pull-right btn btn-danger btn-sm">Download Xlsx</a></h3>
      </div>
  </div>
      </div>
       
    </div>
   <!-- panel-body -->
    

@endsection

@section('scripts')

<script>
 
  $(document).ready(function () {
              $('#sub_category_name').on('change', function () {
              let id = $(this).val();
              $('#sub_category').empty();
              $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
              $.ajax({
              type: 'GET',
              url: '/admin/post/create/GetSubCatAgainstMainCatEdit/' + id,
              success: function (response) {
              var response = JSON.parse(response);
              
              console.log(response);   
              $('#sub_category').empty();
              $('#sub_category').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
              response.forEach(element => {
                  $('#sub_category').append(`<option value="${element['id']}">${element['name_bn']}</option>`);
                  });
              }
          });
      });
  });
</script>

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

<script>
    $('#summernote').summernote({
      placeholder: 'Hello stand alone ui',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>

<script>
  $('#summernote2').summernote({
    placeholder: 'Hello stand alone ui',
    tabsize: 2,
    height: 120,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>

<script>
    $('#summernote3').summernote({
      placeholder: 'Hello stand alone ui',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>


<script>
  $('#summernote4').summernote({
    placeholder: 'Hello stand alone ui',
    tabsize: 2,
    height: 120,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>





@endsection

