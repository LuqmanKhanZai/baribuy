
$(document).ready(function () {
  $('[data-bs-toggle="tooltip"]').tooltip();
});

//

// const listing = [
//   {
//     id: 1,
//     title: "Fox Hill",
//     img: "assets/img/houses/10.jpg",
//     imgAlt: "House image",
//     price: "1,528,000",
//     shares: "20% shares available",
//     info: "This is info",
//     description:
//       "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis tempus vulputate. Sed mauris augue,",
//     tag: "trending",
//     active: true,
//   },
//   {
//     id: 2,
//     title: "Wyndham",
//     img: "assets/img/houses/9.jpg",
//     imgAlt: "280,000",
//     price: "1,528,000",
//     shares: "12% shares available",
//     info: "This is info",
//     description:
//       "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sagittis tempus vulputate. Sed mauris augue,",
//     tag: "trending",
//     active: true,
//   },
// ];

// let listItem = "";
// for (let i = 0; i < listing.length; i++) {
//   // listItem += listing[i].title + "<br>";
//   listItem += `<div class="item--list">
//     <div class="thumbnail--box">
//         <img src="${listing[i].img}" alt="${listing[i].imgAlt}">
//         <span class="trending--tag">
//            ${listing[i].tag}
//         </span>
//     </div>
//     <div class="text--box">
//         <span class="heading">
//             ${listing[i].title}
//         </span>
//         <span class="subheading">
//             $${listing[i].price} . ${listing[i].shares}
//             <i class="bi bi-info-circle" type="button" data-bs-toggle="tooltip"
//                 data-bs-html="true" title="${listing[i].info}"></i>

//         </span>
//         <p class="description--text">
//         ${listing[i].description}
//         </p>
//     </div>
// </div>`;
// }

// document.getElementById("items--list--panel").innerHTML = listItem;


const myCarousel = document.getElementById('carouselExampleControls')

myCarousel.addEventListener('slide.bs.carousel', event => {
  var  currentIndex = 1;
  var currentIndex = $('.carousel-item.active').index() + 1;
  var totalItems = $('.carousel-item').length;
 $('.num').html('' + currentIndex + '/' + totalItems + '');
})




// console.log(currentIndex)
// $('.num').html('' + currentIndex + '/' + totalItems + '');

// $('#myCarousel').carousel({
//   interval: 2000
// });

// $('#myCarousel').bind('slid', function() {
//   currentIndex = $('div.active').index() + 1;
//   $('.num').html('' + currentIndex + '/' + totalItems + '');
// });


// I've added annotations to make this easier to follow along at home. Good luck learning and check out my other pens if you found this useful


// First let's set the colors of our sliders
const settings={
  fill: '#0C4DA1',
  background: '#d7dcdf'
}

// First find all our sliders
const sliders = document.querySelectorAll('.range-slider');

// Iterate through that list of sliders
// ... this call goes through our array of sliders [slider1,slider2,slider3] and inserts them one-by-one into the code block below with the variable name (slider). We can then access each of wthem by calling slider
Array.prototype.forEach.call(sliders,(slider)=>{
  // Look inside our slider for our input add an event listener
//   ... the input inside addEventListener() is looking for the input action, we could change it to something like change
  slider.querySelector('input').addEventListener('input', (event)=>{
    // 1. apply our value to the span
    slider.querySelector('span').innerHTML = event.target.value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    // 2. apply our fill to the input
    applyFill(event.target);
  });
  // Don't wait for the listener, apply it now!
  applyFill(slider.querySelector('input'));
});

// This function applies the fill to our sliders by using a linear gradient background
function applyFill(slider) {
  // Let's turn our value into a percentage to figure out how far it is in between the min and max of our input
  const percentage = 100*(slider.value-slider.min)/(slider.max-slider.min);
  // now we'll create a linear gradient that separates at the above point
  // Our background color will change here
  const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage+0.1}%)`;
  slider.style.background = bg;
}

document.getElementById("year").innerHTML = new Date().getFullYear();


// Carousel
