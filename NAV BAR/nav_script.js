/* 

$(".dropdown a").click(function(){
  
   
    $(".cont_drop").css({display: 'block'});
    }
    
    )
    
        document.addEventListener("click", (evt) => {
            const flyoutElement = $(".dropdown li");
            let targetElement = evt.target; // clicked element
        
            do {
                if (targetElement == flyoutElement) {
                    // This is a click inside. Do nothing, just return.
                    
                    return;
                }
                // Go up the DOM
                targetElement = targetElement.parentNode;
            } while (targetElement);
        
            // This is a click outside.
          
        });
 */

