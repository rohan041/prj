function openmenu(){
  document.querySelector(".nav-links").style.display = "block";
}
function closemenu(){
  document.querySelector(".nav-links").style.display = "none";
}
window.onresize = function(){
    if(window.innerWidth > 600){
      document.querySelector(".nav-links").style.display = "block";
    }else{
      document.querySelector(".nav-links").style.display = "none";
    }
}
