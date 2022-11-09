alert("Selamat datang website InfoWisata.Id");

const section1 = document.querySelector("#c");
section1.addEventListener("click", function() {
    const detail = document.querySelector("#detail");
    detail.style.display = "block";
});

const section2 = document.querySelector("#c1");
section2.addEventListener("click", function() {
    const detail1 = document.querySelector("#detail1");
    detail1.style.display = "block";
});

const section3 = document.querySelector("#c2");
section3.addEventListener("click", function() {
    const detail2 = document.querySelector("#detail2");
    detail2.style.display = "block";
});

const section4 = document.querySelector("#c3");
section4.addEventListener("click", function() {
    const detail3 = document.querySelector("#detail3");
    detail3.style.display = "block";
});

function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
    document.getElementById("image").src = "gambar/logo1.png"
    innerWidth = "100px";
}

// function myFunction() {
//     var element = document.body;
//     element.classList.toggle("dark-mode");
//     document.getElementById("image").src = "gambar/logo.png"
//     innerWidth = "100px";
// }