<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./ProjectsStyleEN.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&display=swap" rel="stylesheet">
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
    
            <div class="PortfolioOne">
                <div class="Houses Ber">
                   <div class="HouseBerTOP"> PRIVATE HOUSE 01. </br> BERGI, LATVIA </div> 
                   <div class="HouseBerPic"></div>
                   <div class="BerInfo"> Total area: 256m2 </br> Number of stories: 2 </div>
                   <button class="BerMore JustMore" onclick="projectsMoreOne()"> MORE INFO </button>
                </div>
                <div class="Houses Car">
                   <div class="HouseCarTOP"> PRIVATE HOUSE 02. </br> CARNIKAVA, LATVIA </div> 
                   <div class="HouseCarPic"></div>
                   <div class="CarInfo"> Total area: 256m2 </br> Number of stories: 2 </div>
                   <button class="CarMore JustMore" onclick="projectsMoreTwo()"> MORE INFO </button>
                </div>
                <div class="Houses Ram">
                   <div class="HouseRamTOP"> PRIVATE HOUSE 03. </br> RAMAVA, LATVIA </div> 
                   <div class="HouseRamPic"></div>
                   <div class="RamInfo"> Total area: 256m2 </br> Number of stories: 1 </div>
                   <button class="RamMore JustMore" onclick="projectsMoreThree()"> MORE INFO </button>
                </div>
            </div>

            <div class="PortfolioTwo">
              <div class="Houses Gar">
                <div class="HouseGarTOP"> PRIVATE HOUSE 04. </br> GARKALNE, LATVIA </div> 
                <div class="HouseGarPic"></div>
                <div class="GarInfo"> Total area: 256m2 </br> Number of stories: 1 </div>
                <button class="GarMore JustMore" onclick="projectsMoreFour()"> MORE INFO </button>
             </div>
             <div class="Houses Ald">
                <div class="HouseAldTOP"> PRIVATE HOUSE 05. </br> ALDERI, LATVIA </div> 
                <div class="HouseAldPic"></div>
                <div class="AldInfo"> Total area: 256m2 </br> Number of stories: 2 </div>
                <button class="AldMore JustMore" onclick="projectsMoreFive()"> MORE INFO </button>
             </div>
             <div class="Houses Ada">
                <div class="HouseAdaTOP"> PRIVATE HOUSE 06. </br> ADAZHI, LATVIA </div> 
                <div class="HouseAdaPic"></div>
                <div class="AdaInfo"> Total area: 256m2 </br> Number of stories: 2 </div>
                <button class="AdaMore JustMore" onclick="projectsMoreSix()"> MORE INFO </button>
             </div>
           </div>
          
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
     <script src="ProjectsMore.js"></script>
</body>
</html>