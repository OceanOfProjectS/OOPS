<html>
<head>
	<title>Sudoku</title>
	<meta name="viewport" content="width=device-width,initial-scale:0.1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Exo+2&amp;display=swap" rel="stylesheet">
	<script type="text/javascript" src="../lib/jquery.min.js"></script>
		<style type="text/css">
		*{
			padding: 0px;
			margin:0px;
		}
		::-webkit-scrollbar{
			width:5px;
		}
		::-webkit-scrollbar-thumb{
			background-color:transparent;
		}
		::-webkit-scrollbar-track{
			background:transparent; 
		}
		body{
			background:url('sudoku.jpg');
			background-position:center;
			background-size: cover; 
		}
		section{
			height:100vh;
			width:100%;
			display: flex;
			background-color:rgba(0,0,0,.7);
			justify-content: center;align-items: center;
		}
		section div{
			text-align: center;
			width:50%;
		}
		#dis_time{
			color:#ddd;
			padding:10px 0px 
		}
		section div input{
			border:none;
			outline: none;
			height:30px; 
			width:30px;
			margin:1px; 
			font-size:15pt;  
			text-align: center;
			border:1px solid transparent;

		}
		section div input:hover{
			border:1px solid #000;

		}
		.allowed{
			cursor: pointer;
		}
		.notallowed{
			cursor:not-allowed; 
			background-color:rgba(256,256,256,.7); 
			border:none;
		}
		.bttn_sec{
			width:100%;
			padding:20px 0px 
		}
		.bttn_sec button{
			outline: none;
			border:none;
			font-size:10pt; 
			padding:3px 7px;
			background-color:#ddd; 
}		
		.bttn_sec button:hover{
			background-color:#555;
			cursor:pointer;
			color: #ddd  
		}

		@media only screen and (max-width:600px){
			section div input{
				height:15px;
				width:15px;
				font-size:8pt;  
			}
		}
		@media only screen and (max-width:350px){
			section div{
				width:100%;
			}
		.bttn_sec button{
			font-size:8pt; 
			padding:3px 7px; 
			}
		}
@media only screen and (max-width:160px){
	section div{
		font-size:5pt; 
	}
			section div input{
				height:10px;
				width:10px;
				font-size:5pt;  
			}
			.bttn_sec button{
			font-size:5pt; 
			padding:2px 5px; 
			}
		}
	</style>
</head>
<body>
	<section>
		<div>
			<span class="fa fa-clock-o" style="color:#ddd"></span><input value="text" id="dis_time" value="00:00" style="width:60px;color:#ddd;background:transparent;border:none;outline:none;cursor: pointer;" readonly="true"><br><br>
		<!-- row 1 -->
		<input type="text" name="nr1"  class="notallowed" style="border-color:transparent" id="nr1"    value="5" disabled="true"><input type="text" name="nr2"  class="notallowed" style="border-color:transparent" value="3" class="notallowed" id="nr2" disabled="true" ><input type="text" name="nr3" id="nr3" class="allowed"><input type="text" name="nr4" id="nr4"><input type="text" name="nr5"  id="nr5" class="notallowed" style="border-color:transparent" disabled="true" value="7"  ><input type="text" name="nr6" class="allowed" id="nr6"  ><input type="text" name="nr7"  class="allowed"  id="nr7"><input type="text" name="nr8"  class="allowed" id="nr8"><input type="text" name="nr9" class="allowed" id="nr9"  ><br>

<!-- row 2 -->
		<input type="text" name="nr10" id="nr10" class="notallowed" style="border-color:transparent" disabled="true" value="6"><input type="text" name="nr11" class="allowed" id="nr11" ><input type="text" name="nr12" id="nr12" ><input type="text" name="nr13" id="nr13" class="notallowed" style="border-color:transparent" disabled="true" value="1"><input type="text" name="nr14" id="nr14"  class="notallowed" style="border-color:transparent" disabled="true" value="9" ><input type="text" name="nr15" id="nr15" class="notallowed" style="border-color:transparent" disabled="true" value="5"><input type="text" name="nr16" id="nr16" class="allowed"><input type="text" name="nr17" class="allowed" id="nr17"  ><input type="text" name="nr18" class="allowed" id="nr18"   /><br>

<!-- row 3 -->
		<input type="text" name="nr19"  class="allowed" id="nr19"><input type="text" name="nr20"  class="notallowed" style="border-color:transparent" id="nr20"   value="9" disabled="true"><input type="text" name="nr21" id="nr21" class="notallowed" style="border-color:transparent" disabled="true" value="8"><input type="text" name="nr22" class="allowed" id="nr22"  ><input type="text" name="nr23" id="nr23"><input type="text" name="nr24" class="allowed" id="nr24"  ><input type="text" name="nr25" class="allowed" id="nr25"  ><input type="text" name="nr26" id="nr26" class="notallowed" style="border-color:transparent" disabled="true" value="6"><input type="text" name="nr27" id="nr27"><br>

<!-- row 4 -->
		<input type="text" name="nr28" id="nr28"  class="notallowed" style="border-color:transparent" disabled="true" value="8"><input type="text" name="nr29"id="nr29"><input type="text" name="nr30" id="nr30"><input type="text" name="nr31" id="nr31"><input type="text" name="nr32" id="nr32" class="notallowed" style="border-color:transparent" disabled="true" value="6"><input type="text" name="nr33" class="allowed" id="nr33"><input type="text" name="nr34" id="nr34"><input type="text" name="nr35" class="allowed" id="nr35"  ><input type="text" name="nr36" id="nr36" class="notallowed" style="border-color:transparent" disabled="true" value="3"><br>

