<!-- <?php
    require("controller.php");
    $fname;
    $lname;
    $sex;
    $pnumber;
    $email;
    $password;
    
    if(isset($_POST['Reg']))
    {
            $fname = $_POST['fn'];
            $lname = $_POST['ln'];
            $sex = $_POST['sx'];
            $pnumber = $_POST['cn'];
            $email = $_POST['eml'];
            $password = $_POST['pw'];
        

        echo Register($fname, $lname,$sex,$pnumber,$email,$password);  
    }
?> -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Front End, Back End Demo</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container">
            <img src="logo_75df62bfb3d75ba6978524d3f4e71428_1x.png" style="padding-right: 17px;width: 90px;" />
            <a class="navbar-brand logo" href="#">Front End, Back End Demo</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="service-page.html">Services</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="registration.html">Register</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registration</h2>
                </div>
                <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>

                <form method="Post" id="s">
                    <div class="form-group"><label for="fn">First name</label><input class="form-control item" type="text" id="fn"></div>
                    <div class="form-group"><label for="ln">Last name</label><input class="form-control item" type="text" id="ln"></div>
                    <div class="form-group"><label for="sx">Sex</label><select class="form-control" id="sx"><optgroup label="Select"><option value="Male" selected>Male</option><option value="Female">Female</option><option value="Other">Other</option></optgroup></select></div>
                    <div class="form-group"><label for="cn">Contact number</label><input class="form-control item" type="text" id="cn"></div>
                    <div class="form-group"><label for="eml">Email</label><input class="form-control item" type="email" id="eml"></div>
                    <div class="form-group"><label for="pw">Password</label><input class="form-control item" type="password" id="pw"></div><button class="btn btn-primary btn-block" id = "Reg" type="submit">Sign Up</button>

                    <div id="successmessage" class="alert alert-success">
                        <div id="propmtSuc" class="message">Registerd Successfully!</div>
                        </div>
                        <div id="infomessage" class="alert alert-info">
                        <div id = "promptInf"class="message">Please fill all fields.</div>
                        </div>
                        <div id="errormessage" class="alert alert-danger">
                        <div id = "promptEr"class="message">Registration Failed!</div>
                        </div>
                </form>
                        
            </div>

        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© Nicodemie Delgado.</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script>
$(document).ready(function() {

$("#errormessage").hide();
$("#successmessage").hide();
$("#infomessage").hide();
$("#s").submit(function(e){
        e.preventDefault();
    });
$('#Reg').on('click', function() {
$("#Reg").attr("disabled", "disabled");
var fname = $('#fn').val();
var lname = $('#ln').val();
var sex = $('#sx').val();
var phone = $('#cn').val();
var email = $('#eml').val();
var pass = $('#pw').val();

if(fname!="" && lname!="" &&  sex!="" && email!="" && phone!="" && pass!=""){
    $.ajax({
        url: "register.php",
        type: "POST",
        data: {

                fn: fname,
                ln: lname,
                sx: sex,
                cn: phone,
                eml: email,
                pw: pass
        },
        cache: false,
        success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==200){

                $("#successmessage").slideDown(1000).slideUp(2000);
                // $("#success").show();
                // $('#success').html('Data added successfully !');
                $("#Reg").removeAttr("disabled");
                document.getElementById("s").reset();
            }
            else if(dataResult.statusCode==201){
                $("#errormessage").slideDown(1000).slideUp(2000);
                $("#Reg").removeAttr("disabled");
            }
            
        }
    });
    }
    else{

        $("#infomessage").slideDown(1000).slideUp(2000);
        $("#Reg").removeAttr("disabled");

    }
});
});
</script>
</body>

</html>