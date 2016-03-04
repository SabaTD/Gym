//backgroundsliding
		/*var z=1;
		$(document).ready(function(){
			   $("#homepage img").css({"width":$(window).innerWidth()+"px", "height":$(window).innerHeight()+"px"});
			   //alert($("#homepage img").length);
			   setInterval(myfunc, 1000);
			   var wid=$("#homepage img").length*100;
			   $("#homepage").css({'width':wid+'%'});
			   
			})
			function myfunc()
			{
				
				$("#homepage").animate({left: -z*$("#homepage img").width()+"px"}, 10000);
				z++;

				if(z==$("#homepage img").length)
				{
					z=1;
					$("#homepage").animate({"left":"0px"}, -1000);
				}
			}*/
//facebooksliding

			$(document).ready(function(){
			    $("#red" || "#green").mouseenter(function(){
			        $("#green").animate({width:'235px'}, 500);
			        $("#ifr_gio").animate({width:'235px'}, 500);
			        $("#red").animate({left: '243px'}, 500);
			        $("#green").css({display:'block'});
			        $("#green").css({border:'solid'});
			        $("#green").css({borderColor:'black'});
			        $("#green").css({borderWidth:'3px'});
			    })
			    
			    $("#red" && "#green").mouseout(function(){
			    	$("#green").animate({width:'0px'}, "slow");
			        $("#red").animate({left: '-1px'}, "slow");
					$("#ifr_gio").animate({width:'0px'}, "slow");
			    	$("#green").css({border:'none'});
			    })
			})

//menuanimate

				$(document).ready(function(){
					T_F=0;
					$("#menu_click").click(function(){
					if(T_F==0)
					{
			    	
				        $("header").animate({width:'100%'}, 500);
				        $("#codrops-top1").animate({width:'100%'}, 500);
				        $("#logo").fadeIn(1000);
				        $("#menu").fadeIn(1000);
				        $("#menu_click").attr("src","photo/menu_close.png");
						$("#menu_icon").fadeIn(10000);
				        
				        T_F=1;
					}
					else
					{
						
			       		$("header").animate({width:'0px'}, 500);
			       		$("#codrops-top1").animate({width:'0px'}, 500);
			        	$("#logo").fadeOut();
			        	$("#menu").fadeOut();
			        	$("#menu_click").attr("src","photo/menu_icon1.png");
			        	
			        	T_F=0;
					}

				})//click function
			    	
			    	
			})//ready function
				function ID(x)
				{
					y=x;
					
				}
				
				$(document).ready(function()
				{
					$("#content").fadeIn(3500);
					$("#content").fadeOut(2000);
					
				})
				$(document).ready(function(){
				    	$("#click_green").mouseenter(function(){
				        $("#fade_img").fadeIn(50);
				        
				    	})//clickgreen-moouseenter
				    	$("#click_green").mouseleave(function(){
				        $("#fade_img").fadeOut(50);
				        
				    	})//clickgreen-mouseleave
				    	$("#fade_img").click(function(){
				    		
						$("#black_anim").animate({
							left: '5%',
							top: '5%',
				            height: '90%',
				            width: '90%'
					    })//blackanimateclick
				        $("#fade_img").fadeOut(50);
				        //$("#click_green").css({opacity:"0.5"});
				        $("#click_green").css({display:'none'});
				        $("#img").css({display:'block'});
				        $("#close_icon").fadeIn(1500);
				        $("#left_button").fadeIn(1500);
				        $("#right_button").fadeIn(1500);
				    	})//fadeimgclick
				    	$("#close").click(function(){
				        $("#black_anim").animate({
							left: '0px',
							top: '0px',
				            height: '20%',
				            width: '20%'
					    })//blackanimate
					    //$("#click_green").css({opacity:"1"});
					    $("#click_green").fadeIn(1000);
					    $("#img").css({display:'none'})
					    $("#close_icon").css({display:'none'});
				        $("#left_button").css({display:'none'});
				        $("#right_button").css({display:'none'});
				    })//blackanim-closeclick
				})//readyfunction
				







				/*$(document).ready(function(){
					$("#galery_click").click(function(){
					$("#content_gallery").animate({height:'800px'}, 500);
					
					})
				})*/
				/*function input_click()
				{
					document.getElementById("search_input").style.backgroundImage="none";
				}
				$(document).ready(function(){
					$("#cont").click(function(){
						$("search_input").css({backgroundImage : "url('photo/search.png')";})
					})
				})*/
			