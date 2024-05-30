<?php 

function cariLantai($loker){
$lantai = 0;
$a = 5; //banyak loker
$nomor_loker = 0;

    if ($loker > 0) {
        for ($i=1; $i < $loker + 1; $i++) { 
            if ($a<=7) {
                for ($j=1; $j <= $a; $j++) { 
                    $nomor_loker = $nomor_loker + 1;
                    // echo $i. $j.$nomor_loker."<br>";
                    if ($nomor_loker == $loker) {
                        $lantai = $i;
                        return $lantai;
                    }
                }
                $a++;
                
            }else {
                $a = 5;
                $i--;
            }
            
        }
            
    }else {
        $lantai = 0;
        return $lantai;
    }
}
?>

<html>
<body>

    <form action="" method="GET">
    Nomor Loker: <input type="number" name="loker" required>
    <input type="submit" name="submit" value="cari"><br>
    </form>

    <?php 
    if (isset($_GET['submit'])) {
        $loker = $_GET["loker"] ;
        echo "Lantai ke- ".cariLantai($loker);
        
    }
    ?>

</body>
</html>

