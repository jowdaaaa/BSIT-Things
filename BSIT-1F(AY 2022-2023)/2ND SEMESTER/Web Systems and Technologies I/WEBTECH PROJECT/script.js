var prevScrollpos=window.pageYOffset;
window.onscroll=function(){
    var currentScrollPos=window.pageYOffset;
    if (prevScrollpos > currentScrollPos){
        document.getElementById("navbar").style.top= "0";
    } else {
        document.getElementById("navbar").style.top= "-100px";
    }
    prevScrollpos = currentScrollPos;
}

const boxes = document.querySelectorAll('.box')
window.addEventListener('scroll', checkBoxes)
    checkboxes()

    function checkBoxes() {
        const triggerBottom = window.innerHeight / 5 * 4
        boxes.forEach(box =>{
            const boxTop = box.getBoundingClientRect().top
            if(boxTop < triggerBottom) {
                box.classList.add('show')
            } else {
                box.classList.remove('show')
            }
        })
    }
