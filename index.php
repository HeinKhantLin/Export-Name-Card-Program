<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/style/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="export_txt.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Japanese Name 1</label>
				    <input type="text" class="form-control" name="japan_name1" id="jpn_name1" placeholder="Enter Japanese Name" onkeyup="auto_change(this,'#img_jpn_name1')">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Name 1</label>
				    <input type="text" class="form-control" name="name1" id="name1" placeholder="Enter Name" onkeyup="auto_change(this,'#img_name1')">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Position 1</label>
				    <input type="text" class="form-control" name="position1" id="position1" placeholder="Enter Position" onkeyup="auto_change(this,'#img_position1')">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Employee ID 1</label>
				    <input type="text" class="form-control" name="employee_id1" id="employee_id1" placeholder="Enter Employee ID" value="SGWT0013" onkeyup="auto_change(this,'#img_e_id_1')">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Photo 1</label>
				    <input type="file" class="form-control" name="photo1" id="photo1" onchange="readURL(this,'#pre_photo1');">
				  </div>	
				  <hr style="color: #000;">

				  <div class="form-group">
				    <label for="exampleInputEmail1">Japanese Name 2</label>
				    <input type="text" class="form-control" name="japan_name2" id="japan_name2" placeholder="Enter Japanese Name" onkeyup="auto_change(this,'#img_jpn_name2')">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Name 2</label>
				    <input type="text" class="form-control" name="name2" id="name2" placeholder="Enter Name" onkeyup="auto_change(this,'#img_name2')">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Position 2</label>
				    <input type="text" class="form-control" name="position2" id="position2" placeholder="Enter Position" onkeyup="auto_change(this,'#img_position2')">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Employee ID 2</label>
				    <input type="text" class="form-control" name="employee_id2" id="employee_id2" placeholder="Enter Employee ID" value="SGWT0013" onkeyup="auto_change(this,'#img_e_id_2')">
				  </div>	
				  <div class="form-group">
				    <label for="exampleInputPassword1">Photo 2</label>
				    <input type="file" class="form-control" name="photo2" id="photo2" onchange="readURL(this,'#pre_photo2');">
				  </div>	
					
				  <button type="submit" class="btn btn-primary">Submit</button>
				  <button type="button" class="btn btn-primary" id="export" onclick="download_card()">Export JPG</button>
				</form>
			</div>
			<div class="col-md-6">
				<div class="staff_card" crossOrigin="Anonymous">
					<div class="row">
						<div class="col-md-4 pre_photo1_div">
							<img id="pre_photo1" src="#">
						</div>
						<div class="info1">
							
							<p type="text" name="img_jpn_name1" id="img_jpn_name1"></p>
							<p type="text" name="img_name1" id="img_name1"></p>
							<p type="text" name="img_position1" id="img_position1"></p>
						</div>
						<div class="info1_id">
							<p type="text" name="img_e_id_1" id="img_e_id_1"></p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4 pre_photo2_div">
							<img id="pre_photo2" src="#">
						</div>
						<div class="info2">
							<p type="text" name="img_jpn_name2" id="img_jpn_name2"></p>
							<p type="text" name="img_name2" id="img_name2"></p>
							<p type="text" name="img_position2" id="img_position2"></p>
						</div>
						<div class="info2_id">
							<p type="text" name="img_e_id_2" id="img_e_id_2"></p>
						</div>
					</div>
					
				</div>
			</div>
			<div id="previewImage"></div>
		</div>
	</div>
<script src="public/js/jquery.js"></script>
<script src="public/js/index.js"></script>
<script src="public/js/html2canvas.js"></script>
<script src="public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>