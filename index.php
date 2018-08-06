<?php include 'header.php'; ?>
	
	
	
	
	<div class="w3-card-4 w3-margin w3-center">
	
		<div class="w3-center w3-padding">
		<h3>Lütfen Yüklemek İstediğiniz Resim Dosyasını Seçiniz.</h3>
		<p><b>JPEG</b>,<b>PNG</b> ve <b>GIF</b> dosya formatları desteklenmektedir.<br>Dosya boyutu limiti <b>10 MB</b>'dır.<br>Aksi durumlarda hiç bir işlem yapılmayacaktır.</p>
			<div class="w3-cell w3-bar w3-margin">

			<form id="uploadimage" method="post" enctype="multipart/form-data">
			<input id="filetoupload" class="w3-input w3-border w3-border-blue" type="file" name="filetoupload" accept="image/*" required>
			<input id="submit" class="w3-input w3-blue" type="submit" name="submit">
			</form>
			
			</div>
				<div id="result" class="w3-center w3-margin"></div>
		
		
		<br>
		<br>
		
		
		</div>
		</div>
<?php include 'footer.php'; ?>