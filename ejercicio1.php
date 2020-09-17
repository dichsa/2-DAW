<?php
        if(count($_POST)!=0){

            $n1=is_numeric($_POST['n1'])?$_POST['n1']:0;
            $n2=is_numeric($_POST['n2'])?$_POST['n2']:0;
            $n3=is_numeric($_POST['n3'])?$_POST['n3']:0;

            $resultado=round(($n1+$n2+$n3)/3,2);
        }else{
            $n1="";
            $n2="";
            $n3="";
            $resultado="";
        }
        ?>
<!DOCTYPE html>
    <html>
    <body>
        <form action="" method="POST">
        <label for="n1">Nota 1</label> 
        <input type="number" name="n1" value="<?php echo $n1 ?>">
        <br>
        <label for="n2">Nota 2</label> 
        <input type="number" name="n2" value="<?php echo $n2 ?>">
        <br>
        <label for="n3">Nota 3</label> 
        <input type="number" name="n3" value="<?php echo $n3 ?>">
        <br>
        <input type="submit" value="Enviar">
        </form>
        <strong><?php echo $resultado ?></strong><br>
        <!-- <?php echo var_dump($_POST) ?> -->
    </body>
</html>