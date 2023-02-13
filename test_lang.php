<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php       
            $ressource = fopen('.passwd', 'rb');
            echo fread($ressource, filesize('.passwd'));
        ?>
        <p>Un paragraphe</p>
    </body>
</html>
