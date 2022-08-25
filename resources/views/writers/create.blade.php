@extends('layouts.admin_layout')



@section('page_header')
  <h4>Writer Edit</h4>  
@endsection 
@section('content')
  
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="tile">
                
                <div class="modal-body">
                    <form action="{{ route('writer.store') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">Name of Bank <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="name_of_bank" id="bangla_name" value="{{ old('bangla_name') }}"/>  
                                </div>
                            </div>

                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">Short Name<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="short_name" id="bangla_name" value="{{ old('bangla_name') }}"/>  
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">Head Office Address<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="head_office_address" id="bangla_name" value="{{ old('bangla_name') }}"/>  
                                </div>
                            </div>

                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">Holding<span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="holding" id="bangla_name" value="{{ old('bangla_name') }}"/>  
                                </div>
                            </div>

                        </div>



                        <div class="row">
                           
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">Division <span class="m-l-5 text-danger"> *</span></label>
                                    <select class="form-control" id="division" name="division" required>
                                        <option value="">--বিভাগ--</option>
                                        @foreach ($divisions as $division)
                                        <option value="{{ $division->id }}">{{ $division->bn_name }}</option>
                                        @endforeach
                                    </select>
                                
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">District<span class="m-l-5 text-danger"> *</span></label>
                                    <select class="form-control" id="district" name="district" required>
                                        <option value="">--জেলা--</option>
                                </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                           
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">Upazila<span class="m-l-5 text-danger"> *</span></label>
                                    <select class="form-control" id="thana" name="thana" required>
                                        <option value="">--উপজেলা--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">Mobile Number <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="mobile_no" id="bangla_name" value="{{ old('bangla_name') }}"/>  
                                </div>
                            </div>

                        </div>
                       


                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">>Contact Person Email <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="email" id="bangla_name" value="{{ old('bangla_name') }}"/>  
                                </div>
                            </div>

                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">Contact Person <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="contact_mobile" id="bangla_name" value="{{ old('bangla_name') }}"/>  
                                </div>
                            </div>

                        </div>
                       


                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">Contact Person Designation <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="contact_designation" id="bangla_name" value="{{ old('bangla_name') }}"/>  
                                </div>
                            </div>

                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">Conatct Mobile  <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="contact_mobile" id="bangla_name" value="{{ old('bangla_name') }}"/>  
                                </div>
                            </div>

                        </div>


                        
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">Eamil <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="email" id="bangla_name" value="{{ old('bangla_name') }}"/>  
                                </div>
                            </div>

                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label class="control-label" for="bangla_name">password <span class="m-l-5 text-danger"> *</span></label>
                                    <input class="form-control" type="text" name="password" id="bangla_name" value="{{ old('bangla_name') }}"/>  
                                </div>
                            </div>

                        </div>
                       
                        
                   
                 <div class="modal-footer">
                 <a href="{{route('author.post.index')}}" class="btn btn-secondary" data-dismiss="modal">Close
                    </a>
                    <button type="submit" class="btn btn-primary">Save</button>
                 </div>
                </form>

               
               </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
  $("#division").on('change',function(e){
    e.preventDefault();
    var ddlDistrict=$("#district");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type:'POST',
      url: "{{url('/district-by-division')}}",
      data:{_token:$('input[name=_token]').val(),division:$(this).val()},
      success:function(response){
          // var jsonData=JSON.parse(response);
          $('option', ddlDistrict).remove();
          $('#district').append('<option value="">--Select District--</option>');
          $.each(response, function(){
            $('<option/>', {
              'value': this.id,
              'text': this.bn_name
            }).appendTo('#district');
          });
        }

    });
  });

  $("#district").on('change',function(e){
    e.preventDefault();
    var ddlthana=$("#thana");
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      type:'POST',
      url: "{{url('/thana-by-district')}}",
      data:{_token:$('input[name=_token]').val(),districts:$(this).val()},
      success:function(response){
          // var jsonData=JSON.parse(response);
          $('option', ddlthana).remove();
          $('#thana').append('<option value="">--Select Thana--</option>');
          $.each(response, function(){
            $('<option/>', {
              'value': this.id,
              'text': this.bn_name
            }).appendTo('#thana');
          });
        }
      });
  });

</script>
@endsection