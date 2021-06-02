<?php include_once"config.php";?>
<html>
    <body>
        <?php
        $name = $_POST["name"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $simptons = $_POST["simptons"];
        $diseases = $_POST["diseases"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO report (nome,idade,endereço,telefone,sintomas,historico_doencas,data) VALUES ('$name', 
       '$age', '$address', '$phone', '$simptons', '$diseases', '')";
       if(mysqli_query($conn, $sql)){
           echo "<script>alert('Dados salvos com sucesso!'); window.location = 'index.php';</script>";
       } else {
           echo "Deu erro:" . $sql . "<br>" . mysqli_error($conn);
       }
       mysqli_close($conn);
        ?>
    </body>
</html>