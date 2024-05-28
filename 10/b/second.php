<!DOCTYPE html> 
<html>
    <body>
        <form method=POST>
            <input type="text" name='one' placeholder="Enter a number" required>
            <input type="submit" placeholder="Click">
        </form>
        <p>
            <?php
            if ($_SERVER['REQUEST_METHOD']=='POST'){
                $num=$_POST['one'];
                if ($num==0 || $num==1){
                    echo "neither prime nor composite";
                    return;
                }
                $flag=0;
                for ($i=2;$i<=sqrt($num);$i++){
                    if ($num%$i==0){
                        $flag=1;
                        break;
                    }
                }
                if ($flag){
                    echo "The number is not a prime";
                }
                else{
                    echo "The number is a prime";
                }


            }
            ?>
        </p>
    </body>
</html>