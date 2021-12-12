var provider = new firebase.auth.GoogleAuthProvider();
var file;
var modal;
var config = {
	apiKey: "<key>",
	authDomain: "bookinshort.firebaseapp.com",
	databaseURL: "https://bookinshort.firebaseio.com",
	projectId: "bookinshort",
	storageBucket: "bookinshort.appspot.com",
};
firebase.initializeApp(config);

function signIn(){
	firebase.auth().setPersistence(firebase.auth.Auth.Persistence.SESSION).then(function(){

		firebase.auth().signInWithPopup(provider).then(function(result) {

			firebase.auth().onAuthStateChanged(function(user){
				if(user){
					console.log("Success!");
					var user = firebase.auth().currentUser;
					if(user) location.href = "user.html";
				}
				else{
					console.log("log out");
					location.href = "/";
				}
			});
		}).catch(function(error) {
			console.log(error);
			//error.code error.message error.email error.credential
		});

		}).catch(function(error){
			console.log(error);
	});
}

function viewLoad(){
	var user = firebase.auth().onAuthStateChanged(function(user){
		if(user){
			document.title =  "Welcome "+ user.displayName;
		}
		else{
			console.log("Logged out!");
			location.href = "/";
		}
	});
}

function userLoad(){
	var user = firebase.auth().onAuthStateChanged(function(user){
		if(user){
			document.title =  "Welcome "+ user.displayName;
		}
		else{
			console.log("Logged out!");
			location.href = "/";
		}
	});
}

function addBookLoad(){
	var user = firebase.auth().onAuthStateChanged(function(user){
		if(user){
			document.title =  "Welcome "+ user.displayName;
			var fil = document.getElementById("bookImage");
			fil.addEventListener('change',function(e){
				file = e.target.files[0];
			});
		}
		else{
			console.log("Logged out!");
			location.href = "/";
		}
	});
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

			if(document.getElementById("bookImage").files.length == 0){
				alert("Select proper image a book cover.");
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

			modal = document.getElementById("pm");
			modal.style.display = "block";

			var storageRef = firebase.storage().ref("/Books").child(lang).child(genre).child(name + ".jpg");
			storageRef.put(file).then(function(snapshot){
				modal.style.display = "none";
				window.alert('Data Successfully Added');
				document.getElementById("morf").reset();
			});

			var fdb = firebase.database().ref('Books');
			fdb.child(lang).child(genre).child(name).set({
				'Author':author,
				'Describ':describ,
				'rating':"0.0",
				Content
			});
		};
		input.name = "submitData";
		input.value = "Submit";
		input.className = "button";
		container.appendChild(input);
	}
}

function retForm(){
	document.getElementById("morf").reset();
}

var hasShownAlert = false;
function displayAlert(){
	if(!hasShownAlert){
		alert("This is gonna add specified text areas there. Please input neatly.");
		hasShownAlert = true;
	}
}

function signOut(){
	if(firebase.auth().currentUser){
		firebase.auth().signOut().then(function(){
			location.href = "/";
			alert("Logged out successfully!");
		}).catch(function(error){
			console.log(error.message);
		});
	}
}

