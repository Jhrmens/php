
<form>
    <input type = "text" name "nome">
    <input type = "number" name "idade">
    <input type = "text" name "cidade">
    <input type = "submit" value = "ok">
</form>

    <?php 

        if (isset($_GET)){

            foreach($_GET as $key => $value){
                echo $key . " " . $value;
            }  

        }

    ?>