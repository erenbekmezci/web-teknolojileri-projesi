<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="_proje-stil.css">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
		integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    
<style>
       ul{
        padding-left: 0;
           
        }
       body{
        font-size: 16px;
        background: #eee !important;
        }
        h1{
            text-align: left;
            height: 78px;
        }
        section{
            margin-bottom: 50px;
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
        <div class="container">
            <ul>
                <li class="home"><a href="index.html"><i class="fas fa-home">Anasayfa</i></a></li>
                <li><a class="nav-item" href="#">Şehrim</a></li>
                <li><a class="nav-item" href="#">Kültürel Mirasımız</a></li>
                <li><a class="nav-item" href="#">Özgeçmişim</a></li>
                <li><a class="nav-item" href="#">İlgi Alanlarım</a></li>
                <li><a href="iletisim.html">İletişim</a></li>
                <li class="right"><a class="login" href="login.html">Giriş Yap</a></li>             
               
                  

                </ul>

        </div>
    </nav>
    <section>
        <div class="container">  
            <h3 class="tab-header">Bilgiler</h3>
            <div class="tab">
                <table class="table">
                    <tr>
                        <td>Ad-Soyad</td>

                        <td>
                            <?php
                            echo $_POST["name"];
                            
                            ?>
                        </td>

                    </tr>

                    <tr>
                        <td>E-mail</td>

                        <td>
                            <?php
                            echo $_POST["email"];
                            
                            ?>
                        </td>

                    </tr>
                    
                    
                    <tr>
                        <td>Cinsiyet</td>
                        <td> <?php
                            if($_POST["Cinsiyet"]=="erkek")
                                echo "Erkek";
                            else
                                echo "Kadın";
                            
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Üniversite</td>
                        <td>
                            <?php
                                if($_POST["uni"]=="subu")
                                    echo "Sakarya Uyg. Bil. Üniversitesi";
                                else if($_POST["uni"]=="sau")
                                    echo "Sakarya Üniveristesi";
                                else if($_POST["uni"]=="beu")
                                    echo "Zonguldak Bülent Ecevit Üniveristesi";
                                else if($_POST["uni"]=="kou")
                                    echo "Kocaeli Üniversitesi";
                                else if($_POST["uni"]=="itu")
                                    echo "İstanbul Teknik Üniversitesi";

                                      
                            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Şehir</td>
                        <td>
                            <?php
                               if(isset($_POST["sehir"]))
                                    echo $_POST["sehir"];
       
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Kurslar</td>
                        <td>
                            <?php

                                if(isset($_POST["ndp"]))echo $_POST["ndp"]." ";          
                                if(isset($_POST["web"]))echo $_POST["web"]." ";
                                if(isset($_POST["veri"]))echo $_POST["veri"]." ";
                                
                                                                                         
                            ?>
                        </td>
                    </tr>
                </table>
            </div>            
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p>Web-Teknolojileri-Projesi © Eren Bekmezci 2021</p>
        </div>
    </footer>
    
</body>
</html>