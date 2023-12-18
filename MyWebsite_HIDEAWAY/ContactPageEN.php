<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./ContactStyleEN.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Oswald&display=swap" rel="stylesheet">
</head>
<body>

    <div class="MainContainer">

        <header class="PartOne">
             
              <div class="ContainerOne">
                <a href="./MainPageEN.php"><div class="LogoName">
                     <div class="nameFirst"> HIDE </div>
                     <div class="nameSecond"> AWAY </div>
                     <div class="nameThird"> ARCHITECTURE </div>
                  </div>
                </a>
                  <div class="navigationLine">
                     <div class="navColOne">
                       <div class="navAbout"><a href="./AboutPageEN.php">ABOUT</a></div>
                       <div class="navProjects"><a href="./ProjectsPageEN.php">PROJECTS</a></div>
                     </div>
                     <div class="navColTwo">
                       <div class="navPrice"><a href="./PricingPageEN.php">PRICING</a></div>
                       <div class="navCon"><a href="./ContactPageEN.php">CONTACT</a></div>
                     </div>
                     <div class="navLang">EN</div>
                  </div>
              </div>
    
        </header>
    
        <main class="PartTwo">
    
            <div class="IntroText"> Google Maps Location </div>   
            
            
      
            <form class="contactForm" action='./Add_contacts.php' method="post">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2145052525725!2d24.108877209359235!3d56.96272305175912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecf6b7078f7f9%3A0xced89271e3783ede!2sVERDE!5e0!3m2!1sru!2slv!4v1699961750372!5m2!1sru!2slv" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <label for="yourName" class="allLabels">Your name:</label></br>
                <input  required type="text" name="yourName" id="yourName" class="placeHolderStyle" placeholder="" ></br>
                <label for="yEmail" class="allLabels">Your email:</label></br>
                <input  required type="text" name="yEmail" id="yEmail" class="placeHolderStyle" placeholder="" ></br>
                <label for="yNumber" class="allLabels">Your phone number:</label></br>
                <input  required type="text" name="yNumber" id="yNumber" class="placeHolderStyle" placeholder="" ></br>
                <label for="yMessage" class="allLabels">Your message:</label></br>
                <input  required type="text" name="yMessage" id="yMessage" class="placeHolderStyle" placeholder="" ></br></br>
                <input type="submit" value="Submit" id="submitButton" onclick="formReaction(event)" >
            </form>

            
        </main>
    
        <footer class="PartThree">
    
          <div class="ContactInfo"> email: hideaway@gmail.com </br> phone: +371 30084848 </div> 
          <div class="ContactInsta">
             <img height="40px"  src="./SVG Icons/behance.svg" alt="Behance"> 
             <img height="40px"  src="./SVG Icons/instagram.svg" alt="Instagram"> 
             <img height="40px"  src="./SVG Icons/facebook.svg" alt="facebook">
          </div>
    
        </footer>
    
    
    
     </div>
    
     <script src="ContactPageControl.js"></script>
</body>
</html>