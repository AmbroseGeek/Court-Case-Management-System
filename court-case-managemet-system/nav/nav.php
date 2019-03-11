<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://ecourts.gov.ke/thika/history" target="_blank"> Thika </a>
  <a href="http://ecourts.gov.ke/kiambu/history" target="_blank"> Kiambu </a>
  <a href="http://ecourts.gov.in/Nyeri/history" target="_blank"> Nyeri </a>
  <a href="http://ecourts.gov.in/pokot/history" target="_blank"> Pokot </a>
  <a href="http://ecourts.gov.ke/matuu/history" target="_blank"> Matuu </a>
  <a href="http://ecourts.gov.in/gilgil/history" target="_blank"> Gilgil </a>
  <a href="http://ecourts.gov.in/wote/history" target="_blank"> Wote </a>
  <a href="http://ecourts.gov.ke/kisio/history" target="_blank"> Kisii </a>
  <a href="http://ecourts.gov.ke/moyale/history" target="_blank"> Moyale </a>
  <a href="http://ecourts.gov.in/kericho/history" target="_blank"> Kericho </a>
  <a href="http://ecourts.gov.ke/Nakuru/" target="_blank"> Nakuru </a>
  <a href="http://ecourts.gov.in/eldoret/history" target="_blank"> Eldoret </a>
  <a href="http://ecourts.gov.in/moga/history" target="_blank"> Moga </a>
  <a href="http://ecourts.gov.ke/voi/history" target="_blank"> Voi </a>
  <a href="http://ecourts.gov.ke/kakuma/history" target="_blank"> Kakuma </a>
  <a href="http://ecourts.gov.ke/taveta/history" target="_blank"> Taveta </a>
  <a href="http://ecourts.gov.ke/murang'a/history" target="_blank"> Murang'a </a>
  <a href="http://ecourts.gov.ke/busia/history" target="_blank">Busia</a>
  <a href="http://ecourts.gov.ke/mandera/history" target="_blank"> Mandera</a>
  <a href="http://ecourts.gov.ke/Siaya" target="_blank"> Siaya </a>
  <a href="http://ecourts.gov.in/tarn-taran/history" target="_blank"> Tarn Taran </a>
  <a href="#" target="_blank"> </a>
  <a href="#" target="_blank"> </a>

</div>


<span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776; Magistrate Courts</span>



<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
</body>
</html> 
