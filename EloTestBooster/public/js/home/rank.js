
$(document).ready(function ($) 
{
    var mydata ,i , j = "";

    mydata={"5":{"5":{"1":"13","2":"12","3":"11","4":"10","5":"8"},
					 "4":{"1":"13","2":"12","3":"11","4":"10","5":"8"},
					 "3":{"1":"13","2":"12","3":"11","4":"10","5":"9"},
					 "2":{"1":"13","2":"12","3":"11","4":"10","5":"9"},
					 "1":{"1":"15","2":"14","3":"12","4":"10","5":"10"}},

			    "4":{"5":{"1":"16","2":"15","3":"13","4":"11","5":"10"},
			    	"4":{"1":"17","2":"16","3":"14","4":"12","5":"10"},
					"3":{"1":"17","2":"16","3":"14","4":"12","5":"10"},
					"2":{"1":"17","2":"16","3":"14","4":"12","5":"10"},
					"1":{"1":"24","2":"26","3":"23","4":"20","5":"17"}},

				"3":{"5":{"1":"28","2":"26","3":"23","4":"20","5":"17"},
					"4":{"1":"32","2":"28","3":"25","4":"22","5":"19"},
					"3":{"1":"33","2":"31","3":"28","4":"24","5":"21"},
					"2":{"1":"36","2":"33","3":"30","4":"26","5":"23"},
				    "1":{"1":"38","2":"35","3":"33","4":"28","5":"25"}},

				"2":{"5":{"1":"42","2":"37","3":"35","4":"30","5":"27"},
					"4":{"1":"46","2":"41","3":"37","4":"32","5":"29"},
					"3":{"1":"50","2":"44","3":"40","4":"35","5":"31"},
					"2":{"1":"56","2":"49","3":"44","4":"38","5":"33"},
					"1":{"1":"62","2":"52","3":"47","4":"41","5":"35"}},

				"1":{"5":{"1":"121","2":"106","3":"93","4":"82","5":"70"},
				     "4":{"1":"134","2":"121","3":"108","4":"94","5":"81"},
				     "3":{"1":"149","2":"136","3":"121","4":"107","5":"91"},
					 "2":{"1":"180","2":"157","3":"139","4":"122","5":"105"},
                    "1":{"1":"275","2":"243","3":"216","4":"187","5":"161"}},

                "0":{"5":{"1":"135","2":"115","3":"100","4":"90","5":"80"},
                    "4":{"1":"145","2":"135","3":"118","4":"105","5":"91"},
                    "3":{"1":"250","2":"163","3":"141","4":"127","5":"75"},
                    "2":{"1":"280","2":"175","3":"165","4":"152","5":"135"},
                   "1":{"1":"300","2":"263","3":"236","4":"200","5":"181"}}
            };

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
        for(j = parseInt(cur_rank_id)+1; j <= 5 ; j++)
        {
            $('#1_1_'+ j).removeAttr('selected');
            $('#1_1_'+ j).hide();
        }
        $('#1_1_'+parseInt(desired_rank_id)).prop('selected', true);

        if (cur_rank_id>1 && cur_division_id==1)
        { 
            var image = "images/divisions/"+cur_rank_id+"_"+cur_division_id+".png";
                $("#image_1").attr("src",image);
                $("#image_1_left").attr("src",image);
        }
          
        var cur_rank_id =$('#current-rank').find('option:selected').attr("id");
            cur_rank_id = cur_rank_id.replace('1_', '');
        var cur_division_id = $('#current-division').find('option:selected').attr("id");
            cur_division_id = cur_division_id.replace('2_', '');
        var image = "images/divisions/"+cur_rank_id+"_"+cur_division_id+".png"
            $("#image_1").attr("src",image);
            $("#image_1_left").attr("src",image);

       
        var desired_rank_id = $('#desired-rank').find('option:selected').attr("id");
            desired_rank_id = desired_rank_id.replace('1_1_', '');
        var desired_division_id = $('#desired-division').find('option:selected').attr("id");
            desired_division_id = desired_division_id.replace('2_1_', '');
        var image = "images/divisions/"+desired_rank_id+"_"+desired_division_id+".png"
            $("#image_2").attr("src",image);
            $("#image_2_left").attr("src",image);
       
        $('#1_'+cur_rank_id).val();     
        calculateOrder();
    });

    //==========================//=================================//
    $('#current-division').on('change',function()
    {
        $("#desired-division").show();
        var cur_division_id = $(this).children(":selected").attr("id");
            cur_division_id = cur_division_id.replace('2_', '');
        var cur_rank_id =$('#current-rank').find('option:selected').attr("id");
            cur_rank_id = cur_rank_id.replace('1_', '');
        var desired_rank_id = $('#desired-rank').children(":selected").attr("id");
            desired_rank_id = desired_rank_id.replace('1_1_', '');
        var desired_division_id =$('#desired-division').children(":selected").attr("id");
            desired_division_id =desired_division_id.replace('2_1_', '');

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

                var cur_rank_id =$('#current-rank').find('option:selected').attr("id");
                    cur_rank_id = cur_rank_id.replace('1_', '');
                var cur_division_id = $('#current-division').find('option:selected').attr("id");
                    cur_division_id = cur_division_id.replace('2_', '');
                var image = "images/divisions/"+cur_rank_id+"_"+cur_division_id+".png"
                    $("#image_1").attr("src",image);
                    $("#image_1_left").attr("src",image);

              

                var desired_rank_id = $('#desired-rank').find('option:selected').attr("id");
                    desired_rank_id = desired_rank_id.replace('1_1_', '');
                var desired_division_id = $('#desired-division').find('option:selected').attr("id");
                    desired_division_id = desired_division_id.replace('2_1_', '');
                var image = "images/divisions/"+desired_rank_id+"_"+desired_division_id+".png"
                    $("#image_2").attr("src",image);
                    $("#image_2_left").attr("src",image);
            }
        }

        else if(cur_rank_id>1 && cur_division_id==1)
        {
            for(i = 1 ; i <= 5; i ++)
            {
                $('#2_1_'+ i).show();
            }
            $('#1_1_'+(parseInt(desired_rank_id)-1)).prop('selected', true);
                $('#1_1_'+ desired_rank_id).removeAttr('selected');
                $('#1_1_'+ desired_rank_id).hide();
            var cur_rank_id =$('#current-rank').find('option:selected').attr("id");
                    cur_rank_id = cur_rank_id.replace('1_', '');
            var cur_division_id = $('#current-division').find('option:selected').attr("id");
                    cur_division_id = cur_division_id.replace('2_', '');
            var image = "images/divisions/"+cur_rank_id+"_"+cur_division_id+".png";
                $("#image_1").attr("src",image);
                $("#image_1_left").attr("src",image);
    
        }

        //------this will display in left order part ---------------//  
        var currentRank=$('#1_'+cur_rank_id).attr('name');
        var currentDivision = $('#2_'+cur_division_id).attr('name');
            $('#cur_rank_division').text(currentRank+' ('+currentDivision+')');

        var image = "images/divisions/"+cur_rank_id+"_"+cur_division_id+".png"
            $("#image_1").attr("src",image);
            $("#image_1_left").attr("src",image);   

       

        var desired_rank_id = $('#desired-rank').children(":selected").attr("id");
            desired_rank_id = desired_rank_id.replace('1_1_', '');
        var desired_division_id =$('#desired-division').children(":selected").attr("id");
            desired_division_id = desired_division_id.replace('2_1_', '');
        var image = "images/divisions/"+desired_rank_id+"_"+desired_division_id+".png"
            $("#image_2").attr("src",image);
            $("#image_2_left").attr("src",image);

      

        //------this will display in order part ---------------//
        var desiredRank=$('#1_'+desired_rank_id).attr('name');
        var desiredDivision = $('#2_'+desired_division_id).attr('name');
            $('#desired_rank_division').text(desiredRank+' ('+desiredDivision+')');

        $('#2_'+cur_division_id).val(); //---sending form submit------------
        calculateOrder();
    });

    $('#current-Lp').on('change',function()
    {
        $('#current-Lp').val();
        calculateOrder();
    });

    $('#mode').on('change',function()
    {
        var mode_selection=$('#mode').find('option:selected').attr("name");
        $("#mode_statue").val($('#mode').find('option:selected').val());
    });

