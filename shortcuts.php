<?php

$advisor = $_GET["advisor"];

?>

<head>

<title>Staff Shortcuts</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">


</head>

<style>

body{
  font-family: 'Rubik', sans-serif;
  margin: 0px;
}

a {
  color: inherit; /* blue colors for links too */
  text-decoration: inherit; /* no underline */
  width: 50%;
}


.shortcuts{
  display: flex;
  flex-flow: row wrap;
}

.shortcut{
  color: rgba(0,0,0,0.7);
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: calc(10px + 2vw);
  width: 100%;
  height: 33%;
  transition: all 0.5s ease;
}

.shortcut:hover{
  font-size: calc(10px + 3vw);
  color: rgba(0,0,0,1);
}

@-webkit-keyframes easyGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes easyGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes easyGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}

.newOffering{
  background: linear-gradient(270deg, #ec8a8a, #f2935d);
  background-size: 400% 400%;

  -webkit-animation: AnimationName 30s ease infinite;
  -moz-animation: AnimationName 30s ease infinite;
  animation: AnimationName 30s ease infinite;
}

.viewOfferings{
  background: linear-gradient(270deg, #e6b12b, #e5ee65);
  background-size: 400% 400%;

  -webkit-animation: AnimationName 30s ease infinite;
  -moz-animation: AnimationName 30s ease infinite;
  animation: AnimationName 30s ease infinite;
}

.overview{
  background: linear-gradient(270deg, #d2d54b, #9ae470);
background-size: 400% 400%;

-webkit-animation: AnimationName 30s ease infinite;
-moz-animation: AnimationName 30s ease infinite;
animation: AnimationName 30s ease infinite;

}

.roster{
  background: linear-gradient(270deg, #8ce877, #63ddea);
background-size: 400% 400%;

-webkit-animation: AnimationName 30s ease infinite;
-moz-animation: AnimationName 30s ease infinite;
animation: AnimationName 30s ease infinite;

}

.advisory{
  background: linear-gradient(270deg, #82e4d8, #958aec);
  background-size: 400% 400%;

  -webkit-animation: AnimationName 30s ease infinite;
  -moz-animation: AnimationName 30s ease infinite;
  animation: AnimationName 30s ease infinite;
}

.searchList{
  background: linear-gradient(270deg, #a07de6, #d5afe6);
  background-size: 400% 400%;

  -webkit-animation: AnimationName 30s ease infinite;
  -moz-animation: AnimationName 30s ease infinite;
  animation: AnimationName 30s ease infinite;
}

</style>


<body>

<div class = "shortcuts">
  <a href = "http://events.gibsonek.org/Rooms/new/offering"><div class = "shortcut newOffering"><div>New Offering</div></div></a>
  <a href = "http://events.gibsonek.org/dateoffering.html"><div class = "shortcut viewOfferings">View Offerings</div></a>
  <a href = "http://events.gibsonek.org/overview.php"><div class = "shortcut overview">Overview</div></a>
  <a href = "http://events.gibsonek.org/myofferings.php?name=<?php echo $advisor ?>"><div class = "shortcut roster">Rosters</div></a>
  <a href = "http://events.gibsonek.org/dateadvisory.php?advisor=<?php echo $advisor ?>"><div class = "shortcut advisory">Advisory View</div></a>
  <a href = "http://events.gibsonek.org/studentofferings.php"><div class = "shortcut searchList">Search List</div></a>
</div>

</body>