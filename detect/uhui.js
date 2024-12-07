<script>
const ShowHide = () => {
	let button = document.getElementById("sh_toggle_button");
	let content = document.getElementById("show_hide_content");
	if(button.innerText == "show"){
		button.innerText = "hide";
		content.style.display = "block";
	}else{
		button.innerText = "show";
		content.style.display = "none";
	}
}
</script>