//=====================================================================================================================================//

    $('#desired-rank').on('change',function() 
    {  
        var desired_rank_id = $('#desired-rank').children(":selected").attr("id");
            desired_rank_id = desired_rank_id.replace('1_1_', '');
        var desired_division_id =$('#desired-division').children(":selected").attr("id");
            desired_division_id = desired_division_id.replace('2_1_', '');
        var cur_rank_id = $('#current-rank').children(":selected").attr("id");
            cur_rank_id = cur_rank_id.replace('1_', '');
        var cur_division_id = $('#current-division').find('option:selected').attr("id");
            cur_division_id = cur_division_id.replace('2_', '');
        
        if ($('#desired-rank').children(":selected").attr("id") == '1_1_0')
        {
            $("#desired-division").addClass('hidden');
                var image = "images/divisions/6.png";
                    $("#image_2").attr("src",image);
        }

        else
        {
            $("#desired-division").removeClass('hidden');
            var image = "images/divisions/"+desired_rank_id+"_"+ desired_division_id+".png"
                $("#image_2").attr("src",image);
                $("#image_2_left").attr("src",image);
            
            if(desired_rank_id = cur_rank_id)
            {
                var desired_division_id =$('#desired-division').children(":selected").attr("id");
                    desired_division_id = desired_division_id.replace('2_1_', '');
                        desired_division_id--;
                        // $('#1_1_'+parseInt(desired_rank_id)).prop('selected', true);

                var image = "images/divisions/"+desired_rank_id+"_"+ desired_division_id+".png"
                        $("#image_2").attr("src",image);
                        $("#image_2_left").attr("src",image);
                
                for(i = cur_division_id ; i <= 5 ; i ++)
                {
                    $('#2_1_'+ i).show();
                    $('#2_1_'+ i).removeAttr('selected');
                }
            }
            else
            {
                for( i=1; i<=5;i++)
                {
                    $('#1_1_'+ i).show();
                    $('#1_1_'+ i).removeAttr('selected');
                }
            }
           
        }
        $('#1_1_'+desired_rank_id).val();

        calculateOrder();
    });

    $('#desired-division').on('change',function() 
    {   
        var desired_rank_id = $('#desired-rank').children(":selected").attr("id");
                desired_rank_id = desired_rank_id.replace('1_1_', '');
        var desired_division_id =$('#desired-division').children(":selected").attr("id");
                desired_division_id = desired_division_id.replace('2_1_', '');
        var cur_rank_id = $('#current-rank').children(":selected").attr("id");
                cur_rank_id = cur_rank_id.replace('1_', '');

        //------this will display in order part ---------------//   
        var desiredRank=$('#1_'+desired_rank_id).attr('name');
        var desiredDivision = $('#2_'+desired_division_id).attr('name');
            $('#desired_rank_division').text(desiredRank+' ('+desiredDivision+')');

        // current_division ,current _rank selected and When change the from selected rank to  upper rank,
        //the desired_division has to display from 1 to 5 division:
        for( i=1; i<=desired_rank_id;i++)
        {
            $('#1_1_'+ i).show();
            $('#1_1_'+ i).removeAttr('selected');
        }
        for(i = 1 ; i <= 5; i ++)
        {
            $('#1_1_'+ i).removeAttr('selected');
            $('#2_1_'+ i).show();
        }
            $('#1_1_'+(desired_rank_id)).prop('selected', true);
            $('#2_1_'+(desired_division_id)).prop('selected', true);


        if (desired_rank_id==cur_rank_id)
        {
            mm=desired_rank_id==cur_rank_id;

            for( i=mm;i<=5;i++)
            {
                $('#1_1_'+ desired_rank_id).removeAttr('selected');
                $('#1_1_'+ i).show();
            }

            $('#1_1_'+parseInt(desired_rank_id)).prop('selected', true);

            var image = "images/divisions/"+desired_rank_id+"_"+ desired_division_id+".png"
                $("#image_2").attr("src",image);
                $("#image_2_left").attr("src",image);

            //------this will display in order part ---------------//   
            var desiredRank=$('#1_'+desired_rank_id).attr('name');
            var desiredDivision = $('#2_'+desired_division_id).attr('name');
                $('#desired_rank_division').text(desiredRank+' ('+desiredDivision+')');
        }

        else if(desired_rank_id>1 && desired_division_id==1)
        {
            for(i = 1 ; i <= desired_rank_id-1 ; i ++)
            {
                $('#1_'+ i).show();
                $('#1_'+ i).removeAttr('selected');
            }
            for(i = 1 ; i <= 5; i ++)
            {
                $('#2_'+ i).removeAttr('selected');
                $('#2_'+ i).show();
            }
            $('#1_'+(parseInt(desired_rank_id)+1)).prop('selected', true);
            $('#2_'+(parseInt(desired_division_id)+4)).prop('selected', true);


            // ======current image+++++++++++++   
            var a=parseInt(desired_rank_id)+1;
            var b=parseInt(desired_division_id)+3;
            var image = "images/divisions/"+a+"_"+b+".png";
                $("#image_1").attr("src",image);
                $("#image_1_left").attr("src",image);
            
            // ======desired image+++++++++++++   
           
            var c=parseInt(desired_rank_id);
            var d=parseInt(desired_division_id);
            var image = "images/divisions/"+c+"_"+d+".png";
                $("#image_2").attr("src",image);
                $("#image_2_left").attr("src",image);

             // ======left Order Part+++++++++++++
            
            var currentRank1=$('#1_'+a).attr('name');
            var currentDivision1 = $('#2_'+4).attr('name');
                $('#cur_rank_division').text(currentRank1+' ('+currentDivision1+')');
        }
        else
        {
            for( i=1; i<=desired_rank_id;i++)
            {
                $('#1_1_'+ i).show();
                $('#1_1_'+ i).removeAttr('selected');
            }
            for(i = 1 ; i <= 5; i ++)
            {
                $('#1_1_'+ i).removeAttr('selected');
                $('#2_1_'+ i).show();
            }
            $('#1_1_'+(desired_rank_id)).prop('selected', true);
            $('#2_1_'+(desired_division_id)).prop('selected', true);
        }
        

        var image = "images/divisions/"+desired_rank_id+"_"+ desired_division_id+".png"
            $("#image_2").attr("src",image);
            $("#image_2_left").attr("src",image);

        //------this will display in order part ---------------//   
        var desiredRank=$('#1_'+desired_rank_id).attr('name');
        var desiredDivision = $('#2_'+desired_division_id).attr('name');
            $('#desired_rank_division').text(desiredRank+' ('+desiredDivision+')');

        $('#2_1_'+desired_division_id).val();
        calculateOrder();
    });


    // ==============================price===================//
    function calculateOrder()
    {
        var cur_rank_id = $('#current-rank').children(":selected").attr("id");
            cur_rank_id = cur_rank_id.replace('1_', '');
        var cur_division_id = $('#current-division').children(":selected").attr("id");
            cur_division_id = cur_division_id.replace('2_', '');
        var starting_image_save=cur_rank_id+"_"+cur_division_id;
               
        var current_Lp = $('#current-Lp').children(":selected").attr("id");

        var new_value = $('#desired-rank').children(":selected").attr("id");
            new_value = new_value.replace('1_1_', '');
        var new_division = $('#desired-division').children(":selected").attr("id");
            new_division = new_division.replace('2_1_', '');

        var desired_image_save=new_value+"_"+new_division;
        
            
        var price_start=mydata[cur_rank_id][cur_division_id][current_Lp];
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

        //------------------sending form submit------------------//
        $("#amount").val(sum); 
        $('#starting_image_save').val(cur_rank_id+"_"+cur_division_id);
        $('#desired_image_save').val(desired_image_save);
        $('#member_starting_rank').val($('#current-rank').find('option:selected').val()+"("+$('#current-division').find('option:selected').val()+")");
        $('#member_desired_rank').val($('#desired-rank').find('option:selected').val()+"("+$('#desired-division').find('option:selected').val()+")");
            var CurRank=$('#current-rank').find('option:selected').val();
                Cur_Rank = CurRank.replace('Division', '');
            var CurDivision=$('#current-division').find('option:selected').val(); 
                Cur_Division =CurDivision.replace('Division', '');

            var CurLp =$('#current-Lp').find('option:selected').val(); 
                Cur_Lp = CurLp.slice(3);
                
            var DesRank=$('#desired-rank').find('option:selected').val();
                Des_Rank = DesRank.replace('Division', '');
            var DesDivision=$('#desired-division').find('option:selected').val(); 
                Des_Division =DesDivision.replace('Division', '');
        
        $("#totalData").val(Cur_Rank+''+ Cur_Division+'->'+Des_Rank+''+Des_Division+''+'('+Cur_Lp+')');
        // $("#totalData").val($('#current-rank').find('option:selected').val()+
        //     "("+$('#current-division').find('option:selected').val()+")"+"-"+">"
        //     +$('#desired-rank').find('option:selected').val()+
        //     "("+$('#desired-division').find('option:selected').val()+")");
        
    }

