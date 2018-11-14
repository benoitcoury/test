<?php

var_dump($_POST);

if ($_POST['title']!=="")
{
    
    if ($_POST["description"]=="")
        {
            $_POST["description"] = "tache sans description";
        }



        $monfichier = fopen('todoList.csv','r+');
    fputcsv($monfichier, $_POST);

    fclose ($monfichier);
    $monfichier = fopen('todoList.csv','r+');


    while( $tab =fgetcsv($monfichier,1024,';'))
    {
        for( $i = 0; $i < count($tab); $i++ )
        echo " ".$tab[$i]." ";
        
    }



fclose($monfichier);

}
header("Location: index.php");
exit();
?>
