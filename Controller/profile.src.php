<style>
    .navigation
    {
        float:left;
        clear:right;
        width:20%;
        height:100%;
        background:#F0F0F0;
    }

    .main
    {
        height:80%;

    }

    ul
    {
        padding:0px;
        margin:0px;

    }

    li
    {
        padding:0px;
        margin:0px;
        list-style:none;
        width:100%;
        height:50px;
    }

    a
    {
        display:block;
        width:100%;
        height:40px;
        background:white;
        text-decoration:none;
        font-size:20px;

    }

    iframe
    {
        position:absolute;			
        left:21%;
        right:1%;
        z-index:2;
        width:100%;
        shadow:0px;
        height:125%;
    }

    body
    {
        width:100%;
        height:100%;
        background:#F0F0F0;
    }
    input
    {
        width:90%;
        height:30px;

    }

    label
    {
        width:90%;
        height:30px;
        font-size:20px;
        margin-left:30%;
    }

    .out
    {
        color:red;
        font-weight:bold;
        font-size:17px;
    }
</style>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />  

<script src="http://code.jquery.com/jquery-1.9.1.js"></script> 

<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>

<link rel="stylesheet" href="/resources/demos/style.css" /> 

<script>
    $(function() {
        $("input[type=submit], a, button").button().click(function(event)
        {
            event.preventDefault();
        });
    });

</script>

<div class="navigation">
    <form>

        <ul>
            <li>&nbsp;</li>
            <li><label id="username">Offline</label></li>
            <li><input type="button" value="Online CV" onclick="main.location.replace('../View/personal.php');"/></li>
            <li><input type="button" value="Documents" onclick="main.location.replace('../View/documents.php');"/></li>
            <li><input type="button" value="Applications" onclick="main.location.replace('../View/applications.php');"/></li>
        </ul>
    </form>
</div>

<div class="main">
    <iframe width="500" height="500" src="../View/welcome.php" name="main"/>
</div>