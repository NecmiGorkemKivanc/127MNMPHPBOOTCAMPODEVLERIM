ÖDEV 

İSİMLENDİRME GELENEKLERİNİN(NAMING CONVENTIONS) ARASINDAKİ FARKLAR 
 

Pascal case ile camel case arasındaki farklar; 

Kullanım Alanları 

Ödev başlığında da belirtildiği üzere bu kullanımlar kodlamada zorunlu olmamakla birlikte gelenek şeklinde kullanıldıkları alanlar farklıdır. 

Örneğin; 

PHP için Pascal Case sınıf isimleri tanımlarken kullanılırken, Camel Case fonksiyon ve metot tanımlarken kullanılır. 

 Bknz:”PHP recommendations are contained in PSR-1 (PHP Standard Recommendation 1) and PSR-12.[37] According to PSR-1, class names should be in PascalCase, class constants should be in MACRO_CASE, and function and method names should be in camelCase.[38 ”  

Kaynak:(https://en.wikipedia.org/wiki/Naming_convention_(programming)) 

Kullanım Biçimleri 

PascalCase  isimlendirme geleneğinde bitişik kelimelerin ilk karakterleri büyük, diğer karakterleri küçük olacak şekilde kullanılırken, 

Bknz:” For Class Name 

                            We can use pascal case. Like 

      class UserDetails {    // }” 

Kaynak: (https://stackoverflow.com/questions/45254784/when-should-i-use-camelcase-camel-case-or-underscores-in-php-naming/45254824) 

CamelCase isimlendirme geleneğinde bitişik iki kelimenin ilk kelimesinin tamamı küçük karakterle, ikinci kelimenin ise ilk karakteri büyük diğerleri küçük karakterle yazılarak kullanılır. 

                                Bknz:”For Function and Class Method Name 

                                We can use camel case. Like 

  function getName() {    // Do something }” 

Kaynak: (https://stackoverflow.com/questions/45254784/when-should-i-use-camelcase-camel-case-or-underscores-in-php-naming/45254824) 

Olarak ikiye ayrılır.  

 

 

YALIN PHP İLE PROGRAMLAMA 

            İlgili kod dizisi aşağıda paylaşılmıştır. 

<?php 

function hesapla() 

{ 

    $n=6; //kullanıcı tarafından değiştirilebilir eleman sayısı 

    

$sayilar = array(); 

  

for($i=1 ; $i <= $n ; $i++) 

  

if(count($sayilar) !=$n) 

{ 

$elemanlar=rand(1,100); 

array_push($sayilar,$elemanlar); 

$enkucuk=min($sayilar); 

} 

else 

{  

} 

print_r($sayilar); 

echo "Dizinin en küçük değeri: " . $enkucuk; 

} 

 echo hesapla(); 

  

?> 

 

 

 

OBJECT ORIENTED PROGRAMMING 

              İlgili kod dizisi aşağıda paylaşılmıştır. 

<?php 

class Tasitlar { 

     

  public $plakaNo; 

  public $marka; 

  public $model; 

  public $tekerlekSayisi; 

  public $kanatGenisligi; 

   

  function set_name($marka) { 

    $this->name = $marka; 

  } 

  function get_name() { 

    return $this->name; 

  } 

} 

  

class Araba extends Tasitlar 

{ 

     public function __construct($plakaNo,$marka,$model,$tekerlekSayisi) 

     { 

         $this->plakaNo=$plakaNo; 

         $this->marka=$marka; 

         $this->model=$model; 

         $this->tekerlekSayisi=$tekerlekSayisi; 

     } 

     public function yazdir() 

     { 

         echo "Araba taşıtına ait öznitelikler şu şekildedir:" . "\n"; 

        echo "Plaka No: " . $this->plakaNo . "\n"; 

        echo "Marka: " . $this->marka . "\n"; 

        echo "Model: " . $this->model . "\n"; 

        echo "Tekerlek Sayısı: " . $this->tekerlekSayisi . "\n"; 

        echo "\n"; 

          

     } 

     } 

     $araba=new Araba('06 ARAC 06','Mercedes','C180','4'); 

     $araba->yazdir(); 

class Motorsiklet extends Tasitlar 

{ 

     public function __construct($plakaNo,$marka,$model,$tekerlekSayisi) 

     { 

         $this->plakaNo=$plakaNo; 

         $this->marka=$marka; 

         $this->model=$model; 

         $this->tekerlekSayisi=$tekerlekSayisi; 

     } 

public function yazdir() 

     { 

         echo "Motorsiklet taşıtına ait öznitelikler şu şekildedir:" . "\n"; 

        echo "Plaka No: " . $this->plakaNo . "\n"; 

        echo "Marka: " . $this->marka . "\n"; 

        echo "Model: " . $this->model . "\n"; 

        echo "Tekerlek Sayısı: " . $this->tekerlekSayisi . "\n"; 

        echo "\n"; 

          

     } 

} 

     $motorsiklet=new Motorsiklet('06 MOTOR 06','HONDA','Forza 750','2'); 

     $motorsiklet->yazdir(); 

      

     class Ucak extends Tasitlar 

{ 

     public function __construct($kanatGenisligi,$marka,$model) 

     { 

          

         $this->marka=$marka; 

         $this->model=$model; 

         $this->kanatGenisligi=$kanatGenisligi; 

     } 

public function yazdir() 

     { 

         echo "Uçak taşıtına ait öznitelikler şu şekildedir:" . "\n"; 

         echo "Marka: " . $this->marka . "\n"; 

         echo "Model: " . $this->model . "\n"; 

         echo "Kanat Genişliği: " . $this->kanatGenisligi . "\n"; 

         echo "\n"; 

          

     } 

} 

     $ucak=new Ucak('Airbus','A380','80M'); 

     $ucak->yazdir(); 

      

  

?> 

 

 