
$(document).ready(function ($) 
	{
		var mydata ,i , j = "";

		mydata={"5-1":{"2-1-5":{"1":"13","2":"12","3":"11","4":"10","5":"8"},
					 "2-1-4":{"1":"13","2":"12","3":"11","4":"10","5":"8"},
					 "2-1-3":{"1":"13","2":"12","3":"11","4":"10","5":"9"},
					 "2-1-2":{"1":"13","2":"12","3":"11","4":"10","5":"9"},
					 "2-1-1":{"1":"15","2":"14","3":"12","4":"10","5":"10"}},

			    "4-1":{"2-1-5":{"1":"16","2":"15","3":"13","4":"11","5":"10"},
			    	"2-1-4":{"1":"17","2":"16","3":"14","4":"12","5":"10"},
					"2-1-3":{"1":"17","2":"16","3":"14","4":"12","5":"10"},
					"2-1-2":{"1":"17","2":"16","3":"14","4":"12","5":"10"},
					"2-1-1":{"1":"24","2":"26","3":"23","4":"20","5":"17"}},

				"3-1":{"2-1-5":{"1":"28","2":"26","3":"23","4":"20","5":"17"},
					"2-1-4":{"1":"32","2":"28","3":"25","4":"22","5":"19"},
					"2-1-3":{"1":"33","2":"31","3":"28","4":"24","5":"21"},
					"2-1-2":{"1":"36","2":"33","3":"30","4":"26","5":"23"},
				    "2-1-1":{"1":"38","2":"35","3":"33","4":"28","5":"25"}},

				"2-1":{"2-1-5":{"1":"42","2":"37","3":"35","4":"30","5":"27"},
					"2-1-4":{"1":"46","2":"41","3":"37","4":"32","5":"29"},
					"2-1-3":{"1":"50","2":"44","3":"40","4":"35","5":"31"},
					"2-1-2":{"1":"56","2":"49","3":"44","4":"38","5":"33"},
					"2-1-1":{"1":"62","2":"52","3":"47","4":"41","5":"35"}},

				"1-1":{"2-1-5":{"1":"121","2":"106","3":"93","4":"82","5":"70"},
				     "2-1-4":{"1":"134","2":"121","3":"108","4":"94","5":"81"},
				     "2-1-3":{"1":"149","2":"136","3":"121","4":"107","5":"91"},
					 "2-1-2":{"1":"180","2":"157","3":"139","4":"122","5":"105"},
					"2-1-1":{"1":"275","2":"243","3":"216","4":"187","5":"161"}}
		};

		function get_desired_method(rank, division)
		{
			$("#desired-division").removeClass('hidden');

			for( i=0;i<=5;i++)
            {
                $("#desired-rank option:nth-child("+i+")").removeClass('hidden');
                $("#desired-division option:nth-child("+i+")").removeClass('hidden');
            }

            if (rank==1 && division==1)
            {
                $('#desired-rank').val(6);
                $("#desired-division").addClass('hidden');//diamond=1 ,division=1 , only display master
                var image = "images/divisions/6.png";
                $("#image_2").attr("src",image);
            }

            if (rank>1 && division==1)
            { 
                var a=$('#desired-rank').val(rank-1);// upper level(different rank ,different division) display
                var b=$('#desired-division').val(5);
                var image = "images/divisions/"+$('#desired-rank').val()+"_"+$('#desired-division').val()+".png";
                $("#image_2").attr("src",image);
            }

            if (division>1)
            {
                var a=$('#desired-rank').val(rank);
                $('#desired-division').val(division-1);
             	//please remove next part besides of upper level than selected desired division// 
	             var b=$('#desired-division').val();
	            for( i=b; i<=6;i++)
	            {
	                $("#desired-rank option:nth-child("+i+")").removeClass('hidden');
	            }
                var image = "images/divisions/"+$('#desired-rank').val()+"_"+$('#desired-division').val()+".png";
                $("#image_2").attr("src",image);
            }
		}
		//==========================//=================================//
		$('#current-rank').on('change',function()
        { 
       		get_desired_method($(this).val(), $('#current-division').val());

            var value = $(this).val();
            value++;
            value++;
            
            for( i=value; i<=6;i++)
            {
                $("#desired-rank option:nth-child("+i+")").addClass('hidden');
            }
            var current_rank =$('#current-rank').val();
            var current_division = $('#current-division').val();
            var image = "images/divisions/"+current_rank+"_"+current_division+".png"
            $("#image_1").attr("src",image);
            var desired_rank = $('#desired-rank').val();
            var desired_division = $('#desired-division').val();
            calculateOrder();
            
        });
		//==========================//=================================//
        $('#current-division').on('change',function()
        {
        	get_desired_method($('#current-rank').val(), $(this).val());
            var value = $(this).val();
            if(value==1)
                return;
            for( i=value; i<=5;i++)
            {
                $("#desired-division option:nth-child("+i+")").addClass('hidden');
            }
            var current_rank = $('#current-rank').val();
            var current_division = $('#current-division').val();
            var image = "images/divisions/"+current_rank+"_"+current_division+".png"
            $("#image_1").attr("src",image);

            var desired_rank = $('#desired-rank').val();
            var desired_division = $('#desired-division').val();
            var image = "images/divisions/"+desired_rank+"_"+desired_division+".png"
            $("#image_2").attr("src",image);
            
            calculateOrder();
        });
        $('#current-Lp').on('change',function()
        {
        	calculateOrder();
        });
        //================================================================//

        $('#desired-rank').on('change',function() 
        { 
            if ($('#desired-rank').val()==6)
            {
	            $("#desired-division").addClass('hidden');
                var image = "images/divisions/6.png";
                $("#image_2").attr("src",image);
            }
            else
            {    
                $("#desired-division").removeClass('hidden');
                var image = "images/divisions/"+$('#desired-rank').val()+"_"+$('#desired-division').val()+".png"
            	$("#image_2").attr("src",image);

				//=====================// ======================================//

            	if ($('#desired-rank').val()==$('#current-rank').val())
            	{
            		var desired_division = $('#current-division').val();
            		desired_division--;
	            	var image = "images/divisions/"+$('#desired-rank').val()+"_"+desired_division+".png"
	            	$("#image_2").attr("src",image);
	            	
	            	$("#desired-division").val(desired_division);
	            	var value = $('#current-division').val();
		            for( i=value;i<=6;i++)
	            	{
	                	$("#desired-rank option:nth-child("+i+")").addClass('hidden');
	            	}
            	}
            	else
            	{
            		for( i=1; i<=5;i++)
		        	{
		        		$("#desired-division option:nth-child("+i+")").removeClass('hidden');
		        	}
            	}
            }
            calculateOrder();
        });

        $('#desired-division').on('change',function() 
        {   
    		// current_division ,current _rank selected and When change the from selectedd rank to  upper rank,the desired_division has to display from 1 to 5 division:
        	for( i=1; i<=5;i++)
        	{
        		$("#desired-division option:nth-child("+i+")").removeClass('hidden');
        	}
        	if ($('#desired-rank').val()==$('#current-rank').val())
            {
            	mm=$('#current-division').val();
            	for( i=mm;i<=5;i++)
            	{
                	$("#desired-division option:nth-child("+i+")").addClass('hidden');
            	}
            }
            var image = "images/divisions/"+$('#desired-rank').val()+"_"+$('#desired-division').val()+".png"
            $("#image_2").attr("src",image);

            // ====================price===================//
            calculateOrder();
        });
        function calculateOrder(){
        	var new_value = $('#desired-rank').val();
            var new_division = $('#desired-division').val();
            var current_Lp = $('#current-Lp').val();
            var current_rank = $('#current-rank').val();
            var current_divisions = $('#current-division').val();
            var price_start=mydata[current_rank][current_divisions][current_Lp];
            var price_end=mydata[new_value][new_division][1];
            var sum = parseInt(price_start);
            var start = 5 * (parseInt(new_value) - 1) + parseInt(new_division);
            var end = 5 * (parseInt(current_rank) - 1) + parseInt(current_divisions);
            
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



    <div class="col-md-10 col-md-offset-2" style="margin-bottom:2rem;padding-top:3rem">
                                                                        <img src="{{asset('images/divisions/3_4.png')}}" id="image_1" style="margin-left:-15px;">
                                                                        <h3 style="color:white;font-weight:500">Current Rank</h3>
                                                                        <select class="custom-select" id="current-rank" name="current-rank"  style="height:40px;width:160px;background-color:#acacac">
                                                                            <option value="1-1">Diamond</option>
                                                                            <option value="2-1">Platinum</option>
                                                                            <option value="3-1" selected="">Gold</option>
                                                                            <option value="4-1">Silver</option>
                                                                            <option value="5-1">Bronze</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-10 col-md-offset-2" style="margin-bottom:5rem;height:20px">
                                                                        <select class="custom-select" id="current-division"  name="current-division"  style="height:40px;width:160px;background-color:#acacac">
                                                                            <option value="2-1-1">Division I</option>
                                                                            <option value="2-1-2">Division II</option>
                                                                            <option value="2-1-3">Division III</option>
                                                                            <option value="2-1-4" selected="">Division IV</option>
                                                                            <option value="2-1-5">Division V </option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-10 col-md-offset-2" style="margin-bottom:5rem;">
                                                                        <select class="custom-select division-select " id="current-Lp" name="current-Lp"  style="height:40px;width:160px;background-color:#acacac">
                                                                            <option value="" disabled="" selected="">Choose Division</option>
                                                                            <option value="1" selected="">0-20 LP</option>
                                                                            <option value="2">21-40 LP</option>
                                                                            <option value="3">41-60 LP</option>
                                                                            <option value="4">61-80 LP</option>
                                                                            <option value="5">81-100 LP</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 col-sm-12 col-lg-3 desired" style="padding-left:0px">
                                                                    <div class="col-md-10 col-md-offset-1" style="margin-bottom:2rem;padding-top:3rem">
                                                                        <img src="{{asset('images/divisions/3_1.png')}}" id="image_2">
                                                                        <h3 style="color:white;font-weight:500;margin-left:20px">Desired Rank</h3>
                                                                        <select class="custom-select rank-select offset-1" id="desired-rank" name="desired-rank"  style="height:40px;width:158px;background-color:#acacac">
                                                                            <option value="1-6">Master</option>
                                                                            <option value="1-1">Diamond</option>
                                                                            <option value="2-1">Platinum</option>
                                                                            <option value="3-1" selected="">Gold</option>
                                                                            <option value="4-1" >Silver</option>
                                                                            <option value="5-1" >Bronze</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-10 col-md-offset-1">
                                                                        <select class="custom-select division-select offset-1" id="desired-division" name="desired-division"  style="height:40px;width:158px;background-color:#acacac;">
                                                                            <option value="2-1-1">Division I</option>
                                                                            <option value="2-1-2">Division II</option>
                                                                            <option value="2-1-3" selected="">Division III</option>
                                                                            <option value="2-1-4">Division IV</option>
                                                                            <option value="2-1-5">Division V</option>
                                                                        </select>
                                                                    </div>
                                                                </div>