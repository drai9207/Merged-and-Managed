<?php

function createXML($data) {
    $title = $data ['tile'];
    $totalstudents = count($data['students']);

    //XML is created
    $xmlDOC = new document();

    $root = $xmlDOC->appendChild($xmlDOC->createElement("user_info"));
    $root->appendChild($xmlDOC->createElement("title",$title));
    $root->appendChild($xmlDOC->createElement("totalstudents",$totalstudents));

}

$character = array(
    'title' => 'Array to XML Assignment',
    'students' => array(
   array( 'name' => 'Peter Parker', 'email' => 'peterparker@mail.com' )
    array('name' => 'Clark Kent', 'email' => 'clarkkent@mail.com')
    array ('name' => 'Harry Potter', 'email' => 'harrypotter@mail.com')
        )
    
    );


//convery array to xml file

echo createXML($character);
?>