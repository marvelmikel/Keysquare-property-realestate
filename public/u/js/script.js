

const survaypopup = document.querySelector(".survay_popup");
const close = document.querySelector(".close");

window.addEventListener("load", function(){
	showPopup();
})

setTimeout(function() {
	survaypopup.classList.add("show");
},2000)

close.addEventListener("click", function(){
	survaypopup.classList.remove("show");
});

if (max-width == 720) {
	document.querySelector("h2").innerHTML = "h4";
}