<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bannereffect
	.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


</head>
<body>
	<h1>
	<div class="visible-xs hidden-sm hidden-md hidden-lg hidden-xl d-block d-sm-none">xs</div>
	<div class="hidden-xs visible-sm hidden-md hidden-lg hidden-xl d-none d-sm-block d-md-none">sm</div>
	<div class="hidden-xs hidden-sm visible-md hidden-lg hidden-xl d-none d-md-block d-lg-none">md</div>
	<div class="hidden-xs hidden-sm hidden-md visible-lg hidden-xl d-none d-lg-block d-xl-none">lg</div>
	<div class="hidden-xs hidden-sm hidden-md hidden-lg visible-xl d-none d-xl-block">xl</div>
</h1>
	<div id="demo">123</div>
	<div class="hidden-xs hidden-sm hidden-md hidden-lg visible-xl d-none d-lg-block">
		<div class="main-banner" id="main-banner">
			<div class="imgbanbtn imgbanbtn-prev" id="imgbanbtn-prev"> </div>
			<div class="imgban" id="imgban3">
			</div>
			<div class="imgban" id="imgban2">
			</div>
			<div class="imgban" id="imgban1">
			</div>
			<div class="imgbanbtn imgbanbtn-next" id="imgbanbtn-next"> </div>
		</div>
	</div>



<!-- 		<div id="disp1"/></div>
		<div id="disp2"/></div>
		<div id="disp3"/></div>
		<div id="disp4"/></div>

		<div id="disp5"/></div>
		<div id="disp6"/></div>
		<div id="disp7"/></div>
		<div id="disp8"/></div> -->

<div class="visible-xs hidden-sm hidden-md hidden-lg hidden-xl d-block d-lg-none">
	<div class="main-banner2" id="main-banner2">
	    <div class="imgbanbtn2 imgbanbtn-prev2" id="imgbanbtn-prev2"> </div>

	    <div class="imgban2" id="imgban6">
	    </div>
	    <div class="imgban2" id="imgban5">
	    </div>
	    <div class="imgban2" id="imgban4">
	    </div>

	    <div class="imgbanbtn2 imgbanbtn-next2" id="imgbanbtn-next2"> </div>
	</div>
</div>

		


	<script >



	var bannerStatus = 1;
	var bannerStatus2 = 4;
	var bannerTimer = 2000;

	// window.onload= function(){
		
		
	// }


