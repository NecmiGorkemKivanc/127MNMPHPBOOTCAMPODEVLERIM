# 1) REPOSITORY DESIGN PATTERN NEDIR?

* Repository Design Pattern, veritabanı sorumluluğunu üstlenen sınıfı tasarlarken bir standart üzerine oturtmayı hedefleyen ve Entity Framework gibi ORM (Object Relational Mapping) araçlarıyla kombine edilerek sorgusal anlamda az sayıda operatif metotla yüksek seviyede veri erişim imkânı sağlayan bir strateji üzerine kurulu tasarım desenidir.

---
![gorsel1](https://i.hizliresim.com/hz2tz24.png)

* Veritabanı işlemlerinden insert, update ve delete gibi işlemler yaparken her tablo için ayrı ayrı metot ve kod yazmamız gerekebilir. Örnek olarak 25-30 tablo sayısından oluşan bir veritabanımız olsun, biz bu tabloların her biri için insert, update ve delete kodlarını yazmamız gerekiyor. Bu da bizim için kod karmaşıklığı ve fazla iş yükü demektir. Bu karmaşıklığı ortadan kaldırmak için Repository Pattern kullanmaktayız. Repository Pattern sayesinde kod karmaşıklığını ortadan kaldırırız, iş yükünü azaltırız ve hata payını en aza indirerek daha temiz kod yazabiliriz.

---
![gorsel2](https://i.hizliresim.com/ptue4sj.png)

---

### REPOSITORY DESIGN PATTERN'IN AVANTAJLARI

* Maintainability (sonradan bakım kolaylılığı) arttırır,
* Unit-test yapabilmemizi kolaylaştırır,
* Esnek bir mimari uygulamamızı sağlar,
* Yeni gelecek modüller veya istenilen değişiklikleri kolayca entegre edebilmeyi sağlar,
* Domain driven development’ın önünü açar.

# 2) GÜVENLİK ZAAFİYETLERİNİ AÇIKLAYINIZ

* 2.1) **SQL Injection :** Kötü niyetli kullanıcının tarayıcı çubuğundan, form  üzerinden vb input alanlarından sql sorgusu yazarak veritabanımızdaki verileri çekmesine **SQL INJECTION** denir.  Sql injeciton kontrolünün php dilindeki en temel yöntemi **mysql_real_escape_string** fonksiyonudur.Bu fonksiyon gelen değerden escape karakterleri (',/ vb.) temizleyerek web sitesini temel düzeyde sql injectionlara karşı korur.  

* 2.2) **Man in the Middle :** Man in the middle saldırısı ağda, iki bağlantı arasındaki iletişimin dinlenmesi ile çeşitli verilerin ele geçirilmesi veya iletişimi dinlemekle kalmayıp her türlü değişikliğin yapılmasını da kapsayan bir saldırı yöntemidir.

* 2.3) **Cross-Site Scripting (XSS) :** XSS (Cross Site Scripting) script kodları üzerinden (genelde javascript) bir web sayfasına saldırı yapılmasıdır. XSS çoğunlukla tarayıcıda saklanan bilgiler olan cookielere saldırı amacı ile kullanılmaktadır. XSS ataklarından korunmak için yapılacak en basit önlem açık olan kısımda filtreleme uygulamaktır. Php dilini ele alırsak strip_tags fonksiyonu kullanılarak javascript ve html etiketleri filtrelenebilir.

* 2.4) **Session Hijacking :** İki bilgisayar arasındaki geçerli TCP iletişimini ele geçirme saldırısıdır. Çoğu doğrulama (authentication) TCP oturumu başlangıcında olduğundan bu, saldırganın makineye erişmesini sağlar.

* 2.5) **Cross-Site Request Forgery :** CSRF (Cross Site Request Forgery) genel yapı olarak sitenin açığından faydalanarak siteye sanki o kullanıcıymış gibi erişerek işlem yapmasını sağlar.
Genellikle GET requesleri ve SESSION işlemlerinin doğru kontrol edilememesi durumlarındaki açıklardan saldırganların faydalanmasını sağlamaktadır.
Aşağıdaki kodda saldırgan img etiketini kullanarak yani urli bir imaj urli olarak göstererek sisteme sanki daha önce kayıt olmuş bir kullanıcı gibi giriş yapmak istemektedir.

      <img src=”abc.php?giris=dogru”>

   Bu tür açıkları kapatmak için en pratik yol ise token kullanımıdır.
