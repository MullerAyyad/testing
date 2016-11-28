<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Route</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Styles/Khalil.css">



    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js">
    </script>

    <script type="text/javascript" >
        $(function() {
            $("#accountSubmit").click(function() {
                var accountid = $("#accountid").val();
                var type = $("#type").val();
                var accountpassword = $("#accountpassword").val();
                var datastring =  "success";
                if(accountid=='' || type=='' || accountpassword=='')
                {
                    $('.success').fadeOut(200).hide();
                    $('.error').fadeOut(200).show();
                }
                else
                {
                    $.ajax({
                        type: "POST",
                        url: "accountInfoForm.php",
                        data: dataString,
                        success: function(){
                            $('.success').fadeIn(200).show();
                            $('.error').fadeOut(200).hide();
                        }
                    });
                }
                return false;
            });
        });
    </script>

</head>
<body text="white">


<nav id="pageNav" style="padding-top:10px;margin: 0px;border-radius: 0px;border:none;background-color: rgb(10, 36, 64);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);min-height: 90px;" class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button style="background-color:  rgb(10, 36, 64);" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div style="margin-right:70px;margin-left:20px;width:40px;padding:0px;" class="boxShadowTransparent">
                <img class="fullWidth" src="logoCropped.png" />
            </div>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li style="min-height: 64px;" ><a class="shadowDagger" style="color: white; font-family: 'Lobster', cursive;
    font-family: 'Anton', sans-serif;font-size:24px;margin-top:7px;" href="/Route">HOME</a></li>

                <li style="min-height: 64px;"  ><a class="shadowDagger"  style="color: white; font-family: 'Lobster', cursive;
    font-family: 'Anton', sans-serif;font-size:24px;margin-top:7px;" href="/Route">CONTACT</a></li>
                <li style="min-height: 64px;" ><a class="shadowDagger" style="color: white; font-family: 'Lobster', cursive;
    font-family: 'Anton', sans-serif;font-size:24px;margin-top:7px;" href="ControlPanel.php">CONTROL PANEL</a></li>

                <li style="min-height: 64px;" ><a class="shadowDagger" style="color: white; font-family: 'Lobster', cursive;
    font-family: 'Anton', sans-serif;font-size:24px;margin-top:7px;" href="/Route">ABOUT US</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><a onmouseover="this.style.color='#00bd0a'" onmouseleave="this.style.color='white'"style="color: white; font-family: 'Lobster', cursive;
    font-family: 'Anton', sans-serif;font-size:24px;margin-top:5px;" href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>

</nav>



<div class="loginBody container-fluid padding20">
    <br><br><br>
    <div id="globalMap"style="align: center; border: 2px white solid">
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">

        </script>
        <div style="overflow:hidden;height:500px;width:600px;">
            <div id="gmap_canvas" style="height:500px;width:600px;">
                <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                <a class="google-map-code" href="http://www.embedgooglemap.net" id="get-map-data">
                    www.embedgooglemap.net</a></div><script type="text/javascript">
            function init_map(){
                var myOptions = {zoom:13,center:new google.maps.LatLng(31.978811661585755,35.905748458300764),mapTypeId: google.maps.MapTypeId.ROADMAP};
                map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(31.978811661585755, 35.905748458300764)});
                infowindow = new google.maps.InfoWindow({content:"<b>PSUT</b><br/><br/> " });
                google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
                infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
        </script>
            </div>

    </div>

    <div id="formsDiv"  style="border: 2px white solid; align: center; padding: 15px; margin: 15px;">
        <div id="studentForm" class="forms" style="border: 2px white solid;" width="40%">
            <h2 align="center"> Student form </h2>
            <form action="student_form.php" method="post">
                First name:<br>
                <input required type="text" name="firstname">
                <br>
                Last name:<br>
                <input required type="text" name="lastname">
                <br>
                Gender: <br>
                <input type="radio" name="gender" value="male"> Male
                <br>
                <input type="radio" name="gender" value="female"> Female
                <br>
                Date of Birth: <br>
                <input type="date" name="dob">
                <br>
                Grade: <br>
                <input required type="number" name="grade" min="0" max="12">
                <br>
                Student Bus: <br>
                <input required type="text" name="studentbus">
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>

        <br><br>

        <div id="parentForm" class="forms" style="border: 2px white solid;" width="40%">
            <h2 align="center"> Parent form </h2>
            <form action="action_page.php">
                First name:<br>
                <input type="text" name="firstname">
                <br>
                Last name:<br>
                <input type="text" name="lastname">
                <br>
                Gender: <br>
                <input type="radio" name="gender" value="male"> Male
                <br>
                <input type="radio" name="gender" value="female"> Female
                <br>
                Date of Birth: <br>
                <input type="date" name="dob">
                <br>
                Mobile Number: <br>
                <input type="text" name="number" minlength="10">
                <br>
                Address: <br>
                <input type="text" name="address">
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>

        <br><br>

        <div id="driverForm" class="forms" style="border: 2px white solid;" width="40%">
            <h2 align="center"> Driver Form </h2>
            <form action="action_page.php">
                First name:<br>
                <input type="text" name="firstname">
                <br>
                Last name:<br>
                <input type="text" name="lastname">
                <br>
                Gender: <br>
                <input type="radio" name="gender" value="male"> Male
                <br>
                <input type="radio" name="gender" value="female"> Female
                <br>
                Date of Birth: <br>
                <input type="date" name="dob">
                <br>
                Mobile Number: <br>
                <input type="text" name="number" minlength="10">
                <br>
                Address: <br>
                <input type="text" name="address">
                <br>
                Bus: <br>
                <input type="text" name="bus">
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>

        <br><br>

        <div id="busForm" class="forms" style="border: 2px white solid;" width="40%">
            <h2 align="center"> Bus Form</h2>
            <form action="action_page.php" method="post">
                Bus Model: <br>
                <input type="text" name="busmodel" maxlength="25">
                <br>
                Bus Model Year: <br>
                <input type="date" name="busmodelyear">
                <br>
                Bus Capacity: <br>
                <input type="number" name="capacity">
                <br>
                Bus Idle Time: <br>
                <input type="time" name="idletime">
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>

        <br><br>

        <div id="accountForm" class="forms" style="border: 2px white solid;" width="40%">
            <h2 align="center"> Account Form</h2>
            <form name="form" method="post" enctype="multipart/form-data">
                Account ID: <br>
                <input required type="text" name="accountid">
                <br>
                Account Type: <br>
                <input required type="number" name="type" maxlength="1" max="3" min="1">
                <br>
                Account Password: <br>
                <input required type="password" name="accountpassword" minlength="6">
                <br><br>
                <div>
                    <span class="error" style="display:none"> Please Enter Valid Data </span>
                    <span class="success" style="display:none"> Registration Successfully </span>
                    <input type="submit" value="Submit" id="accountSubmit">
                </div>

            </form>
        </div>
    </div>
</div>


</body>


</html>
