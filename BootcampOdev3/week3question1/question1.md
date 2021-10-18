# SORULAR
* Symfony kullanmanın avantajları nedir? Kendi cümlelerinizle açıklayınız.
* Symfony ile environment (ortam) ayarlaması nasıl yapılır?
* Yeni bir Symfony projesi oluşturmak için kullanılar composer komutu nedir?
* Laravel framework ve Symfony framework arasındaki temel farklardan iki tanesini yazınız.
---
# CEVAPLAR

* ### 1) Symfony Kullanmanın Faydaları
  Symfony bir php framework'udur. Amacı; geliştireceğimiz uygulamanın iskeletini hazır vererek düzenli ve takım çalışmasına uyumlu bir geliştirme yapmamızı sağlamaktır. Symfony kullanmanın avantajları ise iş yükünün azalması, iş bölümlerinin daha belirli olması(back-end, front-end ayırımı) birden fazla geliştirici bir uygulama geliştirirken framework'te her şeyin yerinin belli olmasından dolayı karışıklığın önlenmesi, hali hazırda Symfony'nin geliştirilmeye ve açıklarının kapatılmaya SensioLabs şirketi tarafından devam edilmesi çok tercih edilmesinin başlıca sebepleridir.
----

* ### 2) Ortam (Environment) kavramı

Ortam (Environment), uygulamanızı çalıştırmak için kullanılan bir grup yapılandırmayı temsil eder. Symfony varsayılan olarak iki ortam tanımlar:

    dev: Uygulamayı yerel olarak geliştirirken kullanılır.

    prod: Uygulamayı çalıştırırken kullanılır.

Tarayıcınızda Symfony uygulamanızı dev ve prod çalıştırmak için aşağıdaki ifadeleri kullanabilirsiniz:

    dev ortamında uygulama çalıştırmak için: http://localhost:8000

    prod ortamında uygulama çalıştırmak için: http://localhost:8000/app.php

    Her zaman dev ortamında uygulama çalıştırmak için: http://localhost:8000/app_dev.php

Ortamlar arasındaki en büyük fark, dev ortamı geliştiriciye çok fazla bilgi sağlaması için optimize edildiğinden daha kötü uygulama performansına neden olmaktadır. Bu arada, prod ortamı, hata ayıklama bilgilerinin yanı sıra web hata ayıklama araç çubuğu da devre dışı bırakıldığından, en iyi performansı elde etmek için optimize edilmiştir.

Ortamlar arasındaki diğer fark, uygulamayı çalıştırmak için kullanılan yapılandırma seçenekleridir. Dev ortamına eriştiğinizde, Symfony app/config/config_dev.yml yapılandırma dosyasını yükler. prod ortamına eriştiğinizde Symfony app/config/config_prod.yml dosyasını yükler.

Genellikle, ortamlar çok miktarda yapılandırma seçeneği paylaşır. Bu nedenle, ortak konfigürasyonunuzu config.yml dosyasına koyup, gerektiğinde her ortam için özel konfigürasyon dosyasını geçersiz kılarsınız:


    # app/config/config_dev.yml
    imports:
    - { resource: config.yml }

    framework:
    router:
        resource: '%kernel.root_dir%/config/routing_dev.yml'
        strict_requirements: true
    profiler: { only_exceptions: false }

    web_profiler:
    toolbar: true
    intercept_redirects: false

    monolog:
    handlers:
        main:
            type: stream
            path: '%kernel.logs_dir%/%kernel.environment%.log'
            level: debug
            channels: ['!event']
        console:
            type: console
            channels: ['!event', '!doctrine']
        # uncomment to get logging in your browser
        # you may have to allow bigger header sizes in your Web server configuration
        #firephp:
        #    type: firephp
        #    level: info
        #chromephp:
        #    type: chromephp
        #    level: info

    #swiftmailer:
    #    delivery_addresses: ['me@example.com']
Bu örnekte, config_dev.yml yapılandırma dosyası, ortak config.yml dosyasını içeri aktarır ve ardından kendi seçenekleriyle mevcut tüm web hata ayıklama araç çubuğu yapılandırmasını geçersiz hale getirir.

[Kaynak](https://www.bilgigunlugum.net/webprog/symfony/symfony_temel)

* ### 2.1) Ortam Ayarlaması Nasıl Yapılır?

  * Symfony test ortamı ve canlı ortam ayarları

 Sunucuda:

app.php dosyasında aşağıdaki kod true

      1 $kernel = new AppKernel('prod', true);
    
 app_dev.php dosyasında

         1  $kernel = new AppKernel('dev', false);
  false olacak

 test ortamında yani localde tam false olan kısımları true , true olan kısımları false yapacaksınız.

 Aşağıdaki gibi olacak

 app.php dosyasında aşagıdaki kod true

    1 $kernel = new AppKernel('prod', false);
app_dev.php dosyasında

    1 $kernel = new AppKernel('dev', true);
    

[Kaynak2.1](https://www.tasarimrehberi.net/symfony-test-ortami-ve-canli-ortam-ayarlari/)

---
* ### 3) Yeni Bir Symfony Projesi Oluşturmak İçin Kullanılan Composer Kodu

ilgili kod kullanımı şu şekildedir;
     
      composer create-project symfony/skeleton:"^4.4" projeAdi
---
* ### 4) Symfony İle Laravel Arasındaki Temel Farklardan İki Tanesini Yazınız

* #### 4.1) Performans ve Ölçeklenebilirlik

Performans ve ölçeklenebilirlik, her web uygulamasının başarısının arkasındaki iki temel faktördür. Laravel, önbellek görünümleri için bir dizi birleşik API'ye sahipken, Symfony varsayılan olarak kaynak kodunu ve görünümleri önbelleğe alır. Symfony'nin daha uzun web sitesi yükleme süresine sahip olmasının nedeni budur.

Laravel'deki web siteleri için ortalama yükleme süresi yaklaşık 60 milisaniyedir, Symfony'nin yükleme süresi ise yaklaşık 250 milisaniyedir.
  * #### 4.2) Veritabanı Desteği
   Symfony veritabanı geçişleri otomatiktir. Ancak geliştiricilerin verilen kodda belirli alanları tanımlaması gerekir. Öte yandan, Laravel veritabanı geçişlerini kullanır ve alanları tanımlamaya gerek yoktur.

ORM destekli veritabanları ile bu iki PHP çerçevesi, veri işlemeyi ve veri işlemeyi kolaylaştırır.

Symfony, veritabanı desteği için birkaç seçenek daha sunar, örneğin:

* MySQL
* Oracle
* Çiseleme
* SQL Server
* PostgreSQL
* SQLite
* SAP Sybase SQL Anywhere

Laravel bunlardan sadece birkaçını destekler:

* MySQL
* PostgreSQL
* SQLite
* SQL Server

Bu seçeneklerle görebileceğiniz gibi Symfony, Laravel'den daha fazla veritabanını desteklemektedir. Bu nedenle, veri işleme ve veri yönetimi Symfony ile çok daha basit hale geldi. Ancak Laravel'in işlevselliği, hantal ve büyük kod bloklarından kaçmak için büyük bir fırsattır.

[Kaynak](https://www.argenova.com.tr/laravel-vs-symfony)