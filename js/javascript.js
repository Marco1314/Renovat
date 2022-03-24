"use strict";

document.addEventListener("DOMContentLoaded", function () {
    // Delete all Classes on li Elements and add Bootstrap Classes.
    let li_of_nav = document.querySelectorAll("#menu-hautpnavigation li");
    let a_of_nav = document.querySelectorAll("#menu-hautpnavigation li a");
    for (let li of li_of_nav) {
        li.className = "";
        li.classList.add("nav-item");
    }

    for (let link of a_of_nav) {
        link.className = "";
        link.classList.add("nav-link");
    }


    let carousel_item = document.getElementsByClassName("carousel-item");
    let arrow_right = document.getElementsByClassName("carousel-control-next-icon");
    let arrow_left = document.getElementsByClassName("carousel-control-prev-icon");

    for (let item of carousel_item) {
        item.classList.remove("active");
        carousel_item[0].classList.add("active");

        let index = 0;
        for (let arrow of arrow_right) {
            arrow.addEventListener("click", function () {

                index++;
            })
        }
        for (let arrow of arrow_left) {
            arrow.addEventListener("click", function () {
                index--;
            })
        }
    }

    let textimages = document.getElementsByClassName("textimage");
    let slider = document.getElementsByClassName("slide")[0].clientHeight;
    document.addEventListener("scroll", function () {
        for (let textimage of textimages) {
            if (window.pageYOffset >= textimage.offsetTop - 500) {
                textimage.classList.add("MyfadeIn");
            }
        }
    })
});

