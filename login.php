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
<body class="login-body">
    <header>
        <div class="container">
            <h1>Eren Bekmezci</h1>
        </div>
    </header>
    <nav>
        <div class="container">
            <ul>
                <li class="home"><a href="index.html"><i class="fas fa-home">Anasayfa</i></a></li>
                <li><a href="#">Şehrim</a></li>
                <li><a class="nav-item" href="#">Kültürel Mirasımız</a></li>
                <li><a class="nav-item" href="#">Özgeçmişim</a></li>
                <li><a class="nav-item" href="#">İlgi Alanlarım</a></li>
                <li><a class="nav-item" href="iletisim.html">İletişim</a></li>
                <li class="right"><a class="login active" href="login.html">Giriş Yap</a></li>             
               
                  

                </ul>

        </div>
    </nav>
    <section>
        
    <?php

    if(isset($_POST['submit']))
    {
        $user = $_POST['adi'];
        $sifre = $_POST['sifre'];
        if($user=="eren" && $sifre=="admin")
            echo "Başarılı hoşgeldiniz $user ";

        else
        {
            echo "Başarısız";
            echo "<p> <a href='login.html'>&lt;GERİ DÖN&gt;</a></p> ";
        }

    }

    
?>  

            
        
    </section>
    <footer>
        <div class="container">
            <p>Web-Teknolojileri-Projesi © Eren Bekmezci 2021</p>
        </div>
    </footer>
    
</body>
</html>


