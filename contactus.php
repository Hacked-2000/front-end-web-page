<!DOCTYPE html>
<?php
        $msg="";
        if(isset($_POST['t10']))
        {
            $name=$_POST['txt1'];
            $Email=$_POST['txt2'];
            $Phone=$_POST['txt3'];
            $Message=$_POST['txt4'];
            include("db.php");
            $con=mysqli_connect(Host,Username,Password);
            mysqli_select_db($con,DBName);
            $qry="insert into query values('$name','$Email',$Phone,'$Message')";
            mysqli_query($con,"$qry");
            echo mysqli_error($con);
            if(mysqli_affected_rows($con)>0)
        
                $msg="Query Send Successfully!!!!";
             
            else
            
                $msg= "Error in the Form!!!";
            
            mysqli_close($con);


        }
?>
<html>
    <head>
        <title>Query Form</title>
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
            s2=document.getElementById("t3").value;
            if(s3=="")
            {
                temp=false;
                document.getElementById("t3").style="border-color:red";
                document.getElementById("l3").innerHTML="NOT FILLED";
                
            }
            else{
                document.getElementById("t3");
            }
            s4=document.getElementById("t4").value;
            if(s4=="")
            {
                temp=false;
                document.getElementById("t4").style="border-color:red";
                document.getElementById("l4").innerHTML="NOT FILLED";
                
            }
            else{
                document.getElementById("t4");
            }
            return temp;
        }
        </script>
    </head>
       <?php
            include("maincontent.php");
        ?>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4" style="border-radius: 15px; padding: 20px 15px 20px 2px; background-color: #a2cbf8;">
                        <h4 style="background-color:#3f4ac5;width: 11cm; border-radius: 4px; padding-left: 10px; padding-top:5px; color:black" class="form-control">Query Form</h4>
                        <form class="form-horizontal" method="POST" onsubmit="return validateform()">
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold; padding-left:10px">Name</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="txt1" id="t1" style="border-radius: 5px;" class="form-control" />
                                    <div><label id="l1"></label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold; padding-left:10px">Email Id</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="email" name="txt2" id="t2" class="form-control" style="border-radius: 5px;" />
                                    <div><label id="l2"></label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                <label style="font-weight: bold; padding-left:10px">Phone Number</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="number" name="txt3" id="t3" value="" style="border-radius: 5px; background-color: white; margin-top: 0%;" class="form-control" />
                                    <div><label id="l3"></label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                <label style="font-weight: bold; padding-left:10px">Message</label>
                                </div>
                                <div class="col-sm-8">
                                <textarea rows="5" cols="30" id="t4" name="txt4" style="border-radius: 10px;"></textarea>
                                <div><label id="l4"></label></div>
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6">
                                    <input type="Submit" name="t10" value="Send Query" style="border-radius: 5px; background-color: orange; margin-top: 12%;" class="form-control" />
                                </div>
                               <div><?php
                                echo $msg;
                                ?></div>
                            </div>


                  </div>
                 </div>
             </div>
        <?php
            include("rooter.php");
        ?>
</html>