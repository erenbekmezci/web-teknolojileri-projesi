<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri Projesi</title>

    <!--Css-->
    <link rel="stylesheet" href="_proje-stil.css">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css">

    <!-- Ikon Kutuphanesi -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
		integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    
<style>
       ul{
        padding-left: 0;  
        }

</style>







</head>
<body>
    <header>
        <div class="container">
            <h1>Eren Bekmezci</h1>
        </div>
    </header>
    <nav>
        <div class="container index">
            <ul>
                <li><a  href="index.html"><i class="fas fa-home">Anasayfa</i></a></li>
                <li><a  href="sehrim.html">Şehrim</a></li>
                <li><a  href="mirasimiz.html">Kültürel Mirasımız</a></li>
                <li><a  href="ozgecmis.html">Özgeçmişim</a></li>
                <li><a  href="ilgi-alani.html">İlgi Alanlarım</a></li>
                <li><a  href="iletisim.html">İletişim</a></li>
                <li class="right"><a class="active login" href="login.html"><i class="fas fa-sign-in-alt">Giriş Yap</i></a></li>             
               
                  

                </ul>

        </div>
    </nav>
    <main>
        <div class="container">
            <?php

                if(isset($_POST['submit']))
                {
                    $user = $_POST['adi'];
                    $sifre = $_POST['sifre'];
                    if($user=="eren@sakarya.edu.tr" && $sifre=="eren")
                        echo "Başarılı hoşgeldiniz $user ";

                    else
                    {
                        echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "Lütfen tekrar giriş yapın !";
			            header("Refresh: 1; url=login.html");
                    }

                }

    
            ?>



        </div>   
                
            
        
    </main>
    <footer>
        <div class="container">
            <p>Web-Teknolojileri-Projesi © Eren Bekmezci 2021</p>
        </div>
    </footer>
    
</body>
</html>











