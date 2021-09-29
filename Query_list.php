<html>
    <heard>
        <title>Query List</title>
        <style type="text/css">
            table{
                border-collapse: collapse;
                font-family: monospace;
                font-size: large;
            }
            thead{
                background-color: green;
                color: whitesmoke;
            }
        </style>    
    </heard>
    <body>
        <?php
        include("db.php");
            $con=mysqli_connect(Host,Username,Password);   
            mysqli_select_db($con,DBName);
            $qry = "select * from query";
            $result = mysqli_query($con,$qry);
            if(mysqli_num_fields($result)>0)
            {
                echo "<table width='100%' border='1'>";
                echo "<tr>";
                    echo "<th>Name</th>";
                    echo "<th>Email Id</th>";
                    echo "<th>Phone No</th>";
                    echo "<th>Message</th>";
                echo "</tr>";

                while($row=mysqli_fetch_array($result))
                {
                    echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }
            else
            {
                echo "error in creating data!!!!!";
            }
        ?>
    </body>
</html>