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

