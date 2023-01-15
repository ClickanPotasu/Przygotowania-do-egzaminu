<?php
if(isset($_COOKIE["ciasteczko"]))
{
    echo "<b>Haha chuj ci w dupę odświerzyłeś stronę</b>";
}
else
{
    $name="ciasteczko";
    $value="1";
    $expires=time()+1200;
    setcookie($name,$value,$expires);
    echo "<i>Tutaj jest napis</i>";
}
?>