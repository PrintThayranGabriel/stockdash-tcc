const open_modal = document.getElementById("open_modal");
const close_modal = document.getElementById("close_modal");
const modal = document.getElementById("modal")


window.addEventListener('click', function(e) {
    
    if(open_modal.contains(e.target)) {
        modal.style.display = "flex";

    } else if(close_modal.contains(e.target)){
        modal.style.display = "none";
   
    } 

})
