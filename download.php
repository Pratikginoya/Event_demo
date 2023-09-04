

<?php 

$con = mysqli_connect("localhost","root","","eventdata");

if(isset($_POST['submit']))
	
	{
		
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$image = $_FILES['image']['name'];
		$path = 'image/'.$image;
		move_uploaded_file($_FILES['image']['tmp_name'], $path);

		$query = "insert into `user`(`name`,`contact`,`image`)values('$name','$contact','$image')";
		$res = mysqli_query($con,$query);
		$id = mysqli_insert_id($con);

	}



		$sql_select = "select * from user where id=$id";
		$data = mysqli_query($con,$sql_select);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		*{
		box-sizing: border-box;
	}
body {
	font-family: Arial, Helvetica,
	sans-serif;
	padding: 10px 0;
	background-image: linear-gradient(#003366,#021a33);
/*	height: 100vh;*/
	overflow-x: hidden;
	margin: 0;

}

.main_title{
	text-align: center;
	color: #ffbc06;
	margin-bottom: 20px;
}
#html-content-holder{
	width: 720px;	
	margin: auto;
}
		.parent{
			position: relative;
			width: 720px;
			height: 900px;
		}
		.main_bg{
			width: 100%;
			object-fit: cover;
			height: 100%;
			position: relative;
			border: 3px white solid;
/*			z-index: 1;*/
		}
		.user_data{
			position: absolute;
			top: 350px;
		    right: 50px;
		    text-align: center;
		}
		.user{
		    overflow: hidden;		    
		    border: 5px white solid;
		    height: 150px;
		    width: 150px;
			object-fit: cover;
			position: relative;
			z-index: 0;
		}
		.user_name{
		    text-align: center;
		    color: white;
		    font-family: Arial;
		    font-size: 18px;
		    z-index: 3;
		}
		.down_btn{
			display: inline-block;
			padding: 15px 30px;
			background-color: #ffbc06;
			text-decoration: none;
			color: white;
			font-weight: bold;
		}
		.btn{
			text-align: center;
			margin-bottom: 30px;
		}
		@media screen and (max-width:575px){
			#html-content-holder{
				width: 415px;	
				margin: auto;
			}
			.parent{
				position: relative;
				width: 415px;
				height: 519px;
			}
			.user_data{
				top: 215px;
			    right: 40px;

			}
			.user{
			    height: 80px;
			    width: 80px;
		    	border: 3px white solid;
			}
			.user_name{
				font-size: 12px;
			}
		}
		@media screen and (min-width:575px) and (max-width:767px){
			.user_data{
				top: 366px;
			    right: 58px;

			}
			.user{
			    height: 150px;
			    width: 150px;
		    	border: 3px white solid;
			}
			.user_name{
				font-size: 18px;
			}
		}
		@media screen and (min-width:768px) and (max-width:991px){
			#html-content-holder{
				width: 540px;	
				margin: auto;
			}
			.parent{
				position: relative;
				width: 540px;
				height: 675px;
			}
			.user_data{
				top: 260px;
			    right: 30px;

			}
			.user{
			    height: 120px;
			    width: 120px;
		    	border: 3px white solid;
			}
			.user_name{
				font-size: 16px;
			}
		}
		@media print {
			
		}

	</style>
</head>
<body>
	<h1 class="main_title">CYBER SAFE SURAT</h1>
	<div class="btn">
		<a id="btn-Convert-Html2Image" class="down_btn" href="javascript:void(0)">Download</a>
	</div>
	<?php while($row = mysqli_fetch_assoc($data)) { ?>
	<div id="html-content-holder" style="">
		<div class="parent">
			<img src="image/1.jpg" width="100%" class="main_bg">
			<div class="user_data">
				<img src="image/<?php echo $row['image']; ?>" class="user" >
				<h2 class="user_name" id="user_name" attr-name="<?php echo $row['name']; ?>">Mr. <?php echo $row['name']; ?></h2>
			</div>
		</div>
    	</div>
    <?php } ?>
    
    <br/>
   
 </div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script type="text/javascript" src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
	<script>
		$(document).ready(function(){

	
var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable

	$("#btn-Convert-Html2Image").on('click', function () {

		var user_name = $('#user_name').attr('attr-name');

		html2canvas(element, {
         onrendered: function (canvas) {
                getCanvas = canvas;
             }
         });

    var imgageData = getCanvas.toDataURL("image/jpg");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/jpg/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", user_name+".jpg").attr("href", newData);
	});

});
	</script>
</body>
</html>




