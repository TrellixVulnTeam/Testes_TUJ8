<!DOCTYPE htmL>
<html>
<head>
    <title>Copa do Mundo</title>
    <meta charset="utf-8">
</head>
<body>
    <form action="" method="post">
                    <select name="ano">
                        <option value="">&nbsp;</option>
                        <?php
                        $c=1930;
                             while ($c<= 2018) {
                                 if(($c!=1942)&&($c!=1946)){
                                     echo "<option value=".$c.">".$c."</option>";
                                 }
                                 $c+=4;
                             }
                        ?>
                    </select>
                    <input type="submit" value="Enviar" id="btnEnv" name="btnEnv">
    </form>
    <?php
    $ano=$_POST[ 'ano'];
        switch($ano){
        case 1930:
        echo "<h1>Pais sede: Uruguai <br><h1>Campeão: Uruguai</h1>";
        break;
        case 1934:
        echo "<h1>Pais sede: Itália <br><h1>Campeão: Itália</h1>";
        break;
        case 1938:
        echo "<h1>Pais sede: França <br><h1>Campeão: Itália</h1>";
        break;
        case 1950:
        echo "<h1>Pais sede: Brasil <br><h1>Campeão: Uruguai</h1>";
        break;
        case 1954:
        echo "<h1>Pais sede: Suiça <br><h1>Campeão: Alemanha</h1>";
        break;
        case 1958:
        echo "<h1>Pais sede: Suécia <br><h1>Campeão: Brasil</h1>";
        break;
        case 1962:
        echo "<h1>Pais sede: Chile <br><h1>Campeão: Brasil1</h1>";
        break;
        case 1966:
        echo "<h1>Pais sede: Inglaterra <br><h1>Campeão: Inglaterra</h1>";
        break;
        case 1970:
        echo "<h1>Pais sede: México <br><h1>Campeão: Brasil</h1>";
        break;
        case 1974:
        echo "<h1>Pais sede: Alemanha Ocidental <br><h1>Campeão: Alemanha</h1>";
        break;
        case 1978:
        echo "<h1>Pais sede: Argentina <br><h1>Campeão: Argentina</h1>";
        break;
        case 1982:
        echo "ch1>Pais sede: Espanha <br><h1>Campeão: Itália</h1>";
        break;
        case 1986:
        echo "<h1>Pais sede: México <br><h1>Campeão: Argentina</h1>";
        break;
        case 1990:
        echo "<h1>Pais sede: Itália <br><h1>Campeão: Alemanha</h1>";
        break;
        case 1994:
        echo "<h1>Pais sede: Estados Unidos <br><h1>Campeão: Brasil</h1>";
        break;
        case 1998:
        echo "<h1>Pais sede: França <br><h1>Campeão: França</h1>";
        break;
        case 2002:
        echo "<h1>Pais sede: Coreia do Sul e Japão <br><h1>Campeão: Brasil</h1>";
        break;
        case 2006:
        echo "<h1>Pais sede: Alemanha <br><h1>Campeão: Itália</h1>";
        break;
        case 2010:
        echo "<h1>Pais sede: África do Sul <br><h1>Campeão: Espanha</h1>";
        break;
        case 2014:
        echo "<h1>Pais sede: Brasil <br><h1>Campeão: Alemanha</h1>";
        break;
        case 2018:
        echo "<h1>Pais sede: Rússia <br><h1>Campeão: França</h1>";
        break;
        default:
        echo "<h1>Essa opção é invalida</h1>";
        break;
    }
    ?>
<br/>
<br/>
<a href="index.php"><button>Voltar</button></a>
<br/>
</body>
</html>