<!DOCTYPE html>
<?php 
        $msg="";
        if(isset($_POST['txtsub']))
        {
            $name=$_POST['txtname'];
            $Email=$_POST['txtemail'];
            $Password=$_POST['txtpwd'];
            $Gender=$_POST['txtgen'];
            $Phone=$_POST['txtphn'];
            $Address=$_POST['txtaddr'];
            $Country=$_POST['txtcont'];
            include("db.php");
            $con=mysqli_connect(Host,Username,Password);
            mysqli_select_db($con,DBName);
            $qry="insert into createaccount values('$name','$Email','$Password','$Gender',$Phone,'$Address','$Country')";
            mysqli_query($con,"$qry");
            echo mysqli_error($con);
            if(mysqli_affected_rows($con)>0)
        
                $msg="Account Created Sucessfully!!!";
             
            else
            
                $msg= "Error in the Form!!!";
            
            mysqli_close($con);


        }
?>
<html>
    <head>
        <title>Design for online shopping</title>
        <meta name="viewport" content="width=device-width ,initial-scale=1" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form method="POST">
       <?php
            $a = 1;
            {
            $a = 2;
            }
            echo $a;
        ?>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4" style="border-radius: 15px; padding: 20px 15px 20px 2px; background-color: #a2cbf8;">
                        <h4 style="background-color:#3f4ac5;width: 11cm; border-radius: 4px; padding-left: 10px; padding-top:5px; color:black" class="form-control">Admin Panel Login</h4>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold; padding-left:10px">Name</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="txtname" style="border-radius: 5px;" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold; padding-left:10px">Email Id</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="email" name="txtemail" class="form-control" style="border-radius: 5px;" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                <label style="font-weight: bold; padding-left:10px">Password</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="password" name="txtpwd" value="" style="border-radius: 5px; background-color: white; margin-top: 0%;" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                <label style="font-weight: bold; padding-left:10px ">Gender</label>
                                </div>
                                <div class="col-sm-8">
                                    <select name="txtgen" style="border-radius:5px">
                                        <option>Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                <label style="font-weight: bold;">Phone Number</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="number" name="txtphn" value="" style="border-radius: 5px; background-color: white; margin-top: 0%;" class="form-control" />
                                </div>
                            </div>
                               
                            

                  </div>
                 </div>
             </div>
        <?php
            include("rooter.php");
        ?>
        </form>
       </body> 
</html>