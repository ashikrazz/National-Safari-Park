<?php include_once ("../Admin/includes/database.php");?>
<!DOCTYPE html>
<html>
<title>National Safari Park</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../Admin/plugins/fontawesome-free/css/all.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

    body, html {
        height: 100%;
        line-height: 1.8;
    }

    /* Full height image header */
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("assets/frontendBackground.jpg");
        min-height: 100%;
    }

    .w3-bar .w3-button {
        padding: 16px;
    }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="index.php" class="w3-bar-item w3-button w3-wide">National Safari Park</a>
        <!-- Right-sided navbar links -->
        <div class="w3-right w3-hide-small">
            <a href="../Admin/login_form.php" class="w3-bar-item w3-button"><i class="fas fa-user-lock"></i> Admin</a>
            <a href="#about" class="w3-bar-item w3-button"><i class="fas fa-address-card"></i> ABOUT</a>
            <a href="#team" class="w3-bar-item w3-button"><i class="fas fa-calendar"></i> Events</a>
            <a href="#work" class="w3-bar-item w3-button"><i class="fas fa-paw"></i> Animals</a>
            <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
            <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="../Admin/login_form.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Admin</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">Events</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-left w3-text-white" style="padding:48px">
        <br><br>
        <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Open Everyday at 10am - 5pm</a></p>
    </div>
    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
    <h3 class="w3-center">About National Safari Park</h3>
    <p class="w3-center w3-large">Bangabandhu Sheikh Mujib Safari Park, Gazipur</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
        <p>
            Bara Rathura mouza of Mauna union under Sreepur upazila of Gazipur district and Pirujali mouza of Pirujali union of Sadar upazila have 4909.0 acres of forest land known as safe habitat for different species of animals. Of this, 3610.0 acres have been included in the master plan of the safari park. The project titled Bangabandhu Sheikh Mujib Safari Park was approved by ECNEC in 2010 at an estimated cost of Taka 63.99 crore and the establishment of the park started and on February 2, 2011 Bangabandhu Sheikh Mujib Safari Park, Gazipur's construction work has officially started. It was not possible to formulate any master plan at the beginning of the project. Later, with the help of local and foreign experts, a master plan was prepared to upgrade the safari park to international standards. The project "Bangabandhu Sheikh Mujib Safari Park, Gazipur (1st Amendment)" was approved by ECNEC on 4 October 2011 at an estimated cost of Tk.
            <br>
            The safari park has been set up in line with the South Asian model, especially the safari world in Thailand. Some ideas of Bali Safari Park in Indonesia have also been inserted. A permanent enclosure is being constructed around the safari park and it has created opportunities for domestic / foreign wildlife to breed and roam freely so that tourists can enjoy education, research and recreation by traveling in moving vehicles or on foot. The idea of ​​a safari park is different from a zoo. Zoo animals are kept in captivity and visitors visit the zoo from the free state. But in the safari park, the wild animals will roam in the open forest and people will be careful in moving vehicles.
        </p>
    </div>
</div>

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
    <div class="w3-row-padding">
        <?php
            $latest_animal = "SELECT p.`animal_id`, p.`animal_title`,p.`animal_image`,p.`animal_details`,c.`category_Name` FROM `animals` as p, `categories` as c WHERE p.category_Id = c.category_Id ORDER BY `animal_id` DESC LIMIT 1";
            $res = mysqli_query($con,$latest_animal);
            $latest_animal = mysqli_fetch_array($res);
        ?>
        <div class="w3-col m6">
            <h3>New <?php echo $latest_animal['animal_title']?> Add in our park</h3>
            <p><?php echo $latest_animal['animal_details']?></p>
            <p><b>Animal Category : <?php echo $latest_animal['category_Name']?></b></p>
            <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> View Our Animals</a></p>
        </div>
        <div class="w3-col m6">
            <img class="w3-image w3-round-large" src="../Admin/animal_image/<?php echo $latest_animal['animal_image']?>" width="700" height="394">
        </div>
    </div>
</div>

<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
    <h3 class="w3-center">Our Events</h3>
    <p class="w3-center w3-large">Lets Know About Our Events</p>
    <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
        <?php
            $event = "SELECT * FROM `events` ORDER BY `event_id` DESC LIMIT 4";
            $res_event = mysqli_query($con,$event);
        while ($events = mysqli_fetch_array($res_event))
        { ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="../Admin/event_image/<?php echo $events['event_image'];?>"style="width:100%;height: 320px;">
                    <div class="w3-container">
                        <h3><?php echo $events['event_name'];?></h3>
                        <p class="w3-opacity">Event Date : <?php echo $events['event_date'];?></p>
                        <p><?php echo $events['event_description'];?></p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
    <h3 class="w3-center">Animals</h3>
    <p class="w3-center w3-large">All Animals in our park</p>

    <div class="w3-row-padding " style="margin-top:64px;">
        <?php
        $latest_animals = "SELECT p.`animal_id`, p.`animal_title`,p.`animal_image`,c.`category_Name` FROM `animals` as p, `categories` as c WHERE p.category_Id = c.category_Id ORDER BY `animal_id` DESC LIMIT 8";
        $res_animal = mysqli_query($con,$latest_animals);
        while ($animal = mysqli_fetch_array($res_animal))
        { ?>
            <div class="w3-col l3 m6" style="margin-bottom: 15px;">
                <img src="../Admin/animal_image/<?php echo $animal['animal_image']?>" style="width:100%;height: 300px;" onclick="onClick(this)" class="w3-hover-opacity">
            </div>
        <?php
        }
        ?>
    </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
</div>

<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
    <h3>PRICING</h3>
    <p class="w3-large">Choose a pricing plan that fits your needs.</p>
    <div class="w3-row-padding" style="margin-top:64px">
        <?php
        $package = "SELECT * FROM `ticket_packages` ORDER BY `package_id` DESC LIMIT 5";
        $res_package = mysqli_query($con,$package);
        while ($packages = mysqli_fetch_array($res_package))
        { ?>
            <div class="w3-third" style="margin-bottom: 15px;width: 20%;">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-red w3-xlarge w3-padding-32"><b><?php echo $packages['package_name'];?></b></li>
                    <li class="w3-padding-16"><?php echo $packages['package_details'];?></li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">BDT <?php echo $packages['package_price'];?></h2>
                        <span class="w3-opacity"><?php echo $packages['discount'];?> % Discount in this package</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Contact US</button>
                    </li>
                </ul>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
    <h3 class="w3-center">CONTACT</h3>
    <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
    <div style="margin-top:48px">
        <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Forest Conservation<br>Wildlife and Conservation Area<br>Forest Building, Agargaon, Dhaka</p>
        <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 0179265711</p>
        <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: nationalsafaripark@mail.com</p>
        <br>
        <form action="/action_page.php" target="_blank">
            <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
            <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
            <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
            <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
            <p>
                <button class="w3-button w3-black" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                </button>
            </p>
        </form>
        <!-- Image of location/map -->

    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="#" title="W3.CSS" target="_blank" class="w3-hover-text-green">National Safari Park</a></p>
</footer>

<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }


    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
        if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
        } else {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
</script>

</body>
</html>