var x = 0;
$(document).ready(function(){
  $(window).resize(function(){
  	myf();
  });
  
	myf();
 	bannerLoop3();
	bannerLoop();
});

	function myf(){
		var w = window.innerWidth;
		var h = window.innerHeight;
		var x = document.getElementById("demo");
		x.innerHTML = "Browser inner window width: " + w + ", height: " + h + ".";
	}
	var startBanLoop = setInterval(function(){
		bannerLoop();
	},bannerTimer);
	var startBanLoop2 = setInterval(function(){
		bannerLoop3();
	},bannerTimer);

	document.getElementById("main-banner").onmouseenter=function(){
		clearInterval(startBanLoop);
	}
	document.getElementById("main-banner2").onmouseenter=function(){
		clearInterval(startBanLoop2);
	}

	document.getElementById("main-banner").onmouseleave=function(){
	startBanLoop = setInterval(function(){
		bannerLoop();
	},bannerTimer);
	}
		document.getElementById("main-banner2").onmouseleave=function(){
	startBanLoop2 = setInterval(function(){
		bannerLoop3();
	},bannerTimer);
	}

	document.getElementById("imgbanbtn-prev").onclick = function(){
		bannerLoop2();
	}
	document.getElementById("imgbanbtn-next").onclick = function(){
		bannerLoop();
	}

	document.getElementById("imgbanbtn-prev2").onclick = function(){
		bannerLoop4();
	}
	document.getElementById("imgbanbtn-next2").onclick = function(){
		bannerLoop3();
	}

	function bannerLoop3()
	{
		if (bannerStatus2 === 4)
		{
			document.getElementById("imgban5").style.opacity = "0";
			setTimeout(function(){
				document.getElementById("imgban4").style.right = "0px";
				document.getElementById("imgban4").style.zIndex = "1000";
				document.getElementById("imgban5").style.right = "-1200px";
				document.getElementById("imgban5").style.zIndex = "1500";
				document.getElementById("imgban6").style.right = "1200px";
				document.getElementById("imgban6").style.zIndex = "500";			 
		}, 500);
			
			setTimeout(function(){
				document.getElementById("imgban5").style.opacity = "1";
			}, 1000);
			bannerStatus2 = 5;
		}
			else if (bannerStatus2 === 5)
		{
			document.getElementById("imgban6").style.opacity = "0";
			setTimeout(function(){
				document.getElementById("imgban5").style.right = "0px";
				document.getElementById("imgban5").style.zIndex = "1000";
				document.getElementById("imgban6").style.right = "-1200px";
				document.getElementById("imgban6").style.zIndex = "1500";
				document.getElementById("imgban4").style.right = "1200px";
				document.getElementById("imgban4").style.zIndex = "500";
			}, 500);
			
			setTimeout(function(){
				document.getElementById("imgban6").style.opacity = "1";
			}, 1000);
			bannerStatus2 = 6;
		}
		else if (bannerStatus2 === 6)
		{
			document.getElementById("imgban4").style.opacity = "0";
			setTimeout(function(){
				document.getElementById("imgban6").style.right = "0px";
				document.getElementById("imgban6").style.zIndex = "1000";
				document.getElementById("imgban4").style.right = "-1200px";
				document.getElementById("imgban4").style.zIndex = "1500";
				document.getElementById("imgban5").style.right = "1200px";
				document.getElementById("imgban5").style.zIndex = "500";
			}, 500);
			
			setTimeout(function(){
				document.getElementById("imgban4").style.opacity = "1";
			}, 1000);
			bannerStatus2 = 4;
		}
		var x=document.getElementById("imgban4").style.opacity;
		var y=document.getElementById("imgban5").style.opacity;
		var z=document.getElementById("imgban6").style.opacity;
  		
  		document.getElementById("disp5").innerHTML = "banner4~~"+x;
  		document.getElementById("disp6").innerHTML = "banner5~~"+y;
  		document.getElementById("disp7").innerHTML = "banner6~~"+z;
  		document.getElementById("disp8").innerHTML = "bannerStatus2 ~~"+bannerStatus2 ;
	}
	function bannerLoop()
	{
		if (bannerStatus === 1)
		{
			document.getElementById("imgban1").style.opacity = "0.8";
			document.getElementById("imgban2").style.opacity = "0";
			document.getElementById("imgban3").style.opacity = "0.2";
			setTimeout(function(){
				document.getElementById("imgban1").style.right = "0px";
				document.getElementById("imgban1").style.zIndex = "1500";
				document.getElementById("imgban2").style.right = "0px";
				document.getElementById("imgban2").style.zIndex = "1000";
				document.getElementById("imgban3").style.right = "0px";
				document.getElementById("imgban3").style.zIndex = "500";

				 
			}, 500);
			
			setTimeout(function(){
				document.getElementById("imgban1").style.opacity = "1";

			}, 1000);
			bannerStatus = 2;
		}
			else if (bannerStatus === 2)
		{
			document.getElementById("imgban2").style.opacity = "0.8";
			document.getElementById("imgban1").style.opacity = "0.2";
			document.getElementById("imgban3").style.opacity = "0";
			setTimeout(function(){
				document.getElementById("imgban2").style.right = "0px";
				document.getElementById("imgban2").style.zIndex = "1500";
				document.getElementById("imgban3").style.right = "0px";
				document.getElementById("imgban3").style.zIndex = "1000";
				document.getElementById("imgban1").style.right = "0px";
				document.getElementById("imgban1").style.zIndex = "500";
			}, 500);
			
			setTimeout(function(){
				document.getElementById("imgban2").style.opacity = "1";
			}, 500);
			bannerStatus = 3;
		}
		else if (bannerStatus === 3)
		{
			document.getElementById("imgban1").style.opacity = "0";
			document.getElementById("imgban2").style.opacity = "0.2";
			document.getElementById("imgban3").style.opacity = "0.8";
			setTimeout(function(){
				document.getElementById("imgban3").style.right = "0px";
				document.getElementById("imgban3").style.zIndex = "1500";
				document.getElementById("imgban1").style.right = "0px";
				document.getElementById("imgban1").style.zIndex = "1000";
				document.getElementById("imgban2").style.right = "0px";
				document.getElementById("imgban2").style.zIndex = "500";
			},500);
			
			setTimeout(function(){
				document.getElementById("imgban3").style.opacity = "1";
			}, 1000);
			bannerStatus = 1;
		}
		var x=document.getElementById("imgban1").style.opacity;
		var y=document.getElementById("imgban2").style.opacity;
		var z=document.getElementById("imgban3").style.opacity;
  		
  		document.getElementById("disp1").innerHTML = "banner1~~"+x;
  		document.getElementById("disp2").innerHTML = "banner2~~"+y;
  		document.getElementById("disp3").innerHTML = "banner3~~"+z;
  		document.getElementById("disp4").innerHTML = "bannerStatus ~~"+bannerStatus ;
	}
	function bannerLoop4()
	{
		if (bannerStatus2 === 4)
		{
			document.getElementById("imgban5").style.opacity = "1";
			document.getElementById("imgban4").style.opacity = "0";
		
			setTimeout(function(){
				document.getElementById("imgban5").style.right = "0px";
				document.getElementById("imgban5").style.zIndex = "1000";
				document.getElementById("imgban4").style.right = "1200px";
				document.getElementById("imgban4").style.zIndex = "1500";
				document.getElementById("imgban6").style.right = "-1200px";
				document.getElementById("imgban6").style.zIndex = "500";
				
			}, 500);
			
			// setTimeout(function(){
			// 	document.getElementById("imgban3").style.opacity = "1";
			// }, 1000);
			bannerStatus2 = 6;
		}
			else if (bannerStatus2 === 5)
		{
			document.getElementById("imgban5").style.opacity = "0";
			document.getElementById("imgban6").style.opacity = "1";
			
			setTimeout(function(){
				document.getElementById("imgban6").style.right = "0px";
				document.getElementById("imgban6").style.zIndex = "1000";
				document.getElementById("imgban5").style.right = "1200px";
				document.getElementById("imgban5").style.zIndex = "1500";
				document.getElementById("imgban4").style.right = "-1200px";
				document.getElementById("imgban4").style.zIndex = "500";
				
			}, 500);
			
			// setTimeout(function(){
			// 	document.getElementById("imgban1").style.opacity = "1";
			// }, 1000);
			bannerStatus2 = 4;
		}
		else if (bannerStatus2 === 6)
		{
			document.getElementById("imgban6").style.opacity = "0";
			document.getElementById("imgban4").style.opacity = "1";
			
			setTimeout(function(){
				document.getElementById("imgban4").style.right = "0px";
				document.getElementById("imgban4").style.zIndex = "1000";
				document.getElementById("imgban6").style.right = "1200px";
				document.getElementById("imgban6").style.zIndex = "500";
				document.getElementById("imgban5").style.right = "-1200px";
				document.getElementById("imgban5").style.zIndex = "1500";
				
			}, 500);
			
			// setTimeout(function(){
			// 	document.getElementById("imgban2").style.opacity = "1";
			// }, 1000);
			bannerStatus2 = 5;
		}
		var x=document.getElementById("imgban4").style.opacity;
		var y=document.getElementById("imgban5").style.opacity;
		var z=document.getElementById("imgban6").style.opacity;
  		
  		document.getElementById("disp1").innerHTML = "banner1~~"+x;
  		document.getElementById("disp2").innerHTML = "banner2~~"+y;
  		document.getElementById("disp3").innerHTML = "banner3~~"+z;
  		document.getElementById("disp4").innerHTML = "bannerStatus~~"+bannerStatus ;

	}
	function bannerLoop2()
	{
		if (bannerStatus === 1)
		{
			document.getElementById("imgban2").style.opacity = "1";
			document.getElementById("imgban1").style.opacity = "0";
		
			setTimeout(function(){
				document.getElementById("imgban2").style.right = "0px";
				document.getElementById("imgban2").style.zIndex = "1000";
				document.getElementById("imgban1").style.right = "1200px";
				document.getElementById("imgban1").style.zIndex = "1500";
				document.getElementById("imgban3").style.right = "-1200px";
				document.getElementById("imgban3").style.zIndex = "500";
				
			}, 500);
			
			// setTimeout(function(){
			// 	document.getElementById("imgban3").style.opacity = "1";
			// }, 1000);
			bannerStatus = 3;
		}
			else if (bannerStatus === 2)
		{
			document.getElementById("imgban2").style.opacity = "0";
			document.getElementById("imgban3").style.opacity = "1";
			
			setTimeout(function(){
				document.getElementById("imgban3").style.right = "0px";
				document.getElementById("imgban3").style.zIndex = "1000";
				document.getElementById("imgban2").style.right = "1200px";
				document.getElementById("imgban2").style.zIndex = "1500";
				document.getElementById("imgban1").style.right = "-1200px";
				document.getElementById("imgban1").style.zIndex = "500";
				
			}, 500);
			
			// setTimeout(function(){
			// 	document.getElementById("imgban1").style.opacity = "1";
			// }, 1000);
			bannerStatus = 1;
		}
		else if (bannerStatus === 3)
		{
			document.getElementById("imgban3").style.opacity = "0";
			document.getElementById("imgban1").style.opacity = "1";
			
			setTimeout(function(){
				document.getElementById("imgban1").style.right = "0px";
				document.getElementById("imgban1").style.zIndex = "1000";
				document.getElementById("imgban3").style.right = "1200px";
				document.getElementById("imgban3").style.zIndex = "500";
				document.getElementById("imgban2").style.right = "-1200px";
				document.getElementById("imgban2").style.zIndex = "1500";
				
			}, 500);
			
			// setTimeout(function(){
			// 	document.getElementById("imgban2").style.opacity = "1";
			// }, 1000);
			bannerStatus = 2;
		}
		var x=document.getElementById("imgban1").style.opacity;
		var y=document.getElementById("imgban2").style.opacity;
		var z=document.getElementById("imgban3").style.opacity;
  		
  		document.getElementById("disp1").innerHTML = "banner1~~"+x;
  		document.getElementById("disp2").innerHTML = "banner2~~"+y;
  		document.getElementById("disp3").innerHTML = "banner3~~"+z;
  		document.getElementById("disp4").innerHTML = "bannerStatus~~"+bannerStatus ;

	}
</script>

</body>
</html>