<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hideaway</title>
    <link rel="stylesheet" href="./MainStyleEN.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&display=swap" rel="stylesheet">
</head>
<body>
 <div class="MainContainer">

    <header class="PartOne">
         
          <div class="ContainerOne">
              <div class="nameFirst"> HIDE </div>
              <div class="nameThird"> ARCHITECTURE </div>
              <div class="nameFourth"> email: hideaway@gmail.com </br> phone: +371 30084848 </div>
          </div>

          <div class="ContainerTwo"> 
            <div class="nameSecond"> AWAY </div>
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

          <div class="IntroText"> When most people dream of having their own private house, they often prioritize the idea of creating a perfect hideaway. The allure of a place like this lies in its ability to offer solitude, peace, and the freedom be oneself. </br></br>
          Together we will create your individual private house project and guide you from the first sketch till construction, trying to find the best possible solutions. </div>   

          <div class="PortfolioS">
            <div class="Houses Ber">
               <div class="HouseBerTOP"> PRIVATE HOUSE 01. </br> BERGI, LATVIA </div> 
               <div class="HouseBerPic"></div>
               <div class="BerInfo"> Total area: 256m2 </br> Number of stories: 2 </div>
               <button class="BerMore JustMore" onclick="projectsMoreOne()" > MORE INFO </button>
            </div>
            <div class="Houses Car">
               <div class="HouseCarTOP"> PRIVATE HOUSE 02. </br> CARNIKAVA, LATVIA </div> 
               <div class="HouseCarPic"></div>
               <div class="CarInfo"> Total area: 256m2 </br> Number of stories: 2 </div>
               <button class="CarMore JustMore" onclick="projectsMoreTwo()" > MORE INFO </button>
            </div>
            <div class="Houses Ram">
               <div class="HouseRamTOP"> PRIVATE HOUSE 03. </br> RAMAVA, LATVIA </div> 
               <div class="HouseRamPic"></div>
               <div class="RamInfo"> Total area: 256m2 </br> Number of stories: 1 </div>
               <button class="RamMore JustMore" onclick="projectsMoreThree()"> MORE INFO </button>
            </div>
            <div class="MoreProjects"><a href="./ProjectsPageEN.php"> MORE PROJECTS </a></div> 
          </div>

          <div class="OutroText"> Designing a house from scratch is a complex process, which consists of many stages. If you want to learn more about every design stage, <a href="./AboutPageEN.php">read here.</a></div>  
      
    </main>

    <footer class="PartThree">

      <div class="ContactInfo"> email: hideaway@gmail.com </br> phone: +371 30084848 </div> 
      <div class="ContactInsta">
         <img height="40px" class="BehanceImg" src="./SVG Icons/behance.svg" alt="Behance"> 
         <img height="40px"  src="./SVG Icons/instagram.svg" alt="Instagram"> 
         <img height="40px"  src="./SVG Icons/facebook.svg" alt="facebook">
      </div>

    </footer>



 </div>
 <script src="ProjectsMore.js"></script>
</body>
</html>