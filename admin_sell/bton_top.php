<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./Css/bt_top.css">
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


<div style="background-color:white;padding:30px 30px 2500px"></div>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>