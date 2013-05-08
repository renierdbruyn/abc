<?php
session_start();

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {

    echo "<frameset rows=\"300px, *\" framespacing=8 frameborder=0>";
    echo"<frame src=\"../Log/index.php\" SCROLLING=\"no\" name='banner' noresize/>";
    echo"<frameset cols=\"220px%,*\">";
    echo"<frame src=\"list.php\" name=\"navigation\" SCROLLING=\"no\" noresize/>";
    echo"<frame src=\"YCR.php\" name=\"mainPage\"  noresize/>";
    echo"</frameset>";
} else {

    header('location:../Log/Login.php');
}
?>
<html>

</html>