//------------------------2--------------------------//

    $('#wins_current').on('change',function() 
    {
        $("#wins_division").removeClass('hidden');

        var wins_current = $('#wins_current').children(":selected").attr("id");
            wins_current = wins_current.replace('1_', '');
        var wins_division = $('#wins_division').children(":selected").attr("id");
            wins_division = wins_division.replace('2_', '');

        if (wins_current==7)
        {
            $("#wins_division").addClass('hidden');
            var image= "images/divisions/7.png";
                $("#image_3").attr("src",image);
                $("#image_3_left").attr("src",image); 

            var winsRank=$('#1_'+wins_current).attr('name');
            $('#Normal_rank_division').text(winsRank);
        }
        else if (wins_current==6)
        {
            $("#wins_division").addClass('hidden');
            var image = "images/divisions/6.png";
            $("#image_3").attr("src",image);
            $("#image_3_left").attr("src",image); 

            var winsRank=$('#1_'+wins_current).attr('name');
            $('#Normal_rank_division').text(winsRank);
        }
         else
        {
            var wins_current = $('#wins_current').children(":selected").attr("id");
                wins_current = wins_current.replace('1_', '');
            var wins_division = $('#wins_division').children(":selected").attr("id");
                wins_division = wins_division.replace('2_', '');
            var image = "images/divisions/"+wins_current+"_"+wins_division+".png"
            
            $("#image_3").attr("src",image);
            $("#image_3_left").attr("src",image); 

            var winsRank=$('#1_'+wins_current).attr('name');
            var winsDivision = $('#2_'+wins_division).attr('name');
            $('#Normal_rank_division').text(winsRank+' ('+winsDivision+')');
           
        }

        //------------------sending form submit------------------//
        $('#wins_current').find('option:selected').val()
        
        winsOrder();
    });

    $('#wins_division').on('change',function() 
    {
            var wins_current = $('#wins_current').children(":selected").attr("id");
                wins_current = wins_current.replace('1_', '');
            var wins_division = $('#wins_division').children(":selected").attr("id");
                wins_division = wins_division.replace('2_', '');
            var image = "images/divisions/"+wins_current+"_"+wins_division+".png"
            
            $("#image_3").attr("src",image);
            $("#image_3_left").attr("src",image); 

            var winsRank=$('#1_'+wins_current).attr('name');
            var winsDivision = $('#2_'+wins_division).attr('name');
            $('#Normal_rank_division').text(winsRank+' ('+winsDivision+')');

            //------------------sending form submit------------------//
            $('#wins_division').find('option:selected').val()

        winsOrder();
    });


    $('#wins_mode').on('change',function()
    {
        var mode_selection=$('#wins_mode').find('option:selected').attr("name");
        $("#wins_mode_statue").val($('#wins_mode').find('option:selected').val());
        
    });


    //=========================rangeslider===================//
    $('#duo_range').on('change' , function()
    {
        var sliderValue = $('#duo_range').val();
        var wins_current = $('#wins_current').children(":selected").attr("id");
                wins_current = wins_current.replace('1_', '');
        var wins_division = $('#wins_division').children(":selected").attr("id");
                wins_division = wins_division.replace('2_', '');

        var winsBoost = [29,29,29,29,29,29,33,38,42,47,54,58,64,69,75,85,89,98,120,136,170,213,255,298,340];
        var  index = 5 * (parseInt(wins_current) - 1) + parseInt(wins_division);
        var result=parseFloat(Math.round(winsBoost[winsBoost.length - index] / 10 * parseInt(sliderValue) * 100) / 100).toFixed(2);
        
           $("#PriceOutput").html("<span>" + result + "$</span>");

        // =============send to view -submit================//
           $("#wins_price").val(result);  
           $("#winstotalData").val($('#wins_current').find('option:selected').val()+ "("+$('#wins_division').find('option:selected').val()+")");
            
    });

    function winsOrder()
    {
        var sliderValue = $('#duo_range').val();
        var wins_current = $('#wins_current').children(":selected").attr("id");
            wins_current = wins_current.replace('1_', '');
        var wins_division = $('#wins_division').children(":selected").attr("id");
            wins_division = wins_division.replace('2_', '');
        var winsBoost = [29,29,29,29,29,29,33,38,42,47,54,58,64,69,75,85,89,98,120,136,170,213,255,298,340];
        var  index = 5 * (parseInt(wins_current) - 1) + parseInt(wins_division);
        var result=parseFloat(Math.round(winsBoost[winsBoost.length - index] / 10 * parseInt(sliderValue) * 100) / 100).toFixed(2);
        
        $("#PriceOutput").html("<span>" + result + "$</span>");
        
        // =============send to view -submit================//
        $("#wins_price").val(result);
        $("#winstotalData").val($('#wins_current').find('option:selected').val()+ "("+$('#wins_division').find('option:selected').val()+")");
    }

//----------------------------------------placementMatch--------------------------------------------//
    $('#currently_placement').on('change',function() 
    {
        var placement = $('#currently_placement').val();

        var image = "images/divisions/placement/"+placement+".png"
        $("#image_5").attr("src",image);
        $("#image_5_left").attr("src",image);
        placementOrder();
    });

    //===============placementMatch rangeslider====================================//
    $('#SoloPlacementBoosting_tab').on('change' , function()
    {
        var sliderValue1 = $('#SoloPlacementBoosting_tab').val();
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


//------------------------------Normal Draft-------------------------------//
    $('#SoloNormalMatches_tab').on('change' , function()
    {
        var max=30;
        var sliderValue2 = $('#SoloNormalMatches_tab').val();
        var normalDraft= max/10*parseInt(sliderValue2);
        $("#normalDraftOutput").html("<span>" + normalDraft + "$</span>");
        NormalDraftOrder();
    });
    //--------------------------------4---------------------------//
    function NormalDraftOrder()
    {
        var max=30;
        var sliderValue2 = $('#SoloNormalMatches_tab').val();
        var normalDraft= max/10*parseInt(sliderValue2);
        $("#normalDraftOutput").html("<span>" + normalDraft + "$</span>");
    }
    
    
});