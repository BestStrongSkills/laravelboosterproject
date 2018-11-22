
$(document).ready(function ($) 
{
    var mydata ,i , j = "";

    mydata={"1_5":{"2_5":{"1":"13","2":"12","3":"11","4":"10","5":"8"},
                 "2_4":{"1":"13","2":"12","3":"11","4":"10","5":"8"},
                 "2_3":{"1":"13","2":"12","3":"11","4":"10","5":"9"},
                 "2_2":{"1":"13","2":"12","3":"11","4":"10","5":"9"},
                 "2_1":{"1":"15","2":"14","3":"12","4":"10","5":"10"}},

            "1_4":{"2_5":{"1":"16","2":"15","3":"13","4":"11","5":"10"},
                "2_4":{"1":"17","2":"16","3":"14","4":"12","5":"10"},
                "2_3":{"1":"17","2":"16","3":"14","4":"12","5":"10"},
                "2_2":{"1":"17","2":"16","3":"14","4":"12","5":"10"},
                "2_1":{"1":"24","2":"26","3":"23","4":"20","5":"17"}},

            "1_3":{"2_5":{"1":"28","2":"26","3":"23","4":"20","5":"17"},
                "2_4":{"1":"32","2":"28","3":"25","4":"22","5":"19"},
                "2_3":{"1":"33","2":"31","3":"28","4":"24","5":"21"},
                "2_2":{"1":"36","2":"33","3":"30","4":"26","5":"23"},
                "2_1":{"1":"38","2":"35","3":"33","4":"28","5":"25"}},

            "1_2":{"2_5":{"1":"42","2":"37","3":"35","4":"30","5":"27"},
                "2_4":{"1":"46","2":"41","3":"37","4":"32","5":"29"},
                "2_3":{"1":"50","2":"44","3":"40","4":"35","5":"31"},
                "2_2":{"1":"56","2":"49","3":"44","4":"38","5":"33"},
                "2_1":{"1":"62","2":"52","3":"47","4":"41","5":"35"}},

            "1_1":{"2_5":{"1":"121","2":"106","3":"93","4":"82","5":"70"},
                 "2_4":{"1":"134","2":"121","3":"108","4":"94","5":"81"},
                 "2_3":{"1":"149","2":"136","3":"121","4":"107","5":"91"},
                 "2_2":{"1":"180","2":"157","3":"139","4":"122","5":"105"},
                "2_1":{"1":"275","2":"243","3":"216","4":"187","5":"161"}}
            };

    // function get_desired_method(rank, division)
    // {
    // 	$("#desired-division").removeClass('hidden');
    // 	for( i=0;i<=5;i++)
    //     {
    //         $("#desired-rank option:nth-child("+i+")").removeClass('hidden');
    //         $("#desired-division option:nth-child("+i+")").removeClass('hidden');
    //     }

    //     if (rank==1 && division==1)
    //     {
    //         // $('#desired-rank').val(6);
    //         // $('#desired-rank').attr("name");
    //         // alert($('#desired-rank').attr("name"));
    //         alert('a');

    //         $("#desired-division").addClass('hidden');//diamond=1 ,division=1 , only display master
    //         var image = "images/divisions/6.png";
    //         $("#image_2").attr("src",image);
    //     }

    //     if (rank>1 && division==1)
    //     { 
    //         var a=$('#desired-rank').val(rank-1);// upper level(different rank ,different division) display
    //         var b=$('#desired-division').val(5);
    //         var image = "images/divisions/"+$('#desired-rank').val()+"_"+$('#desired-division').val()+".png";
    //         $("#image_2").attr("src",image);
    //     }

    //     if (division>1)
    //     {
    //         var a=$('#desired-rank').val(rank);
    //         $('#desired-division').val(division-1);
    //      	//please remove next part besides of upper level than selected desired division// 
    //          var b=$('#desired-division').val();
    //         for( i=b; i<=6;i++)
    //         {
    //             $("#desired-rank option:nth-child("+i+")").removeClass('hidden');
    //         }
    //         var image = "images/divisions/"+$('#desired-rank').val()+"_"+$('#desired-division').val()+".png";
    //         $("#image_2").attr("src",image);
    //     }
    // }


    
    //==========================//=================================//


    $('#current-rank').on('change',function()
    { 
        $("#desired-division").show();
        var cur_rank_id = $(this).children(":selected").attr("id");
        cur_rank_id = cur_rank_id.replace('1_', '');
        var cur_division_id = $(this).children(":selected").attr("id");
        cur_division_id = cur_division_id.replace('2_', '');

        for(i = 1 ; i <= cur_rank_id ; i ++)
        {
            $('#1_1_'+ i).show();
            $('#1_1_'+ i).removeAttr('selected');
        }
        for(j = parseInt(cur_rank_id)+1; j <= 5 ; j++){
            $('#1_1_'+ j).removeAttr('selected');
            $('#1_1_'+ j).hide();
        }
        $('#1_1_'+parseInt(cur_rank_id)).prop('selected', true);

        var cur_rank_id =$('#current-rank').find('option:selected').attr("id");
        cur_rank_id = cur_rank_id.replace('1_', '');
        var cur_division_id = $('#current-division').find('option:selected').attr("id");
        cur_division_id = cur_division_id.replace('2_', '');

        var image = "images/divisions/"+cur_rank_id+"_"+cur_division_id+".png"
        $("#image_1").attr("src",image);
        $("#image_1_left").attr("src",image);

        // var desired_rank_id = $('#desired-rank').find('option:selected').attr("id");
        // desired_rank_id = desired_rank_id.replace('1_1_', '');
        
        // var desired_division_id = $('#desired-division').find('option:selected').attr("id");
        // desired_devision_id = desired_devision_id.replace('2_1_', '');


        calculateOrder();
    });

    //==========================//=================================//
    $('#current-division').on('change',function()
    {
        $("#desired-division").show();
        var cur_division_id = $(this).children(":selected").attr("id");
            cur_division_id = cur_division_id.replace('2_', '');
        var desired_rank_id = $('#desired-rank').children(":selected").attr("id");
            desired_rank_id = desired_rank_id.replace('1_1_', '');
        // var desired_devision_id =$('#desired-division').children(":selected").attr("id");
        //     desired_devision_id =desired-division.replace('2_1_', '');


        if (cur_division_id>1)
        {
            for(i = 1 ; i <= cur_division_id-1 ; i ++)
            {
                $('#2_1_'+ i).show();
                $('#2_1_'+ i).removeAttr('selected');
            }
            for(j = parseInt(cur_division_id); j <= 5 ; j++)
            {
                $('#2_1_'+ j).removeAttr('selected');
                $('#2_1_'+ j).hide();
            }
            $('#2_1_'+(parseInt(cur_division_id)-1)).prop('selected', true);

            var cur_rank_id = $('#current-rank').children(":selected").attr("id");

            cur_rank_id = cur_rank_id.replace('1_', '');

            for(i = 1 ; i <= cur_rank_id ; i ++)
            {
                $('#1_1_'+ i).show();
                $('#1_1_'+ i).removeAttr('selected');
                
            }
            for(j = parseInt(cur_rank_id)+1; j <= 5 ; j++)
            {
                $('#1_1_'+ j).removeAttr('selected');
                $('#1_1_'+ j).hide();
            }
            $('#1_1_'+parseInt(cur_rank_id)).prop('selected', true);
        }


        else if (cur_division_id==1)
        {   
            for(i = 1 ; i <= 5; i ++)
            {
                $('#2_1_'+ i).show();
            }
            $('#1_1_'+(parseInt(desired_rank_id)-1)).prop('selected', true);

                $('#1_1_'+ desired_rank_id).removeAttr('selected');
                $('#1_1_'+ desired_rank_id).hide();

            if($('#current-rank').children(':selected').attr('id') == '1_1')
            {
                for(i = 1 ; i <= 5; i ++)
                {
                    $('#2_1_'+ i).hide();
                }
                // $("#desired-division").prop("selectedIndex", -1);
                // when i remove ---$("#desired-division").show()--in the  top of  each case,then it will display desired division;
                $("#desired-division").hide();
            }
        }
        var currentRank=$('#1_'+cur_rank_id).attr('name');
        var currentDivision = $('#2_'+cur_division_id).attr('name');
        $('#cur_rank_division').text(currentRank+' ('+currentDivision+')');

        // alert($('#1_'+cur_rank_id).attr('name'));


       
        var image = "images/divisions/"+cur_rank_id+"_"+cur_division_id+".png"
        $("#image_1").attr("src",image);
        $("#image_1_left").attr("src",image);        

        // var desired_rank_id = $('#desired-rank').children(":selected").attr("id");
        //     desired_rank_id = desired_rank_id.replace('1_1_', '');
        // var desired_devision_id =$('#desired-division').children(":selected").attr("id");
        //     desired_devision_id = desired_devision_id.replace('2_1_', '');
        // var image = "images/divisions/"+desired_rank_id+"_"+desired_division_id+".png"
        // $("#image_2").attr("src",image);
        // $("#image_2_left").attr("src",image);

        calculateOrder();
    });

    $('#current-Lp').on('change',function()
    {
        calculateOrder();
    });

    //================================================================//

    $('#desired-rank').on('change',function() 
    {  
        $("#desired-division").removeClass('hidden');
            var desired_rank_id = $('#desired-rank').children(":selected").attr("id");
            desired_rank_id = desired_rank_id.replace('1_1_', '');
            var desired_devision_id =$('#desired-division').children(":selected").attr("id");
            desired_devision_id = desired_devision_id.replace('2_1_', '');
        
        // if ($('#desired-rank').children(":selected").attr("id") == '1_1_0'))
        // {
        //     $("#desired-division").addClass('hidden');
        //     var image = "images/divisions/6.png";
        //     $("#image_2").attr("src",image);
        // }


        // else
        // {
        //     $("#desired-division").removeClass('hidden');
        //     var image = "images/divisions/"+desired_rank_id+"_"+desired_devision_id+".png"
        //     $("#image_2").attr("src",image);
        //     $("#image_2_left").attr("src",image);




            // if (desired_rank_id==cur_rank_id)
            // {
            //     desired_division_id = cur_division_id;
            //     desired_division_id--;
            //     var image = "images/divisions/"+desired_rank_id+"_"+desired_division_id+".png"
            //     $("#image_2").attr("src",image);
            //     alert(image);
                
            //     $("#desired-division").children(":selected").attr("desired_division_id");
            //     var value = $('#current-division').children(":selected").attr("id");

            //     for( i=value;i<=6;i++)
            //     {
            //         $("#desired-rank option:nth-child("+i+")").addClass('hidden');
            //     }
            // }
            // else
            // {
            //     for( i=1; i<=5;i++)
            //     {
            //         $("#desired-division option:nth-child("+i+")").removeClass('hidden');
            //     }
            // }
        //}
        calculateOrder();
    });


            

    $('#desired-division').on('change',function() 
    {   
        var desired_devision_id =$('#desired-division').children(":selected").attr("id");
        desired_devision_id = desired_devision_id.replace('2_1_', '');


        var desiredRank=$('#1_'+desired_rank_id).attr('name');
        var desiredDivision = $('#2_'+desired_division_id).attr('name');
        $('#desired_rank_division').text(desiredRank+' ('+desiredDivision+')');
        // current_division ,current _rank selected and When change the from selectedd rank to  upper rank,the desired_division has to display from 1 to 5 division:
        
        // for( i=1; i<=5;i++)
        // {
        //     $("#desired-division option:nth-child("+i+")").removeClass('hidden');
        // }
        // if (desired_rank_id==cur_rank_id)
        // {
        //     mm=desired_rank_id==cur_rank_id;
        //     for( i=mm;i<=5;i++)
        //     {
        //         $("#desired-division option:nth-child("+i+")").addClass('hidden');
        //     }
        // }
        // var image = "images/divisions/"+desired_rank_id+"_"+ desired_devision_id+".png"
        // $("#image_2").attr("src",image);
    
        
        calculateOrder();
    });
    // ==============================price===================//
    function calculateOrder()
    {
        var new_value = $('#desired-rank').children(":selected").attr("id");
        var new_division = $('#desired-division').children(":selected").attr("id");
        var current_Lp = $('#current-Lp').children(":selected").attr("id");
        var cur_rank_id = $('#current-rank').children(":selected").attr("id");
        var cur_division_id = $('#current-division').children(":selected").attr("id");
        var price_start=mydata[cur_rank_id][cur_division_id][current_Lp];
        new_value = new_value.replace("_1","");
        new_division = new_division.replace("_1","");
       
        var price_end=mydata[new_value][new_division][1];
       
        var sum = parseInt(price_start);
        var start = 5 * (parseInt(new_value) - 1) + parseInt(new_division);
        var end = 5 * (parseInt(cur_rank_id) - 1) + parseInt(cur_division_id);
        
        for(i = start - 1; i < end - 1; i ++)
        {
            var row = Math.floor(i / 5) + 1;
            var column = Math.floor(i % 5) + 1;
            sum += parseInt(mydata[row][column][1]);
        }
        $("#divisionBoosting_price").html("<span style='color:#ffd200;font-size:40px;font-weight:600'>" + sum + "</span>");
        $("#amount").val(sum);
    }

    //------------------------2--------------------------//
    $('#wins_current').on('change',function() 
    {
        $("#wins_division").removeClass('hidden');

        if ($('#wins_current').val()==6)
        {
            $("#wins_division").addClass('hidden');
            var image = "images/divisions/6.png";
            $("#image_3").attr("src",image);
        }
        else if ($('#wins_current').val()==7)
        {
             $("#wins_division").addClass('hidden');
            var image = "images/divisions/7.png";
            $("#image_3").attr("src",image);
        }
        else
        {
            var wins_c = $('#wins_current').val();
            var wins_d = $('#wins_division').val();
            var image = "images/divisions/"+wins_c+"_"+wins_d+".png";
            $("#image_3").attr("src",image);
        }
        winsOrder();
    });

    $('#wins_division').on('change',function() 
    {
        var wins_c = $('#wins_current').val();
        var wins_d = $('#wins_division').val();
        var image = "images/divisions/"+wins_c+"_"+wins_d+".png"
        $("#image_3").attr("src",image);
        winsOrder();
    });
    //=========================rangeslider===================//
    $('#duo_range').on('change' , function()
    {
        var sliderValue = $('#duo_range').val();
        var wins_current = $('#wins_current').val();
        var wins_divisions = $('#wins_division').val();
        var winsBoost = [29,29,29,29,29,29,33,38,42,47,54,58,64,69,75,85,89,98,120,136,170,213,255,298,340];
        var  index = 5 * (parseInt(wins_current) - 1) + parseInt(wins_divisions);
        var result=parseFloat(Math.round(winsBoost[winsBoost.length - index] / 10 * parseInt(sliderValue) * 100) / 100).toFixed(2);
        
           $("#PriceOutput").html("<span>" + result + "$</span>");
           
           $("#wins_price").val(result);
    });

    function winsOrder()
    {
        var sliderValue = $('#duo_range').val();
        var wins_current = $('#wins_current').val();
        var wins_divisions = $('#wins_division').val();
        var winsBoost = [29,29,29,29,29,29,33,38,42,47,54,58,64,69,75,85,89,98,120,136,170,213,255,298,340];
        var  index = 5 * (parseInt(wins_current) - 1) + parseInt(wins_divisions);
        var result=parseFloat(Math.round(winsBoost[winsBoost.length - index] / 10 * parseInt(sliderValue) * 100) / 100).toFixed(2);
        
        $("#PriceOutput").html("<span>" + result + "$</span>");
        
        $("#wins_price").val(result);

        // alert($("#wins_price").val());
    }

    //==========placementMatch====================================//
    $('#currently_placement').on('change',function() 
    {
        var placement = $('#currently_placement').val();

        var image = "images/divisions/placement/"+placement+".png"
        $("#image_5").attr("src",image);
        $("#image_5_left").attr("src",image);
        placementOrder();
    });
    //==========placementMatch rangeslider====================================//
    $('#SoloPlacementBoosting_tab').on('change' , function()
    {
        var sliderValue1 = $('#SoloPlacementBoosting_tab').val();
        // alert(sliderValue1);
        var placement = $('#currently_placement').val();
        var placementMatch =[115,77,51,38,27,24,30];
        var placeIndex=parseInt(placement);
        var resultPlacement = parseFloat(Math.round(placementMatch[placeIndex-1] / 10 * parseInt(sliderValue1) * 100) / 100).toFixed(2);
        $("#PlaceMentOutput").html("<span>" + resultPlacement + "$</span>");
    });
    function placementOrder()
    {
        var sliderValue1 = $('#SoloPlacementBoosting_tab').val();
        var placement = $('#currently_placement').val();
        var placementMatch =[115,77,51,38,27,24,30];
        var placeIndex=parseInt(placement);
        var resultPlacement = parseFloat(Math.round(placementMatch[placeIndex-1] / 10 * parseInt(sliderValue1) * 100) / 100).toFixed(2);
        $("#PlaceMentOutput").html("<span>" + resultPlacement + "$</span>");
    }


      //=================================Normal Draft=================//
    $('#SoloNormalMatches_tab').on('change' , function()
    {
        var max=30;
        var sliderValue2 = $('#SoloNormalMatches_tab').val();
        var normalDraft= max/10*parseInt(sliderValue2);
        $("#normalDraftOutput").html("<span>" + normalDraft + "$</span>");
        NormalDraftOrder();
    });
    //--------------------------------4----------------------------
    function NormalDraftOrder()
    {
        var max=30;
        var sliderValue2 = $('#SoloNormalMatches_tab').val();
        var normalDraft= max/10*parseInt(sliderValue2);
        $("#normalDraftOutput").html("<span>" + normalDraft + "$</span>");
    }
    
    
});