<!-- row 5 -->
		<input type="text" name="nr37"  class="notallowed" style="border-color:transparent" id="nr37"   value="4" disabled="true"><input type="text" name="nr38" class="allowed" id="nr38"><input type="text" name="nr39" id="nr39"><input type="text" name="nr40" id="nr40" class="notallowed" style="border-color:transparent" disabled="true" value="8"><input type="text" name="nr41" class="allowed" id="nr41"><input type="text" name="nr42"  class="notallowed" style="border-color:transparent" id="nr42"   value="3" disabled="true"><input type="text" name="nr43" class="allowed" id="nr43"  ><input type="text" name="nr44" id="nr44"><input type="text" name="nr45" id="nr45" class="notallowed" style="border-color:transparent" disabled="true" value="1"><br>

<!-- row 6 -->
		<input type="text" name="nr46" id="nr46" class="notallowed" style="border-color:transparent" disabled="true" value="7"><input type="text" name="nr47" id="nr47"><input type="text" name="nr48" id="nr48" class="allowed"><input type="text" name="nr49" class="allowed" id="nr49"><input type="text" name="nr50"  class="notallowed" style="border-color:transparent" id="nr50"   value="2" disabled="true"><input type="text" name="nr51" class="allowed" id="nr51"  ><input type="text" name="nr52" class="allowed" id="nr52"><input type="text" name="nr53" class="allowed" id="nr53"><input type="text" name="nr54"  class="notallowed" style="border-color:transparent" id="nr54"   value="6" disabled="true"><br>

<!-- row 7 -->
		<input type="text" name="nr55" id="nr55"><input type="text" name="nr56" id="nr56" class="notallowed" style="border-color:transparent" disabled="true" value="6"><input type="text" name="nr57" class="allowed" id="nr57"><input type="text" name="nr58" class="allowed" id="nr58"><input type="text" name="nr59" id="nr59" class="allowed"><input type="text" name="nr60" class="allowed" id="nr60"><input type="text" name="nr61" id="nr61" class="notallowed" style="border-color:transparent" disabled="true" value="2"><input type="text" name="nr62" class="notallowed" style="border-color:transparent" id="nr62" value="8" disabled="true"><input type="text" name="nr63" id="nr63"><br>

<!-- row 8 -->
		<input type="text" name="nr64" class="allowed" id="nr64"><input type="text" name="nr65" class="allowed" id="nr65"><input type="text" name="nr66" class="allowed" id="nr66"><input type="text" name="nr67"  class="notallowed" style="border-color:transparent" id="nr67" value="4" disabled="true"><input type="text" name="nr68" class="notallowed" style="border-color:transparent" id="nr68"   value="1" disabled="true"><input type="text" name="nr69"  class="notallowed" style="border-color:transparent" id="nr69" value="9" disabled="true"><input type="text" name="nr70"  class="allowed" id="nr70"><input type="text" name="nr71" class="allowed" id="nr71"><input type="text" name="nr72" id="nr72" class="notallowed" style="border-color:transparent" disabled="true" value="5"><br>

<!-- row 9 -->
		<input type="text" name="nr73" class="allowed" id="nr73"><input type="text" name="nr74" class="allowed" id="nr74"><input type="text" name="nr75" class="allowed" id="nr75"><input type="text" name="nr76" class="allowed" id="nr76"><input type="text" name="nr77" id="nr77" class="notallowed" style="border-color:transparent" disabled="true" value="8"><input type="text" name="nr78" class="allowed" id="nr78"><input type="text" name="nr79" class="allowed" id="nr79"><input type="text" name="nr80" id="nr80" class="notallowed" style="border-color:transparent" disabled="true" value="7"><input type="text" name="nr81"  class="notallowed" style="border-color:transparent" id="nr81"   value="9" disabled="true">
		<div class="bttn_sec">
		<button onclick="location.reload()">Retry</button>
		<button onclick="check_value()">Check</button>

		</div>
</div>
	</section>
	<script type="text/javascript">
		var correct=0;
		var key_values=Array(
			0,5,3,4,6,7,8,9,1,2,
			6,7,2,1,9,5,3,4,8,
			1,9,8,3,4,2,5,6,7,
			8,5,9,7,6,1,4,2,3,
			4,2,6,8,5,3,7,9,1,
			7,1,3,9,2,4,8,5,6,
			9,6,1,5,3,7,2,8,4,
			2,8,7,4,1,9,6,3,5,
			3,4,5,2,8,6,1,7,9,
			);
		function check_value(){
			for(i=1;i<=81;i++){
				//$('#nr'+i).val(key_values[i]);
				if($('#nr'+i).val()==key_values[i]){
					correct+=1;
					$('#nr'+i).css('border','2px solid lime');
				}
				else{
					$('#nr'+i).css('border','2px solid red');
				}
			}	
				if (correct==81) {
					alert('You win the GAME !');
				}
		}
var m=0,s=0;
var t=setInterval(function(){
	if(s>=60){
		m+=1;
		s=0;
	}
	else{
		s+=1;
	}
	$('#dis_time').val(max(m)+':'+max(s))
	if(m==60){
		clearInterval(t)
		alert('Time Over!');
		location.reload();
	}
},1000);

function max(x){
	if (x<10) {
		return '0'+x;
	}
	else{
		return x;
	}
}
	</script>
</body>
</html>