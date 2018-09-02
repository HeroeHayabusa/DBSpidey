<!DOCTYPE html>
<html>
    <head>
        <title>Base de Datos Virus</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            ul{
                margin-left: 300px;
				
            }
            li{
                float: left;
                list-style: none;
                margin: 1px;
            }
            a{
                padding: 15px 40px;
                text-decoration: none;
                background: #222;
                color:#fff;
                font-size: 15px;
                border-radius: 10px;
                -webkit-border-radius: px;
            }
            .ventana_actual{
                background: #B23B1D;
                color: #fff;
            }
            .resto_ventanas{
                background: #131009;
                color: #fff;
            }
        </style>
    </head> 
    <body>
        <?php
        $menu =  json_decode('
        [{"nombre":"Inicio","url":"index.php","link":"/BDVirus/index.php"},
        {"nombre":"Agregar","url":"agregar.php","link":"/BDVirus/agregar.php"},
        {"nombre":"Visualizar","url":"visualizar.php","link":"/BDVirus/visualizar.php"},
        {"nombre":"EX","url":"ex.php","link":"/BDVirus/ex.php"},
        {"nombre":"EX2","url":"ex2.php","link":"/BDVirus/ex2.php"}]');  
        ?>
        <ul>
        <?php
        foreach($menu as $botones){
        $clase = ($botones->link == $_SERVER['REQUEST_URI'] ? 'ventana_actual' : 'resto_ventanas');
        ?>        
            <li><a class="<?=$clase?>" href="<?=$botones->url?>"><?=$botones->nombre?></a></li>
        <?php       
        } 
        ?>
        </ul>