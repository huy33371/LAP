<!DOCTYPE html>
<html>
<head>
<title> STUDENT RESULTS RATING</title>
<!-- Unicode Vietnamese -->
<meta charset="UTF-8">
<meta name="author" content=" trendemy.com" />
<!-- css definition file -->
<link href="style.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
<h2> CLASSIFICATION OF STUDENT RESULTS</h2>
<!-- Form to send processing results -->
<!-- action is the landing page, the # value is sent to the

current page itself.
The method is post. -->
<form action="#" method="post">
<!-- Mathematics -->
<div class="row">
<div class="lbltitle">
<label> Math scores </label>
</div>
<div class="lblinput">
<!-- name="math" is the variable name sent to the

server,

isset($_POST['math']) check if the variable is defined

or not -->

<input type="number" name="math"
value="<?php echo isset($_POST['math']) ?

$_POST['math'] : "" ; ?>" />
</div>
</div>
<!-- Physics -->
<div class="row">
<div class="lbltitle">
<label> Physics scores</label>
</div>
<div class="lblinput">
<input type="number" name="physics"
value="<?php echo isset($_POST['physics']) ?

$_POST['physics'] : "" ; ?>" />

</div>
</div>
<!-- Chemistry -->
<div class="row">
<div class="lbltitle">
<label> Chemistry scores</label>
</div>
<div class="lblinput">
<input type="number" name="chemistry"
value="<?php echo isset($_POST['chemistry']) ?

$_POST['chemistry'] : "" ; ?>" />

</div>
</div>
<div class="row">
<div class="lbltitle">
<label> Select an area</label>
</div>
<div class="lblinput">
<input type="number" name="chemistry"
value="<?php echo isset($_POST['chemistry']) ?

$_POST['chemistry'] : "" ; ?>" />

</div>
</div>
<!-- Form send button, command button to send results -->
<div class="row">
<div class="submit">
<input type="submit" name="btnsubmit" value="

Ratings" />

</div>
</div>
</form>
</div>
</body>
</html>
html {
font-family: sans-serif;
}
body {
margin: 0px;
}
h1,
h2,
h3,
h4,
h5,
h6 {
margin: 25px 0 15px 0;
}
h2 {
font-size: 17px;
font-weight: bold;
}
#wrapper {
width: 80%;
margin: 0 auto;
}
.row {
width: 100%;
display: inline-block;
margin-bottom: 5px;
}
.lbltitle {
width: 20%;
float: left;
}
.lblinput,
.lbloutput {
width: 80%;
float: left;
}
.submit {
padding: 10px 0;
text-align: center;
width: 50%;
}
