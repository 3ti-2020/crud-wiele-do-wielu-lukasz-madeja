document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.background-modal').style.display = "flex";
});

document.getElementById('close').addEventListener("click", function() {
	document.querySelector('.background-modal').style.display = "none";
});