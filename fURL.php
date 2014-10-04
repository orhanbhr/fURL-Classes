<?php

  /*
    Author : Orhan BAHAR
    Web Site : www.orhanbhr.com
    Mail : orhanbhr@hotmail.com
    GitHub : www.github.com/orhanbhr
    Created : 30.09.2014
  */

  /*
    Bu eklentiyi hazırlarken yardım aldığım "http://php.net/manual/en/book.curl.php" TEŞEKKÜRLER.
  */

  class fURL {

    // Default Değerler (Lütfen Bu Ayarlar İle Oynamayınız.)
    public $ref = "http://www.google.com.tr";
    public $url = "http://www.orhanbhr.com";
    public $proxy = "95.9.126.36";
    public $proxyport = "8080";
    public $header = false;
    public $timeout = 120;
    public $cookie = "cookie.txt";
    public $followlocation = true;
    public $useragent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.97 Safari/537.11";
    public $content;
    private $ch;

    // Sayfa Başladı Hadi Bişeyleri Kontrol Edelim!
    public function __construct(){
      if(!extension_loaded('curl')){
        echo "Sunucunuzda fURL çalıştırabilmeniz için cURL eklentisini yüklemeniz gerekmektedir.";
        exit();
      }
      header('Content-Type: text/html; charset=utf-8');
      set_time_limit($this->timeout);
    }

    public function fURL_NoPost(){
      $this->ch = curl_init();
      curl_setopt($this->ch, CURLOPT_URL, $this->url);
      curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, $this->followlocation);
      curl_setopt($this->ch, CURLOPT_USERAGENT, $this->useragent);
      curl_setopt($this->ch, CURLOPT_TIMEOUT, $this->timeout);
      curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($this->ch, CURLOPT_REFERER, $this->ref);
      curl_setopt($this->ch, CURLOPT_PROXY, $this->proxy);
      curl_setopt($this->ch, CURLOPT_PROXYPORT, $this->proxyport);
      curl_setopt($this->ch, CURLOPT_HEADER, $this->header);
      curl_setopt($this->ch, CURLOPT_TIMEOUT, $this->timeout);
      curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, $this->followlocation);
      curl_setopt($this->ch, CURLOPT_COOKIEJAR, $this->cookie);
      curl_setopt($this->ch, CURLOPT_COOKIEFILE, $this->cookie);
      return curl_exec($this->ch);
      curl_close($this->ch);
    }

    public function fURL_Post(){

      // Herhangi bir şekilde data gelmemiş ise işlemi sonlandıralım.
      if(empty($this->content)){
        echo "POST edilecek bir data bulunamadı!";
        exit();
      }

      $this->ch = curl_init();
      curl_setopt($this->ch, CURLOPT_URL, $this->url);
      curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, $this->followlocation);
      curl_setopt($this->ch, CURLOPT_USERAGENT, $this->useragent);
      curl_setopt($this->ch, CURLOPT_TIMEOUT, $this->timeout);
      curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($this->ch, CURLOPT_REFERER, $this->ref);
      curl_setopt($this->ch, CURLOPT_PROXY, $this->proxy);
      curl_setopt($this->ch, CURLOPT_PROXYPORT, $this->proxyport);
      curl_setopt($this->ch, CURLOPT_HEADER, $this->header);
      curl_setopt($this->ch, CURLOPT_TIMEOUT, $this->timeout);
      curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, $this->followlocation);
      curl_setopt($this->ch, CURLOPT_COOKIEJAR, $this->cookie);
      curl_setopt($this->ch, CURLOPT_COOKIEFILE, $this->cookie);
      curl_setopt($this->ch, CURLOPT_POST, true);
      curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($this->content));
      return curl_exec($this->ch);
      curl_close($this->ch);
    }

    // Class Finished - 30.09.2014 / Update's Near...

  }

?>
