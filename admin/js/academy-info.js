
$(document).ready(function() {
    var url = "{{URL::to('/')}}";
    $('select[name="session"]').on('change', function() {
        var sessionID = $(this).val();
        
        // alert(sessionID);return;
        if(sessionID) {
            $.ajax({
                url: url + '/admin/selectclass/'+sessionID,
                //url: '/selectclass/'+sessionID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                   // console.log(data);
                    
                    $('select[name="class"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="class"]').append('<option value="'+ value.id +'">'+ value.class_name +'</option>');
                    });


                }
            });
        }else{
            $('select[name="class_name"]').empty();
        }
    });
    var url = "{{URL::to('/')}}";
    $('select[name="class"]').on('change', function() {
        var classID = $(this).val();
        
         //alert(classID);return;
        if(classID) {
            $.ajax({
                url: url + '/admin/selectshift/'+classID,
                //url: '/selectclass/'+sessionID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                   // console.log(data);
                    
                    $('select[name="shift"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="shift"]').append('<option value="'+ value.id +'">'+ value.shift_name +'</option>');
                    });


                }
            });
        }else{
            $('select[name="shift_name"]').empty();
        }
    });
    var url = "{{URL::to('/')}}";
    $('select[name="shift"]').on('change', function() {
        var shiftID = $(this).val();
        
         //alert(classID);return;
        if(shiftID) {
            $.ajax({
                url: url + '/admin/selectsection/'+shiftID,
                
                type: "GET",
                dataType: "json",
                success:function(data) {
                   // console.log(data);
                    
                    $('select[name="section"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="section"]').append('<option value="'+ value.id +'">'+ value.section_name +'</option>');
                    });


                }
            });
        }else{
            $('select[name="section_name"]').empty();
        }
    });
    
});
