<?php

$xItems = ( isset($_GET['items']) && is_numeric($_GET['items'])) ? $_GET['items'] : 1; 



$xml = 'http://www.nutriyachay.com/blog/feed/';
$foto = new SimpleXMLElement($xml, null, true);

echo "<table border='1px'>";




echo '</table>';

 function  imprimir($row) {
    echo '<tr>';
    echo '<td>';
   
    $mystring = utf8_decode( $row->children('content', true) );

    $ini = strpos($mystring, '<img');
    $end = strpos($mystring, '</p>');

    echo substr($mystring, $ini, $end);
    echo '</td>';
    echo '</tr>';


}

$xmlDoc = new DOMDocument();

$xmlDoc->load($xml);



//get elements from "<channel>"

$channel=$xmlDoc->getElementsByTagName('channel')->item(0);

$channel_title = $channel->getElementsByTagName('title')

->item(0)->childNodes->item(0)->nodeValue;

$channel_link = $channel->getElementsByTagName('link')

->item(0)->childNodes->item(0)->nodeValue;

$channel_desc = $channel->getElementsByTagName('description')

->item(0)->childNodes->item(0)->nodeValue;

$channel_fecha = $channel->getElementsByTagName('pubDate')

->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"

echo("<p><a href='" . $channel_link

  . "'>" . $channel_title . "</a>");

echo("<br>");

echo($channel_desc . "</p>");

echo("<br>");





//get and output "<item>" elements

$x=$xmlDoc->getElementsByTagName('item');

for ($i=0; $i<$xItems; $i++) {

  if(!$x->item($i)){

	  break;

  }

	  

  $item_title=$x->item($i)->getElementsByTagName('title')

  ->item(0)->childNodes->item(0)->nodeValue;

  $item_link=$x->item($i)->getElementsByTagName('link')

  ->item(0)->childNodes->item(0)->nodeValue;

  $item_desc=$x->item($i)->getElementsByTagName('description')

  ->item(0)->childNodes->item(0)->nodeValue;

    $item_fecha=$x->item($i)->getElementsByTagName('pubDate')

  ->item(0)->childNodes->item(0)->nodeValue;

foreach($foto->channel->item as $boo) // loop through our books
{
    imprimir($boo);

    break;
}
  echo ("<p><a href='" . $item_link

  . "'>" . $item_title . "</a>");

  echo ("<br>");

  echo ($item_desc . "</p>");

   echo ("<br>");


echo(substr($item_fecha,4,-14). "</p>");

 echo ("<p><a href='" . $item_link

  . "'>" . "<< Leer Nota >>" . "</a>");

 
}

?>