<!DOCTYPE html>
    <head>
        <title>Laptop Page</title>
        <meta name="viewport" content="width=device-width ,initial-scale=1" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            .box{
               box-shadow: 1px 5px 9px 0 #494343;
               border-radius: 7px;
               background-color: #aef9b6;
               width: 300px;
               margin: 6px;
               text-align: center;
               font-family: cursive;
               font-weight: bold;
            }
        </style>

    </head>

    <body>
        
            <?php
                include("maincontent.php");
            ?>
            <div class="container-fluid">
                <?php
                    include("db.php");
                    $con=mysqli_connect(Host,Username,Password);
                    mysqli_select_db($con,DBName);
                    $result=mysqli_query($con,"select * from product_master where p_type='laptop'");
                    if(mysqli_num_rows($result)>0)
                    {
                        $x=0;
                        while($row=mysqli_fetch_array($result))
                        {
                            if($x==0)
                            {
                                echo "<div class='row'>";
                            }
                                echo "<div class='col-sm-4 '>";
                                    echo "<div class = 'box'>";
                                    echo "<div class='row'><div class='col-sm-12'><img src='$row[4]'/></div></div>";
                                    echo "<div class='row'><div class='col-sm-12'>$row[1]</div></div>";
                                    echo "<div class='row'><div class='col-sm-12'>Price : $row[2]</div></div>";
                                    echo "</div> ";
                                echo "</div>";
                                $x++;
                                if($x==3)
                                {
                                    echo "</div>";
                                    $x=0;
                                }    
                            
                        }
                    }
                    else
                    {
                        echo "file Not Found";
                    }
                ?>

            </div>

            <?php
                 include("rooter.php");
            ?>
        
    </body>
</html>