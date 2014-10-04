fURL-Classes
============

Dosyamızı sayfamıza çağırıyor.

<pre><code>require_once("fURL.php");</code></pre>
Class’ımızın bir kopyasını oluşturuyoruz.

<pre><code>$fURL = new fURL();</code></pre>
Class içerisinde tanımlayabileceğimiz bağzı değişkenleri size aşağıda sunacağım hiçbir şekilde girmez iseniz default değerleri mevcuttur.

<pre><code>$fURL->proxy = "";
$fURL->proxyport = "";
$fURL->ref = "";
$fURL->url = "";
$fURL->header = "";
$fURL->timeout = "";
$fURL->followlocation = "";
$fURL->useragent = "";
$fURL->content= "";</code></pre>
Herhangi bir şekilde post yani data göndermeden sayfa kaynağı almak istiyorsak aşağıdaki gibi bir yol izleyebiliriz.

<pre><code>$fURL->url = "http://www.orhanbhr.com/index.php";
print_r( $fURL->fURL_NoPost() );</code></pre>
POST yani data gönderip sayfa kaynağını almak istiyorsa aşağıdaki gibi bir yol izleyebiliriz.


<pre><code>$fURL->url = "http://www.orhanbhr.com/post.php";
$fURL->content = array(
    'title' => 'fURL CLASSES v1 Beta Testing',
    'status' => 'OK',
    'data' => 'Hello World!',
    'website' => 'www.orhanbhr.com',
    'email' => 'orhanbhr@hotmail.com',
    'author' => 'Orhan BAHAR');
print_r( $fURL->fURL_Post() );</code></pre>
