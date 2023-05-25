<!DOCTYPE html>
<?php
$provincia=array(6=>"Badajoz",8=>"Barcelona",11=>"Cadiz",28=>"Madrid",29=>"Malaga");
asort($provincia);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
     <?php
     foreach ($provincia as $id=>$nombre)
     {
         echo '<tr><td>'.$id.'</td><td><a href="recibe-provincia.php?id='.$id.'&nombre='.$nombre.'">'.$nombre.'</a></td></tr>';
     }
        ?>
        </table>
        <ol>
        <?php
     foreach ($provincia as $id=>$nombre)
     {
         echo '<li><a href="recibe-provincia.php?id='.$id.'&nombre='.$nombre.'">'.$nombre.'</a></li>';
     }
        ?>
        </ol>
        <form action="recibe-provincia.php" method="GET">
            <select name="id">
                <?php
                foreach ($provincia as $id=>$nombre)
     {
                    echo '<option value="'.$id.'">'.$nombre.'</option>';
     }
     ?>
            </select>
            
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
