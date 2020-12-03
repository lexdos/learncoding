var linkContainer = document.getElementById("nav_links");

var links = linkContainer.getElementsByClassName("link");

for(var i = 0; i < links.length; i++){
    links[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        
        if(current.length >= 0){
            current[0].className = current[0].className.replace(" active", "");
        }

        this.className += " active"; 
    });
}