<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>Greeeng!!!</title>
	<!-- <link rel="stylesheet" type="text/css" href="{{URL::asset('avat/css/imgareaselect-animated.css') }}" /> -->
	<!-- scripts -->
	<script type="text/javascript" src="{{ URL::asset('avat/js/jquery-pack.js') }}"></script> 
	<script type="text/javascript" src="{{ URL::asset('avat/js/jquery.imgareaselect.min.js') }}"></script>
	<style>
	a, a h1{
		font-family: Georgia, "Times New Roman", Times, serif;
		font-size: 1.2em;
		color: #645348;
		font-style: italic;
		text-decoration: none;
		font-weight: 100;
		padding: 10px;
	}
	body{
		font: 12px Arial,Tahoma,Helvetica,FreeSans,sans-serif;
		text-transform: inherit;
		color: #582A00;
		background: #E7EDEE;
		width: 100%;
		margin: 0;
		padding: 0;
	}
	.wrap{
		width: 800px;
		margin: 10px auto;
		padding: 10px 15px;
		background: white;
		border: 2px solid #DBDBDB;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		text-align: center;
		overflow: hidden;
	}
	img#uploadPreview{
		border: 0;
		border-radius: 3px;
		-webkit-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
		box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
		margin-bottom: 30px;
		overflow: hidden;
	}
	input[type="submit"]{
		border-radius: 10px;
		background-color: #61B3DE;
		border: 0;
		color: white;
		font-weight: bold;
		font-style: italic;
		padding: 6px 15px 5px;
		cursor: pointer;
	}
	</style>
		<style type="text/css">
		img{
			width:100%;
		}
	</style>
</head>
<body>
<!-- 
* Copyright (c) 2008 http://www.webmotionuk.com / http://www.webmotionuk.co.uk
* Date: 2008-11-21
* "PHP & Jquery image upload & crop"
* Ver 1.2
* Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
* Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
*
* THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND 
* ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED 
* WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. 
* IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
* INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, 
* PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS 
* INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, 
* STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF 
* THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*
-->
<div class="wrap">
<script type="text/javascript">
function preview(img, selection) { 
	var scaleX = 136 / selection.width; 
	var scaleY = 136 / selection.height; 
	
	$('#thumbnail + div > img').css({ 
		width: Math.round(scaleX * 500) + 'px', 
		height: Math.round(scaleY * 500) + 'px',
		marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px', 
		marginTop: '-' + Math.round(scaleY * selection.y1) + 'px' 
	});
	$('#x1').val(selection.x1);
	$('#y1').val(selection.y1);
	$('#x2').val(selection.x2);
	$('#y2').val(selection.y2);
	$('#w').val(selection.width);
	$('#h').val(selection.height);
} 

$(document).ready(function () { 
	$('#save_thumb').click(function() {
		var x1 = $('#x1').val();
		var y1 = $('#y1').val();
		var x2 = $('#x2').val();
		var y2 = $('#y2').val();
		var w = $('#w').val();
		var h = $('#h').val();
		if(x1=="" || y1=="" || x2=="" || y2=="" || w=="" || h==""){
			alert("You must make a selection first");
			return false;
		}else{
			return true;
		}
	});
}); 

$(window).load(function () { 
	$('#thumbnail').imgAreaSelect({ aspectRatio: '1:1', onSelectChange: preview }); 
});

</script>
<h1><a href="http://www.simultan-ugm.com">MAke Up!</a></h1>
		<div align="center">
			@foreach($data as $key)
			 <img src="{{URL::asset('avas')}}/{{$key->file_name}}" style="float: left; margin-right: 30px;" id="thumbnail" alt="Create Thumbnail" /> 
			
			<div style="border:1px #e5e5e5 solid; float:left; position:relative; overflow:hidden; margin-top: 37px; margin-left: 7px; width: 136px; height: 136px; ">
			
				<img src="{{URL::asset('avas')}}/{{$key->file_name}}" style="position: relative;" alt="Thumbnail Preview" />
			</div>
			<img src="{{URL::asset('avat')}}/frame.png" style="position: relative;float: left; top: 37px;left: -137px; width: 136px;" />
			@endforeach
			<br style="clear:both;"/>
			<form name="thumbnail" action="/bklass/index.php" method="post">
				<input type="hidden" name="x1" value="" id="x1" />
				<input type="hidden" name="y1" value="" id="y1" />
				<input type="hidden" name="x2" value="" id="x2" />
				<input type="hidden" name="y2" value="" id="y2" />
				<input type="hidden" name="w" value="" id="w" />
				<input type="hidden" name="h" value="" id="h" />
				</br><input type="submit" name="upload_thumbnail" value="Buat" id="save_thumb" /></br>
			</form>
		</div>
	<hr />
		</br>
	<form name="photo" enctype="multipart/form-data" action="/bklass/index.php" method="post">
	<input type="file" accept="image/jpeg" name="image" size="30" /> <input type="submit" name="upload" value="Upload" />
	</form>
</div>
</body>
</html>
