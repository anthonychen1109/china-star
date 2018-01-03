		
		var modal = document.getElementById('modalWindow'); // Get the modal

		var modalImg = document.getElementById("modalImage"); // Get the image and insert it inside the modal
		
		var displayImg = document.getElementsByClassName('galleryImages'); //Get all Images
		
		var imgExtention = ".jpg";
		var fullLocation = "images/gallery/";
		
		function display(n){
			modal.style.display = "block";
			modalImg.src = n;
		}

		document.onkeydown = function(e) {
			if(modal.style.display != "none"){
				switch (e.keyCode) {
					case 37:
						refreshDisplay(-1)
						break;
					case 39:
						refreshDisplay(1)
						break;
				}
			}
		};
		function refreshDisplay(n){
			var o1 = modalImg.src.indexOf(fullLocation);
			var o2 = modalImg.src.indexOf(imgExtention);
			o1 += fullLocation.length;
			var a = modalImg.src.slice(o1, o2);
			a++;
			a--;
			a = (a+n)%displayImg.length;
			if(a <= 0){
				a=displayImg.length;
			}
			modalImg.src = fullLocation+a+imgExtention;
		}

