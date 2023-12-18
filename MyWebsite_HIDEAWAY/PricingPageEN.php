<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <link rel="stylesheet" href="./PricingStyle.css">

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
    
              <div class="IntroText"> As there are many paths we can take when designing your perfect house project, the price will also depend on many aspects. First of all it's the overall area of the house as well as its design solution complexity. Secondly it's the scale of the project. Maybe you only need a concept  or maybe a brief architectural project, but not the whole architectural project with all the engineering parts included. </br></br>
              Below we created a pricing calculator, so you can see how much your project could cost. If you have any other questions, feel free to contact us for more information.
              </div>   
    
              <form class="pricingCalculator">
                <div class="calcInput">
                   <label for="houseArea" class="allLabels">Please fill in the approximate area of your desired house:</label></br>
                   <input type="number" id="houseArea" name="houseArea" onkeyup="pricingCalc()">m2</br></br>
                   <div>Tick below if needed:</div>
                   <input type="checkbox" id="question1" name="question1" onclick="pricingCalc()">
                   <label for="question1"> Concept development </label></br>
                   <input type="checkbox" id="question2" name="question2" onclick="pricingCalc()">
                   <label for="question2"> Creating photorealistic 3d visualizations </label></br>
                   <input type="checkbox" id="question3" name="question3" onclick="pricingCalc()">
                   <label for="question3"> Preparing a brief architectural project </label></br>
                   <input type="checkbox" id="question4" name="question4" onclick="pricingCalc()">
                   <label for="question4"> Preparing a final architectural project with all necessary detailing </label></br>
                   <input type="checkbox" id="question5" name="question5" onclick="pricingCalc()">
                   <label for="question5"> Preparing all the necessary engineering projects </label></br>
                   <input type="checkbox" id="question6" name="question6" onclick="pricingCalc()">
                   <label for="question6"> Communicating with the building committee and all related institutions </label>
                </div>
                <div class="calcOutput"> 
                  <div> Total cost of your project: </div> 
                  <div id="outputNumber"></div>
                  <div> eur (without taxes) </div>
                </div>  
              </form> 

              <div class="noteText"> 
                *In case the client wants to apply non standard structural solutions in the project, the cost is calculated differently.
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
     <script src="PricingPageCalc.js"></script>
</body>
</html>