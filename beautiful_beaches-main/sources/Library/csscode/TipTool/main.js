function change() {
    let random = parseInt(Math.random()*100+1);
    let number = document.getElementById('num');
    num.innerHTML = random;
}


// Tạo slug từ chuỗi bất kỳ
//B1: npm install slugify
// import slugify from "slugify"
// var slugify = require('slugify')
// var slug = require('slug')
// const title = "    #Tiêu đề bài viết! ^-^ "
// const slug = slugify(title, {
//     replacement: "-", //gach ngang
//     remove: undefined, //Xoa những ký tự ko xác định
//     lower: true, //chuyển chữ thường or ko
//     strict: true, //Xoá những ký tự đặc biệt
//     local: 'vi', //ngôn ngữ vi,en,fr,uk.it,...
//     trim: true, //Xóa khoảng trống
// })

// console.log(slug)



/* progress loading */
// let i = 0;
// const interval = setInterval(() => {
//     i++;
//     console.log('heelo')
//     if( i == 5) clearInterval(interval)
// }, 1000)

const progress = document.querySelector(".progress");
const loading = document.querySelector(".loading");
let i = 0;
const fakeUploadPerc = [0, 10, 25, 42, 60, 70, 75, 90, 100];

const interval = setInterval(() => {
    progress.style.width = fakeUploadPerc[i]+'%';
    loading.innerHTML = fakeUploadPerc[i] + '%';
    i++;
    if (i == fakeUploadPerc.length) {
        clearInterval(interval);
        loading.innerHTML = "completed"
    }
},1000)


// circle bar loading
const circle = document.querySelector(".progress-circle")
const circumference =  circle.getTotalLength();

const loading_circle = document.querySelector(".loading-circle");
let j = 0;
const fakeUploadCir = [0, 10, 25, 42, 60, 70, 75, 90, 100];
const interval_circle = setInterval(() => {
    circle.style.strokeDashoffset = circumference - (fakeUploadCir[j] / 100) * circumference;
    loading_circle.innerHTML = fakeUploadCir[j] + '%';
    j++;
    if (j == fakeUploadCir.length) {
        clearInterval(interval_circle);
        loading.innerHTML = "done";
    }

}, 1000);