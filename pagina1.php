    <!--IMPORTAZIONE PARTE HEADER-->
    <?php include 'header.php'; ?>


<!----------------------LOGICA----------------------------->


    <?php   

        if(isset($_GET['numero'])){

            $num = $_GET['numero'];

            if($num % 2 === 0){

                echo "<p> $num  è pari  </p>";
            
            }else {
            
                echo "<p> $num  è dispari  </p>";
            
            }
        }
    ?>

<!----------------------RENDER----------------------------->

    <!--CONTENUTO MAIN DEL SITO-->
    <main>

        <form action="">

            Inserisci un numero : 

            <input type="number" name="numero">
            <input type="submit" name="" id="" value="verifica">
        </form>

    </main>


    <!--IMPORTAZIONE PARTE FOOTER-->
    <?php include 'footer.php'; ?>