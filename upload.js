$('form').on('submit',function(e){
	e.preventDefault();

	$.ajax({
        url: 'upload.php', // Verileri Post Ettiğimiz dosya adı
        type: 'POST', // Form Metodumuz
        data: new FormData(this), // Form ile gelen verilerimiz
 contentType: false,
       cache: false,
 processData: false,
     success: function(data){
			// upload.php dosyamıza verilerin gönderildikten sonra işlem başarılı ise upload.php ile gelen sonuç değerini yazdıracağımız satır
			$('#result').html(data);
			$('form')[0].reset(); // İşlem başarılı olduktan sonra formu sıfırlar
     }	});

});