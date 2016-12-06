<header>
    <ul class="topnav" id="myTopnav">
        <li><a href="home"><img src="images/logo.jpg" style="width:45px;"></a></li>
            <li><a href="home">Home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="schema">Programma</a></li>
            <li><a href="contact">Contact</a></li>
            <li class="icon">
                <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
            </li>
        </ul>
</header>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
