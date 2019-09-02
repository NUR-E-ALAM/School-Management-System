@extends('layouts.fontend')

@section('content')
   <div class="row">
       <div class="col-md-6">
    <h1>Show Your Result</h1>


    
</div>
       <div class="col-md-6">
  {!! Form::open(array('route'=>'showresult','method'=>'GET','id'=>'f'))!!}
  <div class="form-row">
    <div class="col">
         <select name="session" id="session" class="form-control" >
                                    <option value="">--- Select Session ---</option>
                                    @foreach ($session as $key => $value)

                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
    </div>
    <br>
    <div class="col">

       <select name="class" id="class"  class="form-control" style="">
                                    <option value="">--- Select Class ---</option>
                            </select>
    </div>
    
    <div class="col"> <br/>
<select name="shift" id="shift" class="form-control" style="">
                                    <option value="">--- Select shift ---</option>
                            </select>
       
    </div> <br/>
    <div class="col">
 <select name="section" id="section" class="form-control" style="">
                                    <option value="">--- Select Section ---</option>
                            </select>

       
                                 
    </div>
    <div class="col"><br>
  <input type="number" name="roll" id="" class="form-control" placeholder="Type Your Roll" >
                                 
    </div> <br/>
  </div>
 <div class="col-md-2">

                                    <input type="submit" id="addBtn" value="Check Result" class="btn btn-primary">

                                    {!! Form::close()!!}
                              </div>
</div>
</div>
  <script>
$(document).ready(function(){
    //alert(5);
  $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
  $("#session").change(function(){
    var url = "{{URL::to('/')}}";
$('#class').empty();
$('#shift').empty();
$('#section').empty();
    var sessionid = $(this).val();
    var url = "{{URL::to('/')}}";

    $.ajax({
        type: "GET",
        url: url + '/selectclass/'+sessionid,
        data:{},
        dataType: "JSON",
        success:function(data) {
            console.log(data);
                if(data){
                    $('#class').empty();

                    $.each(data, function(key, value){
                       // alert(key);
                        $('#class').append('<option value="'+value.id+'">' + value.class_name + '</option>');

                    });
                }

            },
    });

});
//category end

        $("#class").change(function(){

 
        var classid = $(this).val();
        var url = "{{URL::to('/')}}";

        //console.log(classid);
        $.ajax({
            type: "GET",
            url: url + '/selectshift/'+classid,
            data:{},
            dataType: "JSON",
            success:function(data) {
                    if(data) console.log(data);{
                         console.log(data);
                        $('#shift').empty();

                        $.each(data, function(key, value){
                           //alert(key);
                            $('#shift').append('<option value="'+value.id+'">' + value.shift_name + '</option>');

                        });
                    }

                },
        });

});
$("#shift").change(function(){

var shiftid = $(this).val();
var url = "{{URL::to('/')}}";

console.log(shiftid);
$.ajax({
    type: "GET",
    url: url + '/selectsection/'+shiftid,
    data:{},
    dataType: "JSON",
    success:function(data) {
            if(data){
                $('#section').empty();

                $.each(data, function(key, value){
                   // alert(key);
                    $('#section').append('<option value="'+value.id+'">' + value.section_name + '</option>');

                });
            }

        },
});

});
});
</script>
@endsection

