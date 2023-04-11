<?php require "Partials/connection.php"?>
<?php
    session_start();
    if($_SESSION['loggedin'] != true || !isset($_SESSION['loggedin'])){
        header("location: login.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stack overflow</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="welcome.css">
    </head>
    <body>
        <?php require "Partials/navbar.php"?>
        <div class="containerd rounded-4 d-flex flex-wrap justify-content-evenly align-items-center border-bottom border-4 border-warning">
            <div class="box col-4 m-5 d-flex flex-column rounded-3 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-search mt-4 w-100 text-warning" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                <p class = "m-4 text-center">Find the best answer to your technical question, help others answer theirs.</p>
                <button type="button" class="btn btn-primary join col-5 mx-auto mb-4">Join Community</button>
            </div>
            <div class="status col-7"><strong>Every <span class = "field">developer</span> has a<br>tab open to Stack Overflow</strong></div>
        </div>
        <div class="achieve my-4 d-flex flex-column">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class = "font-monospace head text-center fw-bold mb-0">Achievements</h1>
                <hr class="line mt-0 mb-2 col-3">
                <hr class="line2 mt-0 col-4">
            </div>
            <div class="stats my-2 d-flex flex-row flex-wrap justify-content-evenly">
                <div class="intro col-2 d-flex flex-column align-items-center">
                    <h3 class="text-center mt-3">100+ million</h3>
                    <hr class="line mt-0 mb-2 col-6 ">
                    <hr class="line2 mt-0 col-8">
                    <p class="text-center mx-2 mt-2">monthly visitors to Stack Overflow & Stack Exchange</p>
                </div>
                <div class="intro col-2 d-flex flex-column align-items-center">
                    <h3 class="text-center mt-3">45.1+ billion</h3>
                    <hr class="line mt-0 mb-2 col-6">
                    <hr class="line2 mt-0 col-8">
                    <p class="text-center mx-2 mt-2">Times a developer got help since 2008</p>
                </div>
                <div class="intro col-2 d-flex flex-column align-items-center">
                    <h3 class="text-center mt-3">191% ROI</h3>
                    <hr class="line mt-0 mb-2 col-6">
                    <hr class="line2 mt-0 col-8">
                    <p class="text-center mx-2 mt-2">from companies using Stack Overflow for Teams</p>
                </div>
                <div class="intro col-2 d-flex flex-column align-items-center">
                    <h3 class="text-center mt-3">5,000+</h3>
                    <hr class="line mt-0 mb-2 col-6">
                    <hr class="line2 mt-0 col-8">
                    <p class="text-center mx-2 mt-2">Stack Overflow for Teams instances active every day</p>
                </div>
            </div>
        </div>
        <div class="rounded-4 teamsInfo my-4">
            <img class="mt-4" src="/webbit/Partials/logo-removebg-preview.png" alt="">
            <p class="teamInfop">Capture your company’s knowledge and context in a discoverable format to <span class="field"><b>unblock your team.</b></span></p>
            <button type="button" class="btn btn-primary col-2 mx-auto mb-4">Join Community</button>
            <hr class="col-9 line3">
            <div class="container attr my-5 d-flex flex-row flex-wrap text-white justify-content-evenly">
                <div class="inAttr zoom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mb-4" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                    <h4>Increase productivity</h4>
                    <p>If somebody somewhere has the right answer, suddenly you have it too. Collaborate better in a remote-first world.</p>
                </div>
                <div class="inAttr zoom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mb-4" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                    <h4>Accelerate time to market</h4>
                    <p>Shorten the time between initial idea and complete product. Take delays and misinformation out of the equation.</p>
                </div>
                <div class="inAttr zoom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success mb-4" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                    <h4>Protect institutional knowledge</h4>
                    <p>People come and people go, but if you capture their contributions in one central place, that expertise sticks around.</p>
                </div>
            </div>
        </div>
        <div class="company text-center my-5">
            <p class="fs-5">Thousands of organizations around the globe use Stack Overflow for Teams</p>
            <div class="container dad">
                <div class="scroller d-flex flex-row">
                    <!-- <img class="logo" src="https://www.logodesign.net/logo-new/building-on-crescent-4303ld.png" alt=""> -->
                    <img class="logo" src="https://www.strichards.org.uk/wp-content/uploads/2021/03/Morgan-Motors-Logo-965x635-1.jpg" alt="">
                    <img class="logo" src="https://ausgraphics.net/wp-content/uploads/2020/02/logo-finance.jpg" width="300px" alt="">
                    <img class="logo" src="https://www.logo-design-india.com/wp-content/uploads/2022/02/sterling-logo.jpg" alt="">
                    <img class="logo" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/company-logo-design-template-e4ab4c68b80a762c8cb43f222748c3c4_screen.jpg?ts=1561508783" alt="">
                    <img class="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEvfz5kpO-Sfpo5A5JU3C54Qot6h2fIX_cgw&usqp=CAU" alt="">
                    <img class="logo" src="https://dypdvfcjkqkg2.cloudfront.net/large/3679095-7845.png" alt="">
                    <img class="logo" src="https://s.tmimgcdn.com/scr/800x500/319500/best-logo-design-of-nature-3_319598-original.jpg" alt="">
                    <img class="logo" src="https://images-platform.99static.com/W3smp0sYFMPtAXnMdsMpkAqb19g=/500x500/top/smart/99designs-contests-attachments/41/41483/attachment_41483630" alt="">
                    <img class="logo" src="https://img.freepik.com/free-vector/letter-s-logo-negative-space-style-corporate-business-emblem-logotype_126523-2780.jpg" alt="">
                    <img class="logo" src="https://www.logodesign.net/images/home-industry/industry-all-07.png" alt="">
                    <!-- <img class="logo" src="https://www.logodesign.net/logo-new/building-on-crescent-4303ld.png" alt=""> -->
                    <img class="logo" src="https://www.strichards.org.uk/wp-content/uploads/2021/03/Morgan-Motors-Logo-965x635-1.jpg" alt="">
                    <img class="logo" src="https://ausgraphics.net/wp-content/uploads/2020/02/logo-finance.jpg" width="300px" alt="">
                </div>
            </div>
        </div>
        <div class="footer d-flex flex-row flex-wrap bg-dark text-white justify-content-evenly text-center">
            <div class="container list my-3">
                <h4>Stackoverflow</h4>


            </div>
            <div class="container list my-3">
                <h4>Products</h4>

            </div>
            <div class="container list my-3">
                <h4>Company</h4>

            </div>
            <div class="container list my-3">
                <h4>Stack exchange network</h4>

            </div>
        </div>
    </body>
    <script>
        let slide = () => {
            let windowHeight = window.innerHeight
            let intro = document.getElementsByClassName("intro")
            let attr = document.getElementsByClassName("inAttr")
            for (let i = 0; i < intro.length; i++) {
                let elementTop = intro[i].getBoundingClientRect().top
                if(windowHeight - 25 > elementTop){
                    intro[i].classList.add("activate")
                }
                else{
                    intro[i].classList.remove("activate");
                }
            }
            for (let i = 0; i < attr.length; i++) {
                let elementTop = attr[i].getBoundingClientRect().top
                if(windowHeight - 25 > elementTop){
                    attr[i].classList.add("activate2")
                }
                else{
                    attr[i].classList.remove("activate2");
                }
            }
        }
        window.addEventListener("scroll", slide)

        let curr = 0
        let count = 3
        let scrolled = () => {
            let scroller = document.getElementsByClassName("logo")
            for (let i = 0; i < scroller.length; i++) {
                if (i>=curr && i<=curr+3) {
                    scroller[i].classList.add("scrolled")
                }
                else{
                    scroller[i].classList.remove("scrolled")
                }
            }
            curr++
        }
        // setInterval(scrolled, 5000);
        // let askPage = () => {
        //     console.log("session_register('variable_name');")
        // }
    </script>
</html>