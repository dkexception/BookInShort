var hasShownAlert = false;
function displayAlert(){
	if(!hasShownAlert){
		alert("This is gonna add specified text areas there. Please input neatly.");
		hasShownAlert = true;
	}
}

function addTabs(){
	var count = document.getElementById("tc").value;
	var container = document.getElementById("mp");
	while (container.hasChildNodes()) {
	    container.removeChild(container.lastChild);
	}
	for(i=0;i<count;i++){
		container.appendChild(document.createTextNode("tab "+(i+1)));
		var input = document.createElement("textarea");
		input.name = "tab"+(i+1);
		input.className = "tA";
		container.appendChild(input);
	}
	if(!count == 0){
		var input = document.createElement("input");
		input.type = "button";
		input.onclick = function(){
				var lang = ((document.getElementById("lang")||{}).value)||"";
				var genre = ((document.getElementById("genre")||{}).value)||"";
				var name = ((document.getElementById("bookName")||{}).value)||"";
				var author = ((document.getElementById("authorName")||{}).value)||"";
				var describ = (( document.getElementById("decription")||{}).value)||"";
				var tabArray = document.getElementsByClassName("tA");

				if(lang == "" || genre == "" || name == "" || author == "" || describ == ""){
					alert("Please enter proper values!");
					return;
				}

				var Content = "{";
				Array.prototype.forEach.call(tabArray,function(t){
					Content += "\"" + t.name + "\":\"" + t.value + "\",";
				});
				Content = Content.substring(0, (Content.length - 1));
				Content += "}";
				Content = Content.replace(/\\'/g, "\\'")
		               .replace(/\\"/g, '\\"')
		               .replace(/\\&/g, "\\&")
		               .replace(/\\r/g, "\\r")
		               .replace(/\\t/g, "\\t")
		               .replace(/\\b/g, "\\b")
		               .replace(/\\f/g, "\\f")
		               .replace(/[\u0000-\u0019]+/g,""); 
				Content = JSON.parse(Content);
				Content = JSON.stringify(Content);

				while (container.hasChildNodes()) {
		    		container.removeChild(container.lastChild);
				}
				container.appendChild(document.createTextNode("final"));
				var inpu = document.createElement("textarea");
				inpu.name = "inpu";
				inpu.value = Content;
				inpu.className = "tA";
				container.appendChild(inpu);

				modal = document.getElementById("pm");
				modal.style.display = "block";
				document.getElementById("morf").submit();
			};
		input.name = "submitData";
		input.value = "Submit";
		input.className = "button";
		container.appendChild(input);
	}
}

function fetch(){
	if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	var newElement = document.createElement('div');
			newElement.innerHTML = this.responseText;
			document.getElementById("mi").appendChild(newElement);
        }
    };
    xmlhttp.open("GET","getBooks.php",true);
    xmlhttp.send();
}

function retForm(){
	document.getElementById("morf").reset();
	while (document.getElementById("mp").hasChildNodes()) {
		document.getElementById("mp").removeChild(document.getElementById("mp").lastChild);
	}
	fun();
}

function fun() {
    var x = document.getElementById("mnav");
    if (x.className === "topnav") x.className += " responsive";
    else x.className = "topnav";
}

function miniValid() {
				var val = document.getElementsByTagName('input');
				var show = true;
				for (var i = 0; i < val.length-1; i++) {
					if (i!=2 && val[i].value === "") {
					val[i].style.borderColor="red";
					val[i].placeholder="Please fill these fields";
					show=false;
				}	
				else if(i===2){ 
					var pass = val[i].value;
					if (!(pass.indexOf('@') && pass.indexOf('.') && pass.indexOf('.')<pass.length-1 
											&& pass.indexOf('@')<pass.indexOf('.')-1)) {
						val[i].style.borderColor="red";
						show=false;
					}
					else{
						show=true;
						val[i].style.borderColor="#ccc";
					}}
					else {val[i].style.borderColor="#ccc";}
				}
				if (show) {
					val[4].style.display="inline-block";
					document.getElementById('form').action="reginsert.php"
				}
				else {
						val[4].style.display="none";
				}
			}