var images = [  
  "http://localhost/WebSite-Turismo/php/aboutSlider/img_1.jpg", 
  "http://localhost/WebSite-Turismo/php/aboutSlider/img_2.jpg",
  "http://localhost/WebSite-Turismo/php/aboutSlider/img_3.jpg",
  "http://localhost/WebSite-Turismo/php/aboutSlider/img_4.jpg",
]; 
document.Image.src = images[0]; 
 
var counter = 0; 
 
function MoveRight() 
{ 
  counter++; 
  if(counter > images.length - 1) 
  { 
    counter = 0;
  } 
  document.Image.src = images[counter];
}  
setInterval(MoveRight, 2000);
 
function MoveLeft() 
{ 
  counter--;  
  if(counter < 0) 
  { 
    counter = images.length -1;
  }
  document.Image.src = images[counter];
}

