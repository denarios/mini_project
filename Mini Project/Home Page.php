<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MHARO RAJASTHAN</title>
    <link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Qahiri&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

<script type="text/javascript">

window.onload = checkCookie()


window.onload = function(){

document.getElementById("lol1").onmouseover = function() {mouseOver()};
document.getElementById("lol1").onmouseout = function() {mouseOut()};

function mouseOver() {
document.getElementById("lol1").style.color = "white";
console.log("Its Red Now");
}

function mouseOut() {
document.getElementById("lol1").style.color = "black";
console.log("Its Black Now");
}}



      function Redirect() {
               window.location = "https://en.wikipedia.org/wiki/Amer_Fort";
                    }
                    function Redirect2() {
               window.location = "https://en.wikipedia.org/wiki/Mehrangarh";
                    }
                    function Redirect3() {
               window.location = "https://en.wikipedia.org/wiki/Jaisalmer_Fort";
                    }
                    function Redirect4() {
               window.location = "https://en.wikipedia.org/wiki/Ranthambore_Fort";
                    }
                    function Redirect5() {
               window.location = "https://en.wikipedia.org/wiki/Chittor_Fort";
                    }
                    function Redirect6() {
               window.location = "https://www.tourmyindia.com/states/rajasthan/taragarh-fort-bundi.html";
                    }
                    function Redirect7() {
               window.location = "https://en.wikipedia.org/wiki/Gagron_Fort";
                    }
                    function Redirect8() {
               window.location = "https://en.wikipedia.org/wiki/Kumbhalgarh";
                    }
                    function Redirectfd() {
               window.location = "https://en.wikipedia.org/wiki/Ghoomar";
                    }

                    function Redirectfd2() {
               window.location = "https://en.wikipedia.org/wiki/Kalbelia";
                    }


//  Demonstrate the use of javascript cookies
function createCookie(cookieName,cookieValue,daysToExpire)
        {
          var date = new Date();
          date.setTime(date.getTime()+(daysToExpire*24*60*60*1000));
          document.cookie = cookieName + "=" + cookieValue + "; expires=" + date.toGMTString();
        }
		function accessCookie(cookieName)
        {
          var name = cookieName + "=";
          var allCookieArray = document.cookie.split(';');
          for(var i=0; i<allCookieArray.length; i++)
          {
            var temp = allCookieArray[i].trim();
            if (temp.indexOf(name)==0)
            return temp.substring(name.length,temp.length);
       	  }
        	return "";
        }
		function checkCookie()
        {
          var user = accessCookie("testCookie");
          if (user!="")
        	alert("Welcome Back " + user + "!!!");
          else
          {
            user = prompt("Please enter your name");
            num = prompt("How many days you want to store your name on your computer?");
            if (user!="" && user!=null)
            {
            createCookie("testCookie", user, num);
            }
          }
        }

      </script>
<style>
    div.scrollmenu {
      background-color: #333;
      overflow: auto;
      white-space: nowrap;
    }
    
    div.scrollmenu a {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 17px;
      text-decoration: none;
    }
    
    div.scrollmenu a:hover {
      background-color: #777;
    }
    </style>
