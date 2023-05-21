let under_nav = document.getElementsByClassName("under_nav")[0]
let nav = document.getElementById('nav')
let menu = document.getElementById("menu")
let closse = document.getElementById('close')
let menu_mobile = document.getElementsByClassName("click_nav")[0]
window.addEventListener('scroll', function() {
if (window.pageYOffset === 0)
    nav.style.backgroundColor = "transparent"
    else
    nav.style.backgroundColor = "#060002a2"
});

menu.onclick = function() {
  menu_mobile.style.right = "0px"
};
closse.onclick = function() {
    menu_mobile.style.right = "-300px"
  };
function returnNav()
{
  menu_mobile.style.right = "-300px"
}
// slide
let comnt1 = "I appreciate the high streaming quality provided by this IPTV website. The crystal-clear visuals and smooth playback enhance my viewing experience and bring the content to life. "
let comnt2 = "Overall, this IPTV website has exceeded my expectations. It offers an unmatched combination of variety, convenience, and quality, making it my go-to platform for all my entertainment needs."
let comnt3 = "The user-friendly interface of this IPTV website makes it a breeze to navigate through the extensive content library. Finding my favorite shows and movies is quick and effortless."
function fadeOut() {
  const circle = document.querySelector('.circle');
  circle.style.opacity = 0; // set opacity to 0 to start the fade out animation
  setTimeout(() => {
    circle.style.display = 'none'; // hide the element after the animation completes
  }, 1000); // wait 1 second (1000 milliseconds) for the animation to complete
}
let coment = document.getElementsByClassName("coment")[0]
let nameComntes = document.getElementsByClassName("nameComntes")[0]
let img = document.getElementById('img')
const array = [comnt1, comnt2, comnt3]
const array2 = ["Cassie Carleton", "Coby Sue", "Stefanie Rashfod"]
const array3 = ["imgs/cassie.webp","imgs/stefani.webp","imgs/coby.webp"]
let i = 0;
let j = 0
function change(par) {
  if (par == "left")
  {
    if (i >= 2)
      i = 2
    else
      i++;
    coment.innerHTML = array[i]
    nameComntes.innerHTML  = array2[i]
    img.src = array3[i]
  }
  if (par == "right")
  {
    if (i <= 0)
    {
      i = 0
    }
    else
      i--
    coment.innerHTML = array[i]
    nameComntes.innerHTML  = array2[i]
    img.src = array3[i]
  }
  // j++
  // if (j < 3)
  //   setTimeout(change("left"), 1000)
  // else
  //   setTimeout(change("right"), 1000)
}
// setTimeout(change("left"), 1000)

// finish slide 
var scrollLinks = document.querySelectorAll('.scroll-link');
scrollLinks.forEach(function(link) {
  link.addEventListener('click', function(event) {
    event.preventDefault();
    var targetDiv = document.querySelector(this.getAttribute('href'));
    targetDiv.style.opacity = '1';
    targetDiv.scrollIntoView({ behavior: 'smooth' });
  });
});
// Add this code to your JavaScript file or script tag

// Listen for the DOMContentLoaded event
document.addEventListener('DOMContentLoaded', function() {
  // Scroll to the top of the page with smooth scrolling
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

const backgrounds = document.getElementById("backgrounds");
const images = ["imgs/feature-item.webp", "imgs/headerOp.webp"];
 i = 0;

function sayHello() {
  backgrounds.style.animationName = "fadeAnimation"; // Trigger the fade animation

  setTimeout(() => {
    backgrounds.style.backgroundImage = `url('${images[i]}')`; // Set the new image
    i = (i + 1) % images.length;
  }, 700); // Wait for the fade out transition to complete (0.5 seconds)
}

setInterval(sayHello, 3000);
let loding = document.getElementById("loading");
let body = document.getElementsByTagName("body")[0];
function greet() {
  loding.style.display = "none";
  body.style.overflow = "visible";
}

// Call the greet() function after a delay of 2000 milliseconds (2 seconds)
setTimeout(greet, 2000);