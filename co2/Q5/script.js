var par =document.querySelector("p");
function after(image) {
    image.src = "min2.jpg";
    par.innerHTML ="This Is An Image Hover Over The Image";
    document.body.style.background = "tomato";
}

function before(image) {
    image.src = "min1.jpg";
    par.innerHTML = "Now The Image Is Changed Along With The Text";
    document.body.style.background = "dodgerblue" 
}