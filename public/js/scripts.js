/*!
* Patriots Blog Theme Styling
* Copyright 2024
* Licensed under MIT
*/
// My Scripts

//preloader
 document.onreadystatechange = function () {
            if (document.readyState !== "complete") {
                document.querySelector(
                    "body").style.visibility = "hidden";
                document.querySelector(
                    "#preloader").style.display = "visible";
            } else {
                document.querySelector(
                    "#preloader").style.display = "none";
                document.querySelector(
                    "body").style.visibility = "visible";
            }
        };