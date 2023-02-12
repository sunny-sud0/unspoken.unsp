<?php
$con = mysqli_connect("localhost", "root", "", "db_contact");

?>

<!DOCTYPE html>
<meta charset="utf-8">
<html>
<title>Unsp. - archives</title>

<head>
    <link rel="stylesheet" href="archivestyles.css">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body>
    <nav class="nav">
        <ul>
            <li><a href="main.html">home</a></li>
            <li><a href="archives.php">archives</a></li>
            <li><a href="about.html">about</a></li>
            <li><a class="but" onclick="location.href='submit.php'"><span>Submit</span></a></li>

        </ul>
    </nav>
    <div class="content">
        <h1 class="head">Archives</h1>
        <p class="result">
            <?php
            if (isset($_GET['search'])) {
                $filtervalues = $_GET['search'];
                    $query = "SELECT * FROM tbl_contact";

                    $result = mysqli_query($con, $query);

                    $count_rows = mysqli_num_rows($result);

                    echo 'Searching Archives for Messages to ' . "<b>" . '"' . $filtervalues . '"' . "</b>" . "<br>" . "<br>";

                    echo "<b>" . $count_rows . "</b>" . ' Results Found' . "<br>". "<br>";
                }
            ?>
        </p>
        <div class="search">
            <form class="search-form" form action="" method="GET">
                <input type="text" id="search" name="search" value="<?php if (isset($_GET['search'])) {
                    echo $_GET['search'];
                } ?>" placeholder="Search messages">
            </form>
        </div>
        <script>
            $("#search").on('input', function (key) {
                var value = $(this).val();
                $(this).val(value.replace(/ /g, '_'));
            })
        </script>
    </div>
    </div>
    <main>
        <?php

        if (isset($_GET['search'])) {
            $filtervalues = $_GET['search'];
            $query = "SELECT * FROM tbl_contact WHERE CONCAT(fld_to) LIKE '%$filtervalues%'";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $items) {
                    ?>
                    <div class="card">
                        <div class="image">
                            <?php
                            $coldis = $items['fld_color'];
                            $color = array(
                                "black" => "images/black.svg",
                                "white" => "images/white.svg",
                                "gray" => "images/gray.svg",
                                "red" => "images/red.svg",
                                "orange" => "images/orange.svg",
                                "yellow" => "images/yellow.svg",
                                "green" => "images/green.svg",
                                "blue" => "images/blue.svg",
                                "pink" => "images/pink.svg",
                                "purple" => "images/purple.svg",
                                "brown" => "images/brown.svg"
                            );

                            $colch = array(
                                "black" => "white",
                                "white" => "black",
                                "gray" => "black",
                                "red" => "white",
                                "orange" => "white",
                                "yellow" => "black",
                                "green" => "black",
                                "blue" => "white",
                                "pink" => "black",
                                "purple" => "white",
                                "brown" => "white"
                            );


                            ?>
                            <object style="width: 100%;" data="<?php echo $color[$coldis]; ?>" alt=""></object>
                        </div>
                        <div class="caption">
                            <p class="txt_to">
                                <?php echo $items["fld_to"] ?>
                            </p>
                            <?php
                            $coldis = $items['fld_color'];
                            $color = array(
                                "black" => "images/black.svg",
                                "white" => "images/white.svg",
                                "gray" => "images/gray.svg",
                                "red" => "images/red.svg",
                                "orange" => "images/orange.svg",
                                "yellow" => "images/yellow.svg",
                                "green" => "images/green.svg",
                                "blue" => "images/blue.svg",
                                "pink" => "images/pink.svg",
                                "purple" => "images/purple.svg",
                                "brown" => "images/brown.svg"
                            );

                            $colch = array(
                                "black" => "color: white;",
                                "white" => "color: black;",
                                "gray" => "color: black;",
                                "red" => "color: white;",
                                "orange" => "color: white;",
                                "yellow" => "color: black;",
                                "green" => "color: black;",
                                "blue" => "color: white;",
                                "pink" => "color: black;",
                                "purple" => "color: white;",
                                "brown" => "color: white;"
                            );


                            ?>
                            <p class="txt_msg" style="<?php echo $colch[$coldis]; ?>">
                                <?php echo $items["fld_msg"] ?>
                            </p>
                            <p class="txt_from">
                                <?php echo $items["fld_from"] ?>
                            </p>
                            <p class="txt_date">
                                <?php echo 'Posted on ' . "<b>" . $items["fld_date"] . "</b>" . ' in ' . "<b>" .  $coldis . "</b>";?>
                            </p>
                        </div>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="content1">
                    <h2 style="text-align: center; position: relative;">No Messages</h2>
                </div>
                <?php
            }
        } else {
            $list = "SELECT * FROM tbl_contact";
            $all_msg = $con->query($list);
            while ($row = mysqli_fetch_assoc($all_msg)) {
                ?>
                <div class="card">
                    <div class="image">
                        <?php
                        $coldis = $row['fld_color'];
                        $color = array(
                            "black" => "images/black.svg",
                            "white" => "images/white.svg",
                            "gray" => "images/gray.svg",
                            "red" => "images/red.svg",
                            "orange" => "images/orange.svg",
                            "yellow" => "images/yellow.svg",
                            "green" => "images/green.svg",
                            "blue" => "images/blue.svg",
                            "pink" => "images/pink.svg",
                            "purple" => "images/purple.svg",
                            "brown" => "images/brown.svg"
                        );

                        $colch = array(
                            "black" => "white",
                            "white" => "black",
                            "gray" => "black",
                            "red" => "white",
                            "orange" => "white",
                            "yellow" => "black",
                            "green" => "black",
                            "blue" => "white",
                            "pink" => "black",
                            "purple" => "white",
                            "brown" => "white"
                        );


                        ?>
                        <object style="width: 100%;" data="<?php echo $color[$coldis]; ?>" alt=""></object>
                    </div>
                    <div class="caption">
                        <p class="txt_to">
                            <?php echo $row["fld_to"] ?>
                        </p>
                        <?php
                        $coldis = $row['fld_color'];
                        $color = array(
                            "black" => "images/black.svg",
                            "white" => "images/white.svg",
                            "gray" => "images/gray.svg",
                            "red" => "images/red.svg",
                            "orange" => "images/orange.svg",
                            "yellow" => "images/yellow.svg",
                            "green" => "images/green.svg",
                            "blue" => "images/blue.svg",
                            "pink" => "images/pink.svg",
                            "purple" => "images/purple.svg",
                            "brown" => "images/brown.svg"
                        );

                        $colch = array(
                            "black" => "color: white;",
                            "white" => "color: black;",
                            "gray" => "color: black;",
                            "red" => "color: white;",
                            "orange" => "color: white;",
                            "yellow" => "color: black;",
                            "green" => "color: black;",
                            "blue" => "color: white;",
                            "pink" => "color: black;",
                            "purple" => "color: white;",
                            "brown" => "color: white;"
                        );


                        ?>
                        <p class="txt_msg" style="<?php echo $colch[$coldis]; ?>">
                            <?php echo $row["fld_msg"] ?>
                        </p>
                        <p class="txt_from">
                            <?php echo $row["fld_from"] ?>
                        </p>
                        <p class="txt_date">
                                <?php echo 'Posted on ' . "<b>" . $row["fld_date"] . "</b>" . ' in ' . "<b>" .  $coldis . "</b>";?>
                            </p>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>


</html>