</head>
<body>
    <div class="scrollmenu">
      <a href="https://www.tourmyindia.com/blog/interesting-facts-about-rajasthan/">100 Amazing Facts about Rajasthan</a>
      <a href="https://www.trivago.in/?aDateRange%5Barr%5D=2021-07-08&aDateRange%5Bdep%5D=2021-07-09&aPriceRange%5Bfrom%5D=0&aPriceRange%5Bto%5D=0&iRoomType=7&aRooms%5B0%5D%5Badults%5D=2&cpt2=64950%2F200&hasList=1&hasMap=0&bIsSeoPage=0&sortingId=1&slideoutsPageItemId=&iGeoDistanceLimit=20000&address=&addressGeoCode=&offset=0&ra=&overlayMode=">Book</a>
      <a href="https://www.thrillophilia.com/top-tourist-places-to-visit-in-rajasthan" target="_blank">101
        Places to Visit in Rajasthan</a>
        <a href="https://gayathriscookspot.com/2013/07/complete-rajasthani-thali/" target="_blank">Complete Rajasthani Thali</a>
        <a href="https://en.wikipedia.org/wiki/Tourism_in_Rajasthan" target="_blank">Tourism in Rajasthan</a>
        <a href="https://en.wikipedia.org/wiki/Climate_of_Rajasthan" target="_blank"> Climate of Rajasthan</a>
        <a href="https://www.patrika.com/rajasthan-news/" target="_blank">News</a>
        <!-- <a href="https://paytm.com/helpinghand/rajasthan-chief-minister-relief-fund" target="_blank">Support</a> -->
        <!-- <a href="https://www.rajasthan.gov.in/Education/CollegesAndUniversities/Pages/default.aspx" target="_blank">Education</a>   -->
        <a href="https://www.rajasthan.gov.in/Connect/Pages/ContactUs.aspx" target="_blank">Contact Us</a>
        
       
      </div>
 
    <div id="bg1">
    <br>
    <br>

    <form action="testform.php" method="get" >
      <label for="fname">First Name</label> <br>
      <input type="text" id="one" name="fname" placeholder="Harry"> <br>
      <label for="lname">Last Name</label> <br>
      <input type="text" id="one" name="lname" placeholder="Potter"> <br>
      <label for="email">Email</label> <br>
      <input type="text" id="one" name="email" placeholder="xyz@gmail.com"> <br>
      <label for="password">Password</label> <br>
      <input type="password" placeholder="****" id="one" required> <br>
      <label for="phone no.">Phone No.</label> <br>
      <input type="phone no." placeholder="91+" > <br>
      <label for="pin">PIN Code</label> <br>
      <input type="pin" id="one" name="pin" placeholder="" size="6" maxlength="6" > <br>
      <input type="submit" value="Sign up"> 
    </form>
    <h3 id="qa"> च्यार दिनां री चानणी, फेर अँधेरी रात | <br>
        (Chyaar dinaan ri chanani, fer andheri raat) <br>
        Happy days don’t last for long.</h3>
    <br>
    <br> 
    <?php
    $command = escapeshellcmd('F:\VS Code\Mini Project\lab1.py');
    $output = shell_exec($command);
    echo $output;
