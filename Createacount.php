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
            s3=document.getElementById("t3").value;
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
            s5=document.getElementById("t5").value;
            if(s5=="")
            {
                temp=false;
                document.getElementById("t5").style="border-color:red";
                document.getElementById("l5").innerHTML="NOT FILLED";
                
            }
            else{
                document.getElementById("t5");

            }
            s6=document.getElementById("t6").value;
            if(s6=="")
            {
                temp=false;
                document.getElementById("t6").style="border-color:red";
                document.getElementById("l6").innerHTML="NOT FILLED";
                
            }
            else{
                document.getElementById("t6");

            }
            s7=document.getElementById("t7").value;
            if(s7=="")
            {
                temp=false;
                document.getElementById("t7").style="border-color:red";
                document.getElementById("l7").innerHTML="NOT FILLED";
                
            }
            else{
                document.getElementById("t1");

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
                        <h4 style="background-color:#3f4ac5;width: 11cm; border-radius: 4px; padding-left: 10px; padding-top:5px; color:black" class="form-control">User Sign Up</h4>
                        
                        <form class="form-horizontal" method="POST" onsubmit="return validateform()">
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold; padding-left:10px">Name</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="txtname" id="t1" style="border-radius: 5px;" class="form-control"/>
                                    <div><label id="l1"></label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold; padding-left:10px">Email Id</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="email" name="txtemail" id="t2" class="form-control" style="border-radius: 5px;" />
                                    <div><label id="l2"></label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                <label style="font-weight: bold; padding-left:10px">Password</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="password" name="txtpwd" id="t3" value="" style="border-radius: 5px; background-color: white; margin-top: 0%;" class="form-control" />
                                    <div><label id="l3"></label></div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-4">
                                <label style="font-weight: bold; padding-left:10px">Gender</label>
                                </div>
                                <div class="col-sm-8">
                                <select name="txtgen" class="form-control" id="t4">
                                        <option>Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    <div><label id="l4"></label></div>   
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                <label style="font-weight: bold; padding-left:10px">Phone</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="number" name="txtphn" id="t5" value="" style="border-radius: 5px; background-color: white; margin-top: 0%;" class="form-control" />
                                    <div><label id="l5"></label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                <label style="font-weight: bold; padding-left:10px; ">Address</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="address" name="txtaddr" id="t6" value="" style="border-radius: 5px; background-color: white; margin-top: 0%;" class="form-control" />
                                    <div><label id="l6"></label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label style="font-weight: bold; padding-left:10px">Country</label>
                                </div>
                                <div class="col-sm-8">
                                    <select name="txtcont" class="form-control" id="t7">
                                        <option>Select Country</option>
                                        <option>India</option>
                                        <option>France</option>
                                        <option>USA</option>
                                        <option>Italy</option>
                                        <option>Austria</option>
                                        <option>Europe</option>
                                    </select>
                                    <div><label id="l7"></label></div>
                                 </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                <input type="reset" name="txtreset" value="Reset"  style="border-radius: 5px; background-color: orange; margin-top: 12%; padding-left:20px" class="form-control" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="Submit" name="txtsub" value="Submit" style="border-radius: 5px; background-color: orange; margin-top: 12%;" class="form-control" />
                                </div>
                            </div>
                            <?php
                                echo $msg;
                            ?>

                  </div>
                 </div>
             </div>
        <?php
            include("rooter.php");
        ?>
       
       </body> 
</html>