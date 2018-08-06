# hizliresim
Ajax &amp; PHP Resim Yükleme

En basit hali ile hızlı bir şekilde resim yüklemeye olanak sağlayan HTML, JavaScript ve PHP ile oluşturulmuş resim yükleme script'idir.

Demo için: https://hizliresim.gq/ adresini ziyaret edebilirsiniz.

Script form ile kullanıcıdan alınan resimleri Jqery.Ajax aracılığı ile PHP'ye iletir, burada resim dosyası "images" klasörüne ve aynı zamanda veri tabanına çeşitli bilgiler ile birlikte kayıt edilir. 

Basit bir galeri sistemi mevcuttur. Bu sistem veritabanından aldığı verilere göre resimleri listeler.

Resimlerin tekil bir sayfada gösterimini sağlamak için "image" bağlantısı oluşturulmuştur. Bu bağlantı ile bir resim yüklendiğinde hizliresim.gq/image/resimadi şeklinde gidilerek sayfa içi olarak sergilenir. Doğrudan resim dosyasını görüntülemek için ise hizliresim.gq/images/resimadi şeklinde gidilir.
