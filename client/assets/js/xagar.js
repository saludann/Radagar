


		function getImg(){
		var url=document.getElementById('skinimg').value;
		sknimg.src=url;
		return false;
		}
		setInterval( getImg, 0.0001*60*1000 );
		
		function DoAllThese() {
		getImg();
		}
		

		//Just A comma ,!~ All coded done by xAgar.io Dev, Discord: @M.#0001
		

		
		
		function openMenu(evt, menu) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(menu).style.display = "block";

		evt.currentTarget.className += " active";
	}
	
	

		//Just A comma ,!~ All coded done by xAgar.io Dev, Discord: @M.#0001
		
		function hideCHAT() {
			var checkBox = document.getElementById("cb6");
			var chat = document.getElementById("chat_textbox");
			if (checkBox.checked == true){
        chat.style.display = "none";
		} else {
		chat.style.display = "block";
			}
		}
	
	
		function cbgc() {
			var bgc = document.getElementById('bgcolor').value;
			document.getElementById('canvas').style.background = bgc;
		}
		
		function tco() {
			var tco = document.getElementById('themecolor').value;
			document.getElementById('helloDialog').style.background = tco;
		}
		
		setInterval( cbgc, 0.001*60*1000 );
		setInterval( tco, 0.001*60*1000 );
	
	
		//Just A comma ,!~ All coded done by xAgar.io Dev, Discord: @M.#0001
		
		
		
		var loadFile = function(event) {
		var sknimgu = document.getElementById('sknimgu');
		sknimgu.src = URL.createObjectURL(event.target.files[0]);
		};

		
		
		
		
		//Just A comma ,!~ All coded done by xAgar.io Dev, Discord: @M.#0001
		
		
		
		

		
		
		
		
		