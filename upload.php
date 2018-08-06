<?php





error_reporting(0); // PHP hatalarını gizle.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fileinname = basename($_FILES["filetoupload"]["name"]);
$filemovedir = "images/";
$fileinfo = new finfo(FILEINFO_MIME_TYPE);
if (false === $ext = array_search(
        $fileinfo->file($_FILES['filetoupload']['tmp_name']),
        array(
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
        ),
        true
    )){
        //İzin verilen dosya türü değilse çalıştır.
		echo '<div class="w3-tag w3-padding w3-round-large w3-red w3-center">
		      Hata: Bu izin verilen türde bir dosya değil.</div>';
		exit;
    }
$fileinfo2 = getimagesize($_FILES['filetoupload']['tmp_name']);
if ($fileinfo2['mime'] != 'image/jpeg' && 
    $fileinfo2['mime'] != 'image/png' && 
	$fileinfo2['mime'] != 'image/gif'){
		//İzin verilen dosya türü değilse çalıştır.
		echo '<div class="w3-tag w3-padding w3-round-large w3-red w3-center">
		      Hata: Bu izin verilen türde bir dosya değil.</div>';
		exit;
	}
if ($_FILES['filetoupload']['size'] > 10000000) {
        //İzin verilen dosya boyutu aşılmışsa çalıştır.
		echo '<div class="w3-tag w3-padding w3-round-large w3-red w3-center">
		      Hata: Bu izin verilen dosya boyutu aşıldı.</div>';
		exit;
    }
$fileintype = $_FILES['filetoupload']['type'];
$fileoutname = md5(mt_rand()).'.jpg';
 if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$filemovedir.$fileoutname)) {
include 'db.php';
	$imagedate =  date("Y-m-d H:i:s");
	$imageurl = $filemovedir.$fileoutname;
	$imagetype = $fileinfo2["mime"];
	$insertdb = "INSERT INTO hr_images (image_date, image_name, image_md5name, image_url, image_type)
            VALUES (
			        '$imagedate',
			        '$fileinname',
					'$fileoutname',
					'$imageurl',
					'$imagetype'
			       )";
	$conn->exec($insertdb);	   
include 'uploadend.php';
    } else {
		echo '<div class="w3-tag w3-padding w3-round-large w3-red w3-center">
		      Hata: Dosyanız bir hata sonucu yüklenemedi.</div>';
		exit;
    }
	



	
}//REQUEST_METHOD POST kontrol.
else{
echo "Hata: Bu işlem POST ile yapılmalıdır.";
exit;
}


?>