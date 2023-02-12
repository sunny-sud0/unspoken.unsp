<!DOCTYPE html>
<meta charset="utf-8">
<html>
<title>Unsp. - msg sent</title>

<head>
    <link rel="stylesheet" href="submittedstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <div class="content">
        <h1>Message Sent!</h1>
        <p><div id="countdown"></div></p>
    </div>

    <script>
        var timeleft = 3;
        var downloadTimer = setInterval(function(){
        if(timeleft <= 0){
        clearInterval(downloadTimer);
        document.getElementById("countdown").innerHTML = "loading...";
        window.location = 'archives.php';
        } else {
            document.getElementById("countdown").innerHTML = "loading...";
        }
            timeleft -= 1;
        }, 1000);
        </script>


</body>


</html>