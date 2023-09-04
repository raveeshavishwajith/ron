const prev=document.querySelector('.prev')
const next=document.querySelector('.next')
const slider=document.querySelector('.slider')

// prev.addEventListener('click',() => {

//     slider.scrollLeft-=300
// })

// prev.addEventListener('click',() => {
//     slider.scrollRight+=300
// })

// next.addEventListener('click',() => {
//     slider.scrollRight-=300
// })

// next.addEventListener('click',() => {
//     slider.scrollLeft+=300
// })

const itemWidth = 300; // Adjust this to your item width in pixels

prev.addEventListener('click', () => {
    slider.scrollLeft -= itemWidth;
    if (slider.scrollLeft < 0) {
        slider.scrollLeft = slider.scrollWidth - slider.clientWidth;
    }
})

next.addEventListener('click', () => {
    slider.scrollLeft += itemWidth;
    if (slider.scrollLeft >= slider.scrollWidth - slider.clientWidth) {
        slider.scrollLeft = 0;
    }
})