function fun() {
    var x = document.getElementById("mnav");
    if (x.className === "topnav") x.className += " responsive";
    else x.className = "topnav";
}
// var provider = new firebase.auth.GoogleAuthProvider();
// var file;
// var modal;
// var config = {
// 	apiKey: "AIzaSyDuo3-oBvvMdA2mwC59bb1xMTtz-0zcReE",
// 	authDomain: "bookinshort.firebaseapp.com",
// 	databaseURL: "https://bookinshort.firebaseio.com",
// 	projectId: "bookinshort",
// 	storageBucket: "bookinshort.appspot.com",
// };
// firebase.initializeApp(config);
//
// function signIn(){
// 	firebase.auth().setPersistence(firebase.auth.Auth.Persistence.SESSION).then(function(){
//
// 		firebase.auth().signInWithPopup(provider).then(function(result) {
//
// 			firebase.auth().onAuthStateChanged(function(user){
// 				if(user){
// 					console.log("Success!");
// 					var user = firebase.auth().currentUser;
// 					if(user) location.href = "user.html";
// 				}
// 				else{
// 					console.log("log out");
// 					location.href = "/";
// 				}
// 			});
// 		}).catch(function(error) {
// 			console.log(error);
// 			//error.code error.message error.email error.credential
// 		});
//
// 		}).catch(function(error){
// 			console.log(error);
// 	});
// }
//
// function viewLoad(){
// 	var user = firebase.auth().onAuthStateChanged(function(user){
// 		if(user){
// 			document.title =  "Welcome "+ user.displayName;
// 		}
// 		else{
// 			console.log("Logged out!");
// 			location.href = "/";
// 		}
// 	});
// }
//
// function acl(){
// 	var user = firebase.auth().onAuthStateChanged(function(user){
// 		if(user){
// 			document.title =  "Welcome "+ user.displayName;
// 			new nicEditor({iconsPath : './nicEditorIcons.gif',fullPanel : true}).panelInstance('ta1');
// 		}
// 		else{
// 			console.log("Logged out!");
// 			location.href = "/";
// 		}
// 	});
// }
//
// function userLoad(){
// 	var user = firebase.auth().onAuthStateChanged(function(user){
// 		if(user){
// 			document.title =  "Welcome "+ user.displayName;
// 		}
// 		else{
// 			console.log("Logged out!");
// 			location.href = "/";
// 		}
// 	});
// }
//
//  function hotLoad(){
//  	var res = nicEditors.findEditor('ta1').getContent();
//  	document.getElementById('result').innerHTML = res;
//  }
//
// function loadContentPage(){
// 	if(document.getElementById("bookName").value==null ||
// 		document.getElementById("authorName").value==null ||
// 		document.getElementById("decription").value==null){
// 		alert("Please enter proper values!");
// 	}
// 	else{
// 		localStorage.setItem("l",document.getElementById("lang").value);
// 		localStorage.setItem("g",document.getElementById("genre").value);
// 		localStorage.setItem("n",document.getElementById("bookName").value);
// 		localStorage.setItem("an",document.getElementById("authorName").value);
// 		localStorage.setItem("desc",document.getElementById("decription").value);
// 		location.href = "addContent.html";
// 	}
// }
//
// function addBookLoad(){
// 	var user = firebase.auth().onAuthStateChanged(function(user){
// 		if(user){
// 			document.title =  "Welcome "+ user.displayName;
// 			document.getElementById("lang").value = (localStorage.getItem("l") == null)?"English":localStorage.getItem("l");
// 			document.getElementById("genre").value = (localStorage.getItem("g") == null)?"Sci-fi":localStorage.getItem("g");
// 			document.getElementById("bookName").value = (localStorage.getItem("n") == null)?null:localStorage.getItem("n");
// 			document.getElementById("authorName").value = (localStorage.getItem("an") == null)?null:localStorage.getItem("an");
// 			document.getElementById("decription").value = (localStorage.getItem("desc") == null)?null:localStorage.getItem("desc");
// 		}
// 		else{
// 			console.log("Logged out!");
// 			location.href = "/";
// 		}
// 	});
// }
//
// function addTabs(){
// 	var count = document.getElementById("tc").value;
// 	var container = document.getElementById("mp");
// 	while (container.hasChildNodes()) {
// 	    container.removeChild(container.lastChild);
// 	}
// 	for(i=0;i<count;i++){
// 		container.appendChild(document.createTextNode("tab "+(i+1)));
// 		var input = document.createElement("textarea");
// 		input.name = "tab"+(i+1);
// 		input.className = "tA";
// 		container.appendChild(input);
// 	}
// 	if(!count == 0){
// 		var input = document.createElement("input");
// 		input.type = "button";
// 		input.onclick = function(){
// 			var lang = ((document.getElementById("lang")||{}).value)||"";
// 			var genre = ((document.getElementById("genre")||{}).value)||"";
// 			var name = ((document.getElementById("bookName")||{}).value)||"";
// 			var author = ((document.getElementById("authorName")||{}).value)||"";
// 			var describ = (( document.getElementById("decription")||{}).value)||"";
// 			var tabArray = document.getElementsByClassName("tA");
//
// 			if(lang == "" || genre == "" || name == "" || author == "" || describ == ""){
// 				alert("Please enter proper values!");
// 				return;
// 			}
//
// 			if(document.getElementById("bookImage").files.length == 0){
// 				alert("Select proper image a book cover.");
// 				return;
// 			}
//
// 			var Content = "{";
// 			Array.prototype.forEach.call(tabArray,function(t){
// 				Content += "\"" + t.name + "\":\"" + t.value + "\",";
// 			});
// 			Content = Content.substring(0, (Content.length - 1));
// 			Content += "}";
// 			Content = Content.replace(/\\'/g, "\\'")
// 	               .replace(/\\"/g, '\\"')
// 	               .replace(/\\&/g, "\\&")
// 	               .replace(/\\r/g, "\\r")
// 	               .replace(/\\t/g, "\\t")
// 	               .replace(/\\b/g, "\\b")
// 	               .replace(/\\f/g, "\\f")
// 	               .replace(/[\u0000-\u0019]+/g,"");
// 			Content = JSON.parse(Content);
//
// 			modal = document.getElementById("pm");
// 			modal.style.display = "block";
//
// 			var storageRef = firebase.storage().ref("/Books").child(lang).child(genre).child(name + ".jpg");
// 			storageRef.put(file).then(function(snapshot){
// 				modal.style.display = "none";
// 				window.alert('Data Successfully Added');
// 				document.getElementById("morf").reset();
// 			});
//
// 			var fdb = firebase.database().ref('Books');
// 			fdb.child(lang).child(genre).child(name).set({
// 				'Author':author,
// 				'Describ':describ,
// 				'rating':'3',
// 				Content
// 			});
// 		};
// 		input.name = "submitData";
// 		input.value = "Submit";
// 		input.className = "button";
// 		container.appendChild(input);
// 	}
// }
//
// function retForm(){
// 	document.getElementById("morf").reset();
// 	localStorage.clear();
// }
//
// var hasShownAlert = false;
// function displayAlert(){
// 	if(!hasShownAlert){
// 		alert("This is gonna add specified text areas there. Please input neatly.");
// 		hasShownAlert = true;
// 	}
// }
//
// function signOut(){
// 	if(firebase.auth().currentUser){
// 		localStorage.clear();
// 		firebase.auth().signOut().then(function(){
// 			location.href = "/";
// 			alert("Logged out successfully!");
// 		}).catch(function(error){
// 			console.log(error.message);
// 		});
// 	}
// }
//
// function fun() {
//     var x = document.getElementById("mnav");
//     if (x.className === "topnav") x.className += " responsive";
//     else x.className = "topnav";
// }
