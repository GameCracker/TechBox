<!DOCTYPE html>
<html>
<head>
    <meta charset=”utf-8”>
    <title>
        Feeds
    </title>
    <link rel=”stylesheet” href=”bootstrap/css/bootstrap.css”  type=”text/css”/>
</head>

<Body>
<!--<img class="alignleft" src="images/image4.jpg" width="300" height="250" alt="" />-->
<h1>
    Add your new feed and select tag for it!
</h1>
<?php
echo "<form action=\"http://localhost/TechBox/insert_feeds.php\" method=\"post\">"
?>
Please enter the feed you want to add:<br />
<input name="url" type="url">
<br/>
Please select your tag for this feed:<br/>
<input type="hidden" name="tag" value="1"></p>
<select name="tags[]" size="15" multiple="multiple">
    <option value="Security">Security</option>
    <option value="Software">Software</option>
    <option value="Storage">Storage</option>
    <option value="Mobility">Mobility</option>
    <option value="Cloud Computing">Cloud Computing</option>
    <option value="Big Data">Big Data</option>
    <option value="Social">Social</option>
    <option value="Virtualization">Virtualization</option>
    <option value="United Communications">United Communications</option>
    <option value="Internet">Internet</option>
    <option value="BI/Analytics">BI/Analytics</option>
    <option value="Hardware">Hardware</option>
    <option value="Green IT">Green IT</option>
    <option value="Data Center">Data Center</option>
    <option value="Open Source">Open Source</option>
</select>

<input type="submit" value="submit" >

</form>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src=”bootstrap/js/bootstrap.js”></script>
</Body>


</html>