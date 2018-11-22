$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function goto_divisionBoosting()
{
    // var divisionBoosting_price = parseInt($('#divisionBoosting_price').text());
    
    // var current_rank = $('#current-rank').find('option:selected').attr("name");
    // var current_division = $('#current-division').find('option:selected').attr("name");
    // var desired_rank = $('#desired-rank').find('option:selected').attr("name");
    // var desired_division = $('#desired-division').find('option:selected').attr("name");
    // var current_Lp = $('#current-Lp').find('option:selected').attr("name");


    var amount = parseInt($('#divisionBoosting_price').text());
    var totalData = $('#current-rank').find('option:selected').attr("name")+"("+$('#current-division').find('option:selected').attr("name")+")"+"-"+">"+$('#desired-rank').find('option:selected').attr("name")+"("+$('#desired-division').find('option:selected').attr("name")+")";
   
             $("#totalData").val($('#current-rank').find('option:selected').val()+"("+$('#current-division').find('option:selected').val()+")"+"-"+">"+$('#desired-rank').find('option:selected').val()+"("+$('#desired-division').find('option:selected').val()+")");
    var member_starting_rank = $('#current-rank').find('option:selected').val()+"("+$('#current-division').find('option:selected').val()+")";
            $('#member_starting_rank').val($('#current-rank').find('option:selected').val()+"("+$('#current-division').find('option:selected').val()+")");
    var member_desired_rank = $('#desired-rank').find('option:selected').val()+"("+$('#desired-division').find('option:selected').val()+")";
            $('#member_desired_rank').val($('#desired-rank').find('option:selected').val()+"("+$('#desired-division').find('option:selected').val()+")");
    var mode_statue=$('#mode').find('option:selected').attr("name");
            $("#mode_statue").val($('#mode').find('option:selected').val());

            
        var cur_rank_id =$('#current-rank').find('option:selected').attr("id");
            cur_rank_id = cur_rank_id.replace('1_', '');
            
        var cur_division_id = $('#current-division').find('option:selected').attr("id");
            cur_division_id = cur_division_id.replace('2_', '');
           
    var starting_image_save=cur_rank_id+"_"+cur_division_id;
            $('#starting_image_save').val(cur_rank_id+"_"+cur_division_id);

        var desired_rank_id = $('#desired-rank').find('option:selected').attr("id");
            desired_rank_id = desired_rank_id.replace('1_1_', '');
        
        var desired_division_id = $('#desired-division').find('option:selected').attr("id");
            desired_division_id = desired_division_id.replace('2_1_', '');

    var desired_image_save=desired_rank_id+"_"+desired_division_id;
            $('#desired_image_save').val(desired_rank_id+"_"+desired_division_id);

            
    var wins_price = parseInt($('#PriceOutput').text());
    
    var winstotalData=$('#wins_current').find('option:selected').attr('name')+ "("+$('#wins_division').find('option:selected').attr('name')+")";
            $("#winstotalData").val($('#wins_current').find('option:selected').val()+ "("+$('#wins_division').find('option:selected').val()+")");
    var wins_mode_statue=$('#wins_mode').find('option:selected').attr("name");
            $("#wins_mode_statue").val($('#wins_mode').find('option:selected').val());    
           
    $.ajax({
        type:'POST',
        url:'/paypal',
        data:{
            amount:amount,
            totalData:totalData,
            mode_statue:mode_statue,
            member_starting_rank:member_starting_rank,
            member_desired_rank:member_desired_rank,
            starting_image_save:starting_image_save,
            desired_image_save:desired_image_save,
            wins_price:wins_price,
            winstotalData:winstotalData,
            wins_mode_statue:wins_mode_statue,
        },

        success:function(data)
        {
            
        }
    })
};