<html>
<head>
    <title>Insert feeds, url and tags to database</title>
</head>
<body>
<?php
    /*echo $_POST['url'];
    echo $_POST['tag'];*/
    $DB_NAME = "yetu1_TechBox";
    $DB_USER = "yetu1_TechBox";
    $DB_HOST = "engr-cpanel-mysql.engr.illinois.edu";
    $DB_PASSWORD = "cs411";

    $url = $_POST['url'];
    print $url;
    //echo "Hello";
    $modifier = explode("/", $url);
    //echo "Hello";
    $length = count($modifier);
    //echo $length;
    if($modifier[$length-1] == "" || $modifier[$length-1] == " ")
        $title = $modifier[$length - 2];
    else
        $title = $modifier[$length - 1];
    $special_char = array("-", "=");
    $title = str_replace($special_char, " ", $title);
    print $title;
    $tags = $_POST['tags'];
    /*if(empty($tags) || is_null($tags))
        echo "empty tag";
    else
        echo "none empty tag";*/
    print_r($tags);
    //echo implode(", ", $tags);

    @$db = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    if(mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }

    if(is_array($tags)) {
        foreach($tags as $tag) {
            $state = $db->prepare("INSERT INTO Urls (url, title, tag) VALUES (?, ?, ?)");
            $state->$sc->bind_param("sss", $url, $title, $tag);
            $state->execute();
            $state->close();
        }
    }
    else {
        $state = $db->prepare("INSERT INTO Urls (url, title, tag) VALUES (?, ?, ?)");
        $state->$sc->bind_param("sss", $url, $title, $tags);
        $state->execute();
        $state->close();
    }
    $db->close();
?>
</body>
</html>

