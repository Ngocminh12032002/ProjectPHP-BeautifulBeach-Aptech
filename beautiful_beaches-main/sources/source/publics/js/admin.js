const restro = document.querySelector(".restro");
const night = document.querySelector(".night");
const light = document.querySelector(".light");
const sidebar = document.querySelector(".sidebar");
const activeListItem = document.querySelector(".sidebar__list.active"); 
const list = document.querySelector(".list");
restro.addEventListener("click", () => {
    sidebar.className = 'sidebar';
})

night.addEventListener("click", () => {
    sidebar.className = 'sidebar night';
})

light.addEventListener("click", () => {
    sidebar.className = 'sidebar light';
})

// Lang nghe click set active
list.onclick = function (e) {
    if (e.target.closest('.sidebar__list:not(.active)')) {
        setActive = e.target.closest('.sidebar__list:not(.active)') 
        remoview = document.querySelector('.sidebar__list.active').classList.remove('active')
        console.log([remoview])
        setActive.classList.add('active')
    }
    
}
console.log('123')
// User_profile
// const toggleUser = document.querySelector('.user__wrapper');
console.log(toggleUser);