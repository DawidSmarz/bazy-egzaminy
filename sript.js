const suwak = document.getElementById("rangeImg");
const img = document.getElementById("image");

suwak.addEventListener("change", function(){
    console.log(suwak.value)
    img.style.opacity = suwak.value + "%";
})


document.getElementById("kolorowy").addEventListener("click",function(){
    img.style.filter = "grayscale(0%)"
})

document.getElementById("czarno_bialy").addEventListener("click",function(){
    img.style.filter = "grayscale(100%)"
})


const btn = document.getElementById("sepia"); 
const img2= document.getElementById("lukas");
btn.addEventListener("click", function(){ 
    if (btn.textContent === "Sepia") {
        btn.textContent = "Noramlny"; 
        img2.style.filter = "sepia (100%)";
    } else {
    btn.textContent = "Sepia";
    img2.style.filter = "sepia (0%)";
    }
})