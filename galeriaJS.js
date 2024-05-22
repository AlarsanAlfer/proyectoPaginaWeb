
const b1 = document.querySelector("#gatos img.b1")
const b2 = document.querySelector("#gatos img.b2")
const b3 = document.querySelector("#gatos img.b3")

const slide1 = document.querySelector("#gatos .slide1")
const slide2 = document.querySelector("#gatos .slide2")
const slide3 = document.querySelector("#gatos .slide3")

function clickb1(){
  slide1.classList.add("active")  
  slide2.classList.remove("active")  
  slide3.classList.remove("active")  
  b1.classList.add("active")
  b2.classList.remove("active")
  b3.classList.remove("active")  
}

function clickb2(){
  slide2.classList.add("active")  
  slide1.classList.remove("active")  
  slide3.classList.remove("active")  
  b2.classList.add("active")
  b1.classList.remove("active")
  b3.classList.remove("active")  
}

function clickb3(){
  slide3.classList.add("active")  
  slide1.classList.remove("active")  
  slide2.classList.remove("active")  
  b3.classList.add("active")
  b1.classList.remove("active")
  b2.classList.remove("active")  
}

b1.addEventListener("click",clickb1);
b2.addEventListener("click",clickb2);
b3.addEventListener("click",clickb3);



const p1 = document.querySelector("#perros img.b1")
const p2 = document.querySelector("#perros img.b2")
const p3 = document.querySelector("#perros img.b3")
const p4 = document.querySelector("#perros img.b4")
const p5 = document.querySelector("#perros img.b5")

const slidep1 = document.querySelector("#perros .slide1")
const slidep2 = document.querySelector("#perros .slide2")
const slidep3 = document.querySelector("#perros .slide3")
const slidep4 = document.querySelector("#perros .slide4")
const slidep5 = document.querySelector("#perros .slide5")


function clickp1(){
  slidep1.classList.add("active")  
  slidep2.classList.remove("active")  
  slidep3.classList.remove("active") 
  slidep4.classList.remove("active")  
  slidep5.classList.remove("active") 
  p1.classList.add("active")
  p2.classList.remove("active")
  p3.classList.remove("active")
  p4.classList.remove("active")
  p5.classList.remove("active")
  
}

function clickp2(){
  slidep2.classList.add("active")  
  slidep1.classList.remove("active")  
  slidep3.classList.remove("active") 
  slidep4.classList.remove("active")  
  slidep5.classList.remove("active") 
  p2.classList.add("active")
  p1.classList.remove("active")
  p3.classList.remove("active")
  p4.classList.remove("active")
  p5.classList.remove("active")
}

function clickp3(){
  slidep3.classList.add("active")  
  slidep1.classList.remove("active")  
  slidep2.classList.remove("active")
  slidep4.classList.remove("active")  
  slidep5.classList.remove("active") 
  p3.classList.add("active")
  p2.classList.remove("active")
  p1.classList.remove("active")
  p4.classList.remove("active")
  p5.classList.remove("active")
}
function clickp4(){
    slidep4.classList.add("active")  
    slidep1.classList.remove("active")  
    slidep2.classList.remove("active")
    slidep3.classList.remove("active")  
    slidep5.classList.remove("active")
    p4.classList.add("active")
    p2.classList.remove("active")
    p3.classList.remove("active")
    p1.classList.remove("active")
    p5.classList.remove("active") 
}
function clickp5(){
    slidep5.classList.add("active")  
    slidep1.classList.remove("active")  
    slidep2.classList.remove("active")
    slidep4.classList.remove("active")  
    slidep3.classList.remove("active") 
    p5.classList.add("active")
    p2.classList.remove("active")
    p3.classList.remove("active")
    p4.classList.remove("active")
    p1.classList.remove("active")
  }


p1.addEventListener("click",clickp1);
p2.addEventListener("click",clickp2);
p3.addEventListener("click",clickp3);
p4.addEventListener("click",clickp4);
p5.addEventListener("click",clickp5);