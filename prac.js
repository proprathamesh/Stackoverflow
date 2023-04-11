let slide = () => {
    let window = window.innerHeight
    let intro = document.getElementsByClassName("intro")
    for (let i = 0; i < intro.length; i++) {
        let elementTop = intro[i].getBoundingClientRect().top
        if(window - 100 > elementTop){
            intro[i].classList.add("active")
        }
        else{
            intro[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", slide)