?>
    <br>
    <br>
    <br>
    <br>
    <p id="lol">केसरिया बालम आवोनी ,</p> <p id="lol1"> पधारो म्हारे देश जी |</p>
    <br>
    <br>
    <br>
    <br>
    <br>
     
    <br>
    <br>
    <br>
        <fieldset>
            <legend>Lt.Col. James Tod</legend>
            “The Rajput race is the noblest and proudest in India, <br> they are of the highest antiquity and purest descent, <br> they have a military autocracy of a feudal type, <br> and brave and chivalrous, keenly sensitive to an affront, <br> and especially jealous of the honour of their women.” 
        </fieldset>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
       </div>
       <div id="bg2">
        <br>
      <h1 class="fd">The Traditional Folk Dances</h1>
      <div class="row1">
        <div class="column1"> 
          <img src="GHOOMAR.png" alt="" onclick="Redirectfd()" width="400px"  height="400px">
          <figcaption>GHOOMAR <br><p class="dance"> Ghoomar is one of the most popular folk dances of Rajasthan, once performed as entertainment for royalty. Introduced by the Bhil tribe, and later adopted by royal communities including the Rajputs, it is performed by women on festivals and special events such as Holi, Teej, and the arrival of a newlywed bride at her marital house. The women wear traditional outfits, a ghagra (a long, swirling skirt) and kanchli or choli (a blouse). To complete the ensemble an odhani (a veil) is draped,  covering the face. The beauty of this folk genre lies in its graceful movements that involve swaying hands, clapping and twirling around, while singing the traditional songs set to traditional musical instruments. The coordinated movement among the dancers and their whirling outfits, coupled with the upbeat rhythm and music, leave spectators mesmerised. It’s hugely popular in places like Udaipur, Kota, Bundi and Jodhpur. Often you will be asked to join in too. </p></figcaption>
        </div>
        <div class="column1">
          <img src="kalbeliya.png" alt="" onclick="Redirectfd2()" width="400px" height="400px">
          <figcaption>kalbeliya <br><p class="dance">Kalbelia (or Kalbeliya), a folk dance of Rajasthan is popularly known as “Sapera Dance” or the “Snake Charmer Dance” since its movements are almost serpentine. The tribal community Kalbelia created the dance. It is a beautiful dance form where women wear their traditional costume: an angrakhi (a jacket-like garment), odhani (veil), and a black swirling ghagra (long skirt). They dance sensuously, in formations that curl around each other to mimic the movement of a snake. The dances are set to music played by men using traditional instruments such as the dholak (a two-headed drum), khanjari (percussion instrument), and pungi (a woodwind instrument). There are other traditional musical instruments that are used too, like the dufli, morchang and khuralio. The songs are based on stories taken from folklore and mythology. Jodhpur, Jaisalmer, Bikaner, Barmer, Jalore, Jaipur, and Pushkar are some of the best places to enjoy this dance form.</p></figcaption>
        </div>
      </div>
      <a href="https://travel.earth/folk-dances-from-rajasthan/" class="dance" target="_blank" >etc..</a>
        <br>
        <br>
        <br>
        </div>
      <div id="bg3">
        <br>
       <h1 class="pg3">
         The Historical Forts..
       </h1>
       <div class="row">
        <div class="column">    
       <img src="Amer-fort.png" alt="" ondblclick="Redirect()" width="200px">
       <figcaption>Amer-fort,Jaipur</figcaption>
      </div>
      <div class="column">
        <img src="Mehrangarh-Fort.png" alt="" ondblclick="Redirect2()" width="200px">
         <figcaption>Mehrangarh-Fort,Jodhpur</figcaption>
      </div>
      <div class="column">
        <img src="Jaisalmer-Fort.png" alt="" ondblclick="Redirect3()" width="200px"> 
        <figcaption>Jaisalmer-Fort,Jaisalmer</figcaption>
      </div>
      <div class="column">
        <img src="Ranthambore-Fort.png" alt="" ondblclick="Redirect4()" width="200px">
        <figcaption>Ranthambore Fort, Ranthambore National Park</figcaption>
      </div>
      <div class="column">
        <img src="Chittorgarh-Fort.png" alt=""  ondblclick="Redirect5()" width="200px">
        <figcaption>Chittorgarh Fort, Chittorgarh</figcaption>
      </div>
      <div class="column">
        <img src="/Mini Project/taragarh-fort.png" alt="" ondblclick="Redirect6()" width="200px">
        <figcaption>Taragarh Fort, Bundi</figcaption>
      </div>
      <div class="column">
        <img src="Gagron-Fort.png" alt="" ondblclick="Redirect7()" width="200px">
        <figcaption> Gagron Fort,Jhalawar</figcaption>
      </div>
      <div class="column">
        <img src="Kumbhalgarh-Fort.png" alt="" ondblclick="Redirect8()" width="200px">
        <figcaption> Kumbhalgarh Fort, Rajsamand</figcaption>
        </div>
      </div>
      <p id="etc">
       <a href="https://traveltriangle.com/blog/forts-in-rajasthan/" target="_blank">etc...</a>
      </p>


      </div>

           <!-- footer section  -->

<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>about us</h3>
          <p>AP Team Members<br>1.Shivam Gupta  Roll No. BT20CSE110 <br> 2.Pranjal Goyal  Roll No. BT20CSE014 <br>3.Abhinav Rai Dixit BT20CSE108 <br>4.Chakshu Tyagi  Roll No.BT20CSE142  <br>5.Ali Mehndi  Roll No.BT20CSE145</p>
      </div>
      
      <div class="box">
          <h3>quick links</h3>
          <a href="#">home</a>
          <a href="#">book</a>
          <a href="#">packages</a>
          <!-- <a href="#">services</a>
          <a href="#">gallery</a>
          <a href="#">review</a>
          <a href="#">contact</a> -->
      </div>
      <div class="box">
          <h3>follow us</h3>
          <a href="#">facebook</a>
          <a href="#">instagram</a>
          <a href="#">twitter</a>
          <a href="#">linkedin</a>
      </div>

  </div>
  <h1 class="credit"> created by <span> web designer </span> | all rights reserved! </h1>
</section>
</body>
</html>