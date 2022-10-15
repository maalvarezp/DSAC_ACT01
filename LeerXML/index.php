<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi ejemplo PHP con XML</title>
        <link href="estilos.css" rel="stylesheet">
    </head>
    <body>
        <?php
        echo 'Ejemplo con PHP para mostrar datos en XML <br>';
        echo '<h1>Lista Estudiantes Desarrollo de Software en Ambientes Cloud  DSwAC-01 Octubre2022 </h1><br>';

        $archivoXml = simplexml_load_file("Estudiantes.xml");
        print_r($archivoXml->estudiante->cedula);
       // echo('<br>'. $archivoXml->ciclo);
         

        foreach ($archivoXml->estudiante as $key => $estud) {
            echo "Estudiante: ".$estud->apellido." con cedula: ".$estud->cedula ."<br>"; 
            echo "<br>Dato celular: ".$estud->celular; 
        }

        echo "<br>Dato celular: ". $archivoXml->dbp->estudiante->cedula; 
       
        /*
        foreach ($archivoXml->dbp as $key => $estud) {
            //echo "Estudiante: ".$estud->apellido." con cedula :".$estud->cedula ."<br>"; 
            echo "<br>Dato celular:".$estud->estudiante->celular; 
        }
        */

        ?>
          
        <select>
            <option>UNO</option>
            <option>DOS</option>
            <option>TRES</option>

        </select>
        
    </body>
</html>
