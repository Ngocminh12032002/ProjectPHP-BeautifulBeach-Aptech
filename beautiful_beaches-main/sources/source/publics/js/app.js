const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
// active menu
let ulElement = document.querySelector('.navbar__list');
var liElement = document.querySelectorAll('.navbar__list--item');
liElement.forEach(e => {
    e.addEventListener('click', function(){
        ulElement.querySelector('.navbar__list__item-active').classList.remove('navbar__list__item-active');
        e.classList.add('navbar__list__item-active');
    });
});


//slide image
var counter = 1;
setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter >4){
        counter = 1;
    }
},5000);
// Display time now
setInterval(myTimer, 1000);
function myTimer() {
const d = new Date();
document.getElementById("displayDatetime").innerHTML = d.toLocaleTimeString();
}

//Search Bar
function toggleBar() {
            let form = document.getElementById('searchForm');
            form.classList.toggle('active');
        } 
// responsive button menu
var headerElement = $('.header__navbar');
console.log(headerElement);
var mobileMenu = $('.burger-menu');
console.log(mobileMenu);
var headerHeight = headerElement.clientHeight;
if ((mobileMenu != null)) {
  mobileMenu.onclick = function () {
    var isClose = headerElement.clientHeight === headerHeight;
    console.log(headerElement.clientHeight);
    if (isClose) {
      headerElement.style.height = 'auto';
    } else {
      headerElement.style.height = 'var(--headerResponsisve-height)';
    }
  }
  
}



// Beaches
var tabs = $$('.tab-item')
var panes = $$('.tab-pane') 
var tabActive = $('.tab-item.active');
var paneActive = $('.tab-pane.active');
var line = $('.tabs .line');
// Tạo dịch chuyển và thay đổi chiều dài cho line
requestIdleCallback(function () {
  line.style.left = tabActive.offsetLeft + 'px'
  line.style.width = tabActive.offsetWidth + 'px'
});
tabs.forEach((tab, index) => {
  const pane = panes[index];

  tab.onclick = function () {
    $(".tab-item.active").classList.remove("active");
    $(".tab-pane.active").classList.remove("active");

    line.style.left = this.offsetLeft + "px";
    line.style.width = this.offsetWidth + "px";

    this.classList.add("active");
    pane.classList.add("active");
  };
});

// Service
var tabs_service = $$('.services__tab-item')
var panes_service = $$('.services__tab-pane') 
var tabActive_service = $('.services__tab-item.active');
var paneActive_service = $('.services__tab-pane.active');
var line_service = $('.services__tabs .services__line');

// Tạo dịch chuyển và thay đổi chiều dài cho line
requestIdleCallback(function () {
  line_service.style.left = tabActive_service.offsetLeft + 'px'
  line_service.style.width = tabActive_service.offsetWidth + 'px'
});  
tabs_service.forEach((tab_service, index) => {
  const pane_service = panes_service[index]
  tab_service.onclick = function () {
    console.log($('.services__tab-item.active'))
    $('.services__tab-item.active').classList.remove('active');
    $('.services__tab-pane.active').classList.remove('active');
    this.classList.add('active')
    pane_service.classList.add('active')

    line_service.style.left = this.offsetLeft + 'px'
    line_service.style.width = this.offsetWidth + 'px'
  }
});

// Scroll to Top
const backToTopButton = document.querySelector("#back-to-top-btn");

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
  if (window.pageYOffset > 300) { // Show backToTopButton
    if(!backToTopButton.classList.contains("btnEntrance")) {
      backToTopButton.classList.remove("btnExit");
      backToTopButton.classList.add("btnEntrance");
      backToTopButton.style.display = "block";
    }
  }
  else { // Hide backToTopButton
    if(backToTopButton.classList.contains("btnEntrance")) {
      backToTopButton.classList.remove("btnEntrance");
      backToTopButton.classList.add("btnExit");
      setTimeout(function() {
        backToTopButton.style.display = "none";
      }, 250);
    }
  }
}

backToTopButton.addEventListener("click", smoothScrollBackToTop);


function smoothScrollBackToTop() {
  const targetPosition = 0;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  const duration = 750;
  let start = null;
  
  window.requestAnimationFrame(step);

  function step(timestamp) {
    if (!start) start = timestamp;
    const progress = timestamp - start;
    window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
    if (progress < duration) window.requestAnimationFrame(step);
  }
}

function easeInOutCubic(t, b, c, d) {
	t /= d/2;
	if (t < 1) return c/2*t*t*t + b;
	t -= 2;
	return c/2*(t*t*t + 2) + b;
};	


// count view to display dashboard 
var countView = $('#count_view');

// GeoLocation
let coords = {};
navigator.geolocation.getCurrentPosition(function (position) {
  coords = position.coords;
  console.log(coords);
},
  function (err) {
  
  })
function openMap() {
  location.href = "http.google.com/maps/@" + coords.latitude + "," + coords.longitude;
}
