<!DOCTYPE html>
<meta charset="utf-8">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<html>
<title>Unsp. - submit</title>

<head>
    <link rel="stylesheet" href="subsstyle.css">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body class="show">
    <nav class="nav">
        <ul>
            <li><a href="main.html">home</a></li>
            <li><a href="archives.php">archives</a></li>
            <li><a href="about.html">about</a></li>
        </ul>
    </nav>
    <script>
        $(document).ready(function () {

            $('#txt_to').keyup(function () {
                $('#get_to').text($(this).val());
            });
            $('#txt_from').keyup(function () {
                $('#get_from').text($(this).val());
            });
            $('#txt_msg').keyup(function () {
                $('#get_msg').text($(this).val());
            });


        });
    </script>

    <div class="content">
        <h1>Unspoken</h1>
        <p class="desc">
            <b>note:</b> your written submission is/are published and stored in the unspoken archive.<br>acknowledge that the messages you submit are public and can not be deleted.<br> understand that by opening the archives portion of the website, you may encounter various data/messages; view at your own discretion <span style="text-decoration: none;" class='no-italics'>🥰</span>
        </p>
        <p class="desc">
            <br>
            choose message color then input your pseudo name, you can leave "from" text input as "anon" and drop your message. Don't forget to
            submit!<br><br>
        </p>
        <div class="output">
            <div class="export">
                <object style="width: 100%;" data="images/black.svg" alt=""></object>
                <span id="get_to" class="to"></span>
                <span id="get_msg" class="msg" style="color: white;"></span>
                <span id="get_from" class="from"></span>
                <form name="frmContact" class="in" method="post" action="run.php">
                    <p>
                        <label for="from">To</label>
                        <input type="text" class="txt-to" name="txt_to" id="txt_to" placeholder="To..." value=""
                            required maxlength="15" onkeypress="return blockSpecialChar(event)">
                    </p>
                    <label for="from">Message</label>
                    <textarea name="txt_msg" class="txt-msg" id="txt_msg" placeholder="Enter Message..." required maxlength="200"></textarea>
                    </p>
                    <p>
                        <label for="from">From</label>
                        <span><input type="text" class="txt-from" name="txt_from" id="txt_from" placeholder="From..."
                                value="" maxlength="15" onkeypress="return blockSpecialChar(event)"></span>
                    </p>
                    <p>
                        <label for="from">Choose Color</label>
                        <select class="txt-color" id="color" name="txt_color">
                            <option value="black" selected>black</option>
                            <option value="white">white</option>
                            <option value="gray">gray</option>
                            <option value="red">red</option>
                            <option value="orange">orange</option>
                            <option value="yellow">yellow</option>
                            <option value="green">green</option>
                            <option value="blue">blue</option>
                            <option value="pink">pink</option>
                            <option value="purple">purple</option>
                            <option value="brown">brown</option>
                        </select>
                    </p>
                    <p class="buttonsub">
                        <button type="submit" name="Submit" id="Submit" value="submit" class="but">submit</button>
                    </p>
            </div>
            <script type="text/javascript">
                var colorlist = [
                    "images/black.svg",
                    "images/white.svg",
                    "images/gray.svg",
                    "images/red.svg",
                    "images/orange.svg",
                    "images/yellow.svg",
                    "images/green.svg",
                    "images/blue.svg",
                    "images/pink.svg",
                    "images/purple.svg",
                    "images/brown.svg",];

                $('#color').change(function () {
                    var val = document.getElementById("color").selectedIndex;
                    $('object').attr("data", colorlist[val]);
                });

                var colortxt = [
                    "color: white;",
                    "color: black;",
                    "color: black;",
                    "color: white;",
                    "color: white;",
                    "color: black;",
                    "color: black;",
                    "color: white;",
                    "color: black;",
                    "color: white;",
                    "color: white;",];

                var colorinvtxt = [
                    "color: black;",
                    "color: black;",
                    "color: black;",
                    "color: black;",
                    "color: black;",
                    "color: black;",
                    "color: black;",
                    "color: black;",
                    "color: black;",
                    "color: black;",
                    "color: black;",];

                $('#color').change(function () {
                    var val = document.getElementById("color").selectedIndex;
                    $('span.msg').attr("style", colortxt[val]);
                });

                var w = window.screen.availWidth

                if (w < 768){
                    $('#color').change(function () {
                        var val = document.getElementById("color").selectedIndex;
                        $('textarea.txt-msg').attr("style", colortxt[val]);
                    });
                } else {
                    $('#color').change(function () {
                        var val = document.getElementById("color").selectedIndex;
                        $('textarea.txt-msg').attr("style", colorinvtxt[val]);
                    });
                }

                window.onload = () => {
                    const myInput = document.getElementById('txt_to');
                    myInput.onpaste = e => e.preventDefault();
                }
                function blockSpecialChar(e) {
                    var k = e.keyCode == 0 ? e.charCode : e.keyCode;
                    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || (k >= 48 && k <= 57) || k == 95 || k == 32 || k == 109 || k == 35);
                }
                $("#txt_to").on('input', function (key) {
                    var value = $(this).val();
                    $(this).val(value.replace(/ /g, '_'));
                })
                $("#txt_from").on('input', function (key) {
                    var value = $(this).val();
                    $(this).val(value.replace(/ /g, '_'));
                })
            </script>
            </form>
        </div>
    </div>



    </div>


</body>


</html>