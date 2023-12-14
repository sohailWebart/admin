<?php
SESSION_START();
    include 'include/header.php';
    include 'include/menu.php';
    include 'include/top_header.php'; 
    
    if(isset($_SESSION['name'])){
        $msg = $_SESSION['name'];
        echo "<script>alert('$msg')</script>";
    }
        session_destroy();
?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="sol-md-12 col-sm-12">
            <div>
                <span><i class="fa fa-tachometer"></i>Dashboard</span>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="text-center" style="font-family: redo;">Student Add</h3>
    </div>
    <form action="sql/Student_Add.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-area">
                    <div class="container-fluid">
                        <div class="container">
                            <h5 class="text-center pt-2" style="font-family: redo;">Personal Details</h5><hr>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Name<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="name" class="form-control" placeholder="Enter Your Name" required=""></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Father's Name<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="fname" class="form-control" placeholder="Enter Your Father's Name" required=""></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Mother's Name<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="mname" class="form-control" placeholder="Enter Your Mother's Name" required=""></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Mobile Number<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="mobilenumber" class="form-control" placeholder="Enter your Mobile Number" required=""></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Alternative Number</td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="altnumber" class="form-control" placeholder="Enter Your Alternative Number" required=""></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Email Id<span style="color: red;">(Only Accepted @ Sign )</span><sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="email" name="email" class="form-control" placeholder="demo@gmail.com" required=""></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Date Of Birth<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="date" name="dob" class="form-control" placeholder="Enter Your DOB" required=""></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive -100">
                                    <tr>
                                        <td>Adhar Number<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="adhar" class="form-control" placeholder="Enter Your Adhar Number" required=""></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Gender<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="gender" class="form-control w-100" required="">
                                                <option disabled="" selected="" value="">Choose Your Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Religion<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="rel" class="form-control w-100" required="">
                                                <option disabled="" selected="" value="">Choose Your Religion</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="islam">Islam</option>
                                                <option value="sikh">Sikh</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Category<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="category" class="form-control w-100" required="">
                                                <option disabled="" selected="" value="">Choose Your Category</option>
                                                <option value="sc/st">SC/ST</option>
                                                <option value="general">General</option>
                                                <option value="obc">OBC</option>
                                                <option value="ebc">EBC</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Photo<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="file" name="photo" class="form-control" required=""></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--address_area start-->
                        <div class="container">
                            <h4 class="text-center" style="font-family: redo;">Address</h4><hr>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Village<sab style="color: red">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="vill" class="form-control" placeholder="Enter Your Village" required=""></td>
                                    </tr>

                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive -100">
                                    <tr>
                                        <td>Post Office<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="post" class="form-control" placeholder="Enter Your Post Office" required=""></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive -100">
                                    <tr>
                                        <td>Police Station<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="police" class="form-control" placeholder="Enter Your Police Station" required=""></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive -100">
                                    <tr>
                                        <td>District<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="dist" class="form-control" placeholder="Enter Your District" required=""></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive -100">
                                    <tr>
                                        <td>State<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="state" class="form-control" placeholder="Enter Your State" required=""></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive -100">
                                    <tr>
                                        <td>Pin Code<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="pin" class="form-control" placeholder="Enter Your Pin Code" required=""></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--address_area end-->

                        <!--Admission details-->
                        <div class="container">
                            <h4 class="text-center" style="font-family: redo;">Admission Details</h4><hr>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>class<sab style="color: red">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="class" class="form-control w-100" required="">
                                                <option disabled="" selected="" value="">Choose Your Class</option>
                                                <option value="nur">Nur</option>
                                                <option value="Kg">Kg</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">08</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Section<sab style="color: red">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="sec" class="form-control w-100" required="">
                                                <option disabled="" selected="" value="">Choose Your Section</option>
                                                <option value="a">A</option>
                                                <option value="b">B</option>
                                                <option value="c">C</option>
                                                <option value="d">D</option>
                                                <option value="e">E</option>
                                                <option value="F">F</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Registration(8-Digit Registration)<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" name="reg" class="form-control" placeholder="Enter Your Reg Number" required=""></td>
                                    </tr>
                                </table>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-04 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td>Admission Date<sab style="color: red;">*</sab></td>
                                    </tr>
                                    <tr>
                                        <td><input type="date" name="adate" class="form-control" placeholder="Enter Admission Date" required=""></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <table class="table table-responsive w-100">
                                    <tr>
                                        <td><input type="submit" name="register" value="Submit" class="btn btn-success">
                                    <input type="reset" name="reset" value="Reset" class="btn btn-danger"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--Admission details end-->
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
    include 'include/footer.php';
?>     