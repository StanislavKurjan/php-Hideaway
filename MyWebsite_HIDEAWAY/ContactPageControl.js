


function formReaction(event){

    
    if (document.querySelector("#yourName").value === "" ){
        event.preventDefault();
        document.querySelector("#yourName").placeholder = "Please enter your name first";
       
    }

    else if (document.querySelector("#yEmail").value === "" ){
        event.preventDefault();
        document.querySelector("#yEmail").placeholder = "Please enter your email first";
        
    }

    else if (document.querySelector("#yNumber").value === "" ){
        event.preventDefault();
        document.querySelector("#yNumber").placeholder = "Please enter your number first";
        
    }

    else if (document.querySelector("#yMessage").value === "" ){
        event.preventDefault();
        document.querySelector("#yMessage").placeholder = "Please enter your question first";
        
    }

    else {
        alert ("We have received your message and will contact you as soon as possible")
    }


}