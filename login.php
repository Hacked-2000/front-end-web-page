<!DOCTYPE html>
<?php
        $msg="";
        if(isset($_POST['t3']))
        {
            $Username=$_POST['txt1'];
            $Password=$_POST['txt2'];
            include("db.php");
            $con=mysqli_connect(Host,Username,Password);
            mysqli_select_db($con,DBName);
            $qry="select email,password from createaccount";
            mysqli_query($con,"$qry");
            echo mysqli_error($con);
            if(mysqli_affected_rows($con)>0)
        
                $msg="Login Successfully !!!";
             
            else
            
                $msg= "Invalid Username & Password!!!";
            
            mysqli_close($con);


        }
?>
<html>
    <head>
        <title>Sign Up</title>
        <meta name="viewport" content="width=device-width ,initial-scale=1" />
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script>
        function validateform()
        {
            temp = true;
            s1=document.getElementById("t1").value;
            if(s1=="")
            {
                temp=false;
                document.getElementById("t1").style="border-color:red";
                document.getElementById("l1").innerHTML="NOT FILLED";
                
            }
            else{
                document.getElementById("t1");

            }
            s2=document.getElementById("t2").value;
            if(s2=="")
            {
                temp=false;
                document.getElementById("t2").style="border-color:red";
                document.getElementById("l2").innerHTML="NOT FILLED";
                
            }
            else{
                document.getElementById("t2");
            }
            return temp;
        }
        </script>             
    </head>
    <body>
        
        <?php
            include("maincontent.php");
        ?>
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4" style="border-radius: 15px; padding: 20px 15px 20px 2px; background-color: #a2cbf8;">
                        <h4 style="background-color:#3f4ac5;width: 11cm; border-radius: 4px; padding-left: 10px; padding-top: 5px; color:black" class="form-control">Admin Panel Login</h4>
                        <form class="form-horizontal" method="POST" onsubmit="return validateform()">
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold;  padding-left: 10px;">Username</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="txt1" id="t1" style="border-radius: 5px;" class="form-control" />
                                    <div><label id="l1"></label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold; padding-left: 10px;">Password</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="password" id="t2" name="txt2" class="form-control" style="border-radius: 5px;" />
                                    <div><label id="l2"></label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="submit" name="t3" value="Log In" style="border-radius: 5px; background-color: white; margin-top: 12%; padding-left: 20px;" class="form-control" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="submit" name="t4" value="Forgot Password" style="border-radius: 5px; background-color: white; margin-top: 12%;" class="form-control" />
                                    </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="http://localhost/project-1/createacount.php" style="color:red; text-align:center; font-style:bold" ><h4>Create New Account</h4></a><br>
                                    <h5 style="color: red;"><?php echo $msg; ?></h5>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div>
        </div>
       
        <?php
            include("rooter.php");
        ?>
       
    </body>

</html>