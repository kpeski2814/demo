<?php

$xItems = ( isset($_GET['items']) && is_numeric($_GET['items'])) ? $_GET['items'] : 2; 
// load SimpleXML
$item = new SimpleXMLElement('test1.xml', null, true);

echo "<table border='1px'>";


foreach($item->channel->item as $boo) // loop through our books
{
    imprimir($boo);
    
    


}
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

?>