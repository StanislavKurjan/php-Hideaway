
function projectsMoreOne(){

   var changingButton = document.querySelector(".BerMore");

   if (changingButton.textContent.includes("MORE INFO")) {

    document.querySelector(".Ber").classList.add("berFull");
    document.querySelector(".HouseBerPic").classList.add("berDescription");
    document.querySelector(".HouseBerPic").innerHTML = "<img src=\"/MyWebsite_HIDEAWAY/House in Bergi/Ezerparka_8_Viz_FINAL__3_cor.jpg\" width=\"570px\" height=\"350px\" style=\"margin-right: 17px;\">" + "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum lectus. Morbi posuere maximus rhoncus. Aenean at nunc nunc. Fusce viverra laoreet nisi. Nam vitae dolor tristique, viverra ligula a, vestibulum ipsum. Morbi feugiat eleifend pulvinar. Vivamus ultrices mollis turpis ac porta. Suspendisse quis dictum tellus. Maecenas eget fermentum tellus. Aliquam tortor ex, rutrum commodo ex a, vulputate semper elit. Nulla facilisis ante sapien, et dictum purus commodo at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum lectus. Morbi posuere maximus rhoncus. Aenean at nunc nunc. Fusce viverra laoreet nisi. Nam vitae dolor tristique, viverra ligula a, vestibulum ipsum. Morbi feugiat eleifend pulvinar. Vivamus ultrices mollis turpis ac porta. Suspendisse quis dictum tellus. Maecenas eget fermentum tellus.";
    changingButton.textContent = "BACK";

    changingButton.addEventListener("click", function handleClickOne() {

      if (changingButton.textContent.includes("BACK")) {
        document.querySelector(".Ber").classList.remove("berFull");
        document.querySelector(".HouseBerPic").classList.remove("berDescription");
        document.querySelector(".HouseBerPic").innerHTML = "";
        document.querySelector(".BerMore").textContent = "MORE INFO";
        changingButton.removeEventListener("click", handleClickOne);
      } } )

    }

  }


  function projectsMoreTwo(){

    var changingButton = document.querySelector(".CarMore");
 
    if (changingButton.textContent.includes("MORE INFO")) {
 
     document.querySelector(".Car").classList.add("carFull");
     document.querySelector(".HouseCarPic").classList.add("carDescription");
     document.querySelector(".HouseCarPic").innerHTML = "<img src=\"/MyWebsite_HIDEAWAY/House in Carnikava/1_View_Makonu_7_cor3.jpg\" width=\"570px\" height=\"350px\" style=\"margin-right: 17px;\">" + "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum lectus. Morbi posuere maximus rhoncus. Aenean at nunc nunc. Fusce viverra laoreet nisi. Nam vitae dolor tristique, viverra ligula a, vestibulum ipsum. Morbi feugiat eleifend pulvinar. Vivamus ultrices mollis turpis ac porta. Suspendisse quis dictum tellus. Maecenas eget fermentum tellus. Aliquam tortor ex, rutrum commodo ex a, vulputate semper elit. Nulla facilisis ante sapien, et dictum purus commodo at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum lectus. Morbi posuere maximus rhoncus. Aenean at nunc nunc. Fusce viverra laoreet nisi. Nam vitae dolor tristique, viverra ligula a, vestibulum ipsum. Morbi feugiat eleifend pulvinar. Vivamus ultrices mollis turpis ac porta. Suspendisse quis dictum tellus. Maecenas eget fermentum tellus.";
     changingButton.textContent = "BACK";
 
     changingButton.addEventListener("click", function handleClickTwo() {
 
       if (changingButton.textContent.includes("BACK")) {
         document.querySelector(".Car").classList.remove("carFull");
         document.querySelector(".HouseCarPic").classList.remove("carDescription");
         document.querySelector(".HouseCarPic").innerHTML = "";
         document.querySelector(".CarMore").textContent = "MORE INFO";
         changingButton.removeEventListener("click", handleClickTwo);
       } } )
 
     }
 
   }


   function projectsMoreThree(){

    var changingButton = document.querySelector(".RamMore");
 
    if (changingButton.textContent.includes("MORE INFO")) {
 
     document.querySelector(".Ram").classList.add("ramFull");
     document.querySelector(".HouseRamPic").classList.add("ramDescription");
     document.querySelector(".HouseRamPic").innerHTML = "<img src=\"/MyWebsite_HIDEAWAY/House in Ramava/Klinshu2__FINviz__2_FINAL_.jpg\" width=\"570px\" height=\"350px\" style=\"margin-right: 17px;\">" + "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum lectus. Morbi posuere maximus rhoncus. Aenean at nunc nunc. Fusce viverra laoreet nisi. Nam vitae dolor tristique, viverra ligula a, vestibulum ipsum. Morbi feugiat eleifend pulvinar. Vivamus ultrices mollis turpis ac porta. Suspendisse quis dictum tellus. Maecenas eget fermentum tellus. Aliquam tortor ex, rutrum commodo ex a, vulputate semper elit. Nulla facilisis ante sapien, et dictum purus commodo at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum lectus. Morbi posuere maximus rhoncus. Aenean at nunc nunc. Fusce viverra laoreet nisi. Nam vitae dolor tristique, viverra ligula a, vestibulum ipsum. Morbi feugiat eleifend pulvinar. Vivamus ultrices mollis turpis ac porta. Suspendisse quis dictum tellus. Maecenas eget fermentum tellus.";
     changingButton.textContent = "BACK";
 
     changingButton.addEventListener("click", function handleClickThree() {
 
       if (changingButton.textContent.includes("BACK")) {
         document.querySelector(".Ram").classList.remove("ramFull");
         document.querySelector(".HouseRamPic").classList.remove("ramDescription");
         document.querySelector(".HouseRamPic").innerHTML = "";
         document.querySelector(".RamMore").textContent = "MORE INFO";
         changingButton.removeEventListener("click", handleClickThree);
       } } )
 
     }
 
   }


   function projectsMoreFour(){

    var changingButton = document.querySelector(".GarMore");
 
    if (changingButton.textContent.includes("MORE INFO")) {
 
     document.querySelector(".Gar").classList.add("garFull");
     document.querySelector(".HouseGarPic").classList.add("garDescription");
     document.querySelector(".HouseGarPic").innerHTML = "<img src=\"/MyWebsite_HIDEAWAY/House in Garkalne/Viz__Sofijas22__FIN__1_f.jpg\" width=\"570px\" height=\"350px\" style=\"margin-right: 17px;\">" + "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum lectus. Morbi posuere maximus rhoncus. Aenean at nunc nunc. Fusce viverra laoreet nisi. Nam vitae dolor tristique, viverra ligula a, vestibulum ipsum. Morbi feugiat eleifend pulvinar. Vivamus ultrices mollis turpis ac porta. Suspendisse quis dictum tellus. Maecenas eget fermentum tellus. Aliquam tortor ex, rutrum commodo ex a, vulputate semper elit. Nulla facilisis ante sapien, et dictum purus commodo at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum lectus. Morbi posuere maximus rhoncus. Aenean at nunc nunc. Fusce viverra laoreet nisi. Nam vitae dolor tristique, viverra ligula a, vestibulum ipsum. Morbi feugiat eleifend pulvinar. Vivamus ultrices mollis turpis ac porta. Suspendisse quis dictum tellus. Maecenas eget fermentum tellus.";
     changingButton.textContent = "BACK";
 
     changingButton.addEventListener("click", function handleClickFour() {
 
       if (changingButton.textContent.includes("BACK")) {
         document.querySelector(".Gar").classList.remove("garFull");
         document.querySelector(".HouseGarPic").classList.remove("garDescription");
         document.querySelector(".HouseGarPic").innerHTML = "";
         document.querySelector(".GarMore").textContent = "MORE INFO";
         changingButton.removeEventListener("click", handleClickFour);
       } } )
 
     }
 
   }
 
 
   function projectsMoreFive(){
 
     var changingButton = document.querySelector(".AldMore");
  
     if (changingButton.textContent.includes("MORE INFO")) {
  
      document.querySelector(".Ald").classList.add("aldFull");
      document.querySelector(".HouseAldPic").classList.add("aldDescription");
      document.querySelector(".HouseAldPic").innerHTML = "<img src=\"/MyWebsite_HIDEAWAY/House in Alderi/VIZ__Kanala_5__FIN__1.jpg\" width=\"570px\" height=\"350px\" style=\"margin-right: 17px;\">" + "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum lectus. Morbi posuere maximus rhoncus. Aenean at nunc nunc. Fusce viverra laoreet nisi. Nam vitae dolor tristique, viverra ligula a, vestibulum ipsum. Morbi feugiat eleifend pulvinar. Vivamus ultrices mollis turpis ac porta. Suspendisse quis dictum tellus. Maecenas eget fermentum tellus. Aliquam tortor ex, rutrum commodo ex a, vulputate semper elit. Nulla facilisis ante sapien, et dictum purus commodo at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum lectus. Morbi posuere maximus rhoncus. Aenean at nunc nunc. Fusce viverra laoreet nisi. Nam vitae dolor tristique, viverra ligula a, vestibulum ipsum. Morbi feugiat eleifend pulvinar. Vivamus ultrices mollis turpis ac porta. Suspendisse quis dictum tellus. Maecenas eget fermentum tellus.";
      changingButton.textContent = "BACK";
  
      changingButton.addEventListener("click", function handleClickFive() {
  
        if (changingButton.textContent.includes("BACK")) {
          document.querySelector(".Ald").classList.remove("aldFull");
          document.querySelector(".HouseAldPic").classList.remove("aldDescription");
          document.querySelector(".HouseAldPic").innerHTML = "";
          document.querySelector(".AldMore").textContent = "MORE INFO";
          changingButton.removeEventListener("click", handleClickFive);
        } } )
  
      }
  
    }
 
 
    function projectsMoreSix(){
 
     var changingButton = document.querySelector(".AdaMore");
  
     if (changingButton.textContent.includes("MORE INFO")) {
  
      document.querySelector(".Ada").classList.add("adaFull");
      document.querySelector(".HouseAdaPic").classList.add("adaDescription");
      document.querySelector(".HouseAdaPic").innerHTML = "<img src=\"/MyWebsite_HIDEAWAY/House in Adazi/1_View_Adazi_cor.jpg\" width=\"570px\" height=\"350px\" style=\"margin-right: 17px;\">" + "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum lectus. Morbi posuere maximus rhoncus. Aenean at nunc nunc. Fusce viverra laoreet nisi. Nam vitae dolor tristique, viverra ligula a, vestibulum ipsum. Morbi feugiat eleifend pulvinar. Vivamus ultrices mollis turpis ac porta. Suspendisse quis dictum tellus. Maecenas eget fermentum tellus. Aliquam tortor ex, rutrum commodo ex a, vulputate semper elit. Nulla facilisis ante sapien, et dictum purus commodo at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elementum lectus. Morbi posuere maximus rhoncus. Aenean at nunc nunc. Fusce viverra laoreet nisi. Nam vitae dolor tristique, viverra ligula a, vestibulum ipsum. Morbi feugiat eleifend pulvinar. Vivamus ultrices mollis turpis ac porta. Suspendisse quis dictum tellus. Maecenas eget fermentum tellus.";
      changingButton.textContent = "BACK";
  
      changingButton.addEventListener("click", function handleClickSix() {
  
        if (changingButton.textContent.includes("BACK")) {
          document.querySelector(".Ada").classList.remove("adaFull");
          document.querySelector(".HouseAdaPic").classList.remove("adaDescription");
          document.querySelector(".HouseAdaPic").innerHTML = "";
          document.querySelector(".AdaMore").textContent = "MORE INFO";
          changingButton.removeEventListener("click", handleClickSix);
        } } )
  
      }
  
    }
   




