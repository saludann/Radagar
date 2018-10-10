<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Eat cells smaller than you and don't get eaten by the bigger ones, as an MMO">
    <meta name="keywords" content="agario, agar, io, اكس اقار, اقاريو, virus, اقار, مصعب, game, games, web Radagar, Radagario, agarx, اقاريو العربية">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>Radagar.io |  إكس اقاريو</title>

    <link id="favicon" rel="icon" type="image/png" href="assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/out.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="assets/js/main_out.js"></script>
	<script src="assets/js/vert.js"></script>
	<script src="assets/js/xagar.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="assets/js/jscolor.js"></script>
	
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-5062643110300598",
          enable_page_level_ads: true
     });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126614085-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126614085-1');
</script>
</head>
    <div class="modal fade" id="inPageModal" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 id="inPageModalTitle" class="modal-title">Failed to Load</h4>
    </div>
	
	
                <div id="inPageModalBody" class="modal-body">
                    <p>Failed to load. Please check your connection!</p>
                    <div class="center">
                        <div class="loader"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="overlays" style="display: block;">
	
	
	
        <div id="helloDialog" >
                <div class="form-group">
					<center><h2 id="title">Radagar.ga | إكس اقاريو</h2></center>

                </div>

		
		
		<div class="tab">
			<button class="tablinks active" onclick="openMenu(event, 'home')">الرئيسة</button>
			<button class="tablinks" onclick="openMenu(event, 'setting')">الإعدادات</button>
			<button class="tablinks" onclick="openMenu(event, 'theme')">الشكل</button>
			<button class="tablinks" onclick="openMenu(event, 'other')">التحكم</button>
		</div>

		<div id="home" class="tabcontent" style="display: block; height: 175px;">
                <div  class="form-group des" onmouseleave="getImg();">
                    <input style="margin-top: 7px;" id="nick" class="form-control save" autocomplete="on" data-box-id="0" placeholder="Name" maxlength="20">
				    <input id="skin" autocomplete="on" type="text" style="display: none;" value=""  maxlength="9">
                    <select id="gamemode" class="form-control" onchange="setserver($(this).val());" required="">
                        <option selected="selected" disabled="disabled">FFA Servers:</option>
                        <option value="rad-saludannyou179265.codeanyapp.com:1111">FFA (1)</option>
						<option value="rad-saludannyou179265.codeanyapp.com:2222">FFA (2)</option>
						<option value="rad-saludannyou179265.codeanyapp.com:3333">FFA (3) </option>
						<option value="rad-saludannyou179265.codeanyapp.com:4444">FFA (4) </option>
                        <option disabled="disabled">MegaSplit Servers:</option>
						<option value="rad-saludannyou179265.codeanyapp.com:5555">MegaSplit</option>
                    </select>
					<select id="clgamemode" class="form-control" onchange="setserver($(this).val());" required="">
                        <option selected="selected">Clan Servers:</option>
                          <option disabled="disabled">Welcome</option>
                    </select>
						<button type="button" id="play-btn" onclick="play(document.getElementById('nick').value + document.getElementById('skin').value); return false;" class="btn btn-play btn-primary btn-needs-server">الـعـب</button>   
						<input id="skinimg" type="text" value="http://Radagar.io/assets/img/no-skin.png" style="color: black; display: none;" placeholder="skinurl">
						<img id="sknimg"  src="assets/img/no-skin.png" height="37" width="37" onclick="openSkinsList();" title="قائمة السكنات" alt="skins" data-toggle="modal" data-target="#inPageModal" >
						<button id="spectate-btn" onclick="spectate(); return false;" class="btn btn-warning btn-spectate btn-needs-server">مشاهدة</button>			
						<a data-toggle="modal" id="sking" data-target="#inPageModal" onclick="openSkinsList();" class="btn-primary btn btn-info" role="button">السكنات</a>
						
						</div>
        </div>
		
		
		
		
		
		
			
        
		<div id="setting" class="tabcontent" style="display: none; height: 175px;">
<div class="hiddenCB">

  <div>
	<br></br>
    <input type="checkbox" name="choice" id="cb1" class="save" data-box-id="2" onchange="setNames(!$(this).is(':checked'));" /><label for="cb1"><center>إخفاء الأسماء</center></label>
    <input type="checkbox" name="choice" id="cb3" class="save" data-box-id="8" onchange="setMinimap($(this).is(':checked'));" /><label for="cb3"><center>إخفاء الخريطة</center></label>
    <input type="checkbox" name="choice" id="cb4" class="save" data-box-id="1" onchange="setSkins(!$(this).is(':checked'));" /><label for="cb4"><center>إخفاء السكنات</center></label>
	</br></br>
    <input type="checkbox" name="choice" id="cb2" class="save" data-box-id="4" onchange="setColors($(this).is(':checked'));" /><label for="cb2"><center>بدون ألوان</center></label>
    <input type="checkbox" name="choice" id="cb5" class="save" data-box-id="5" onchange="setShowMass($(this).is(':checked'));" /><label for="cb5"><center>إظهار النقاط</center></label>
    <input type="checkbox" name="choice" id="cb6" class="save" data-box-id="7" onchange="setChatHide($(this).is(':checked')); hideCHAT($(this).is(':checked'));" /><label for="cb6"><center>إخفاء الشات</center></label>

	
	
  </div>
</div>
		
		
		
		</div>

		<div id="theme" class="tabcontent" style="display: none; height: 175px;">
		


		<form method="post">
		
		
						<center><label style="float: right; width: 160px; height: 31px; " for="themecolor">
				<input style="margin-right: 7px; width: 70; height: 20px; border-radius: 11px; border: 1px solid #fff; "
				name="themecolor" type="text" size="20"
				class="jscolor {hash:true, width:101, shadow:false, borderWidth:0, backgroundColor:'transparent', insetColor:'#000'}"
				id="themecolor" onchange="tco()" value="#000">:لون الواجهة</label></center>
		
		</br>

				<center><label style="float: right; width: 160px; height: 31px; " for="bgcolor">
				<input style=" margin-right: 7px; width: 70; height: 20px; border-radius: 11px; border: 1px solid #fff; "
				name="bgcolor" type="text" size="20"
				class="jscolor {hash:true, width:101, shadow:false, borderWidth:0, backgroundColor:'transparent', insetColor:'#000'}"
				id="bgcolor" onchange="cbgc()">:لون الخلفية</label></center>
				
		</br>
	
					<center><label style="float: right; width: 160px; height: 31px; " for="boco">
				<input style="margin-right: 7px; width: 70; height: 20px; border-radius: 11px; border: 1px solid #fff; "
				name="boco" type="text" size="20" value="#4ad3c1"
				class="jscolor {hash:true, width:101, shadow:false, borderWidth:0, backgroundColor:'transparent', insetColor:'#000'}"
				id="boco">:لون الحدود</label></center>
				

		</br>
				
				<center><label style=" float: right; width: 160px; height: 31px; " for="chatcolor">
				<input style="margin-right: 7px; width: 70; height: 20px; border-radius: 11px; border: 1px solid #fff;"
				name="chatcolor" type="text" size="20" value="#4ad3c1"
				class="jscolor {hash:true, width:101, shadow:false, borderWidth:0, backgroundColor:'transparent', insetColor:'#000'}"
				id="chatcolor">:لون الشات</label></center>
				
		</br>
	
				<center><label style=" float: right; width: 160px; height: 31px; " for="othercolor">
				<input style="margin-right: 7px; width: 70; height: 20px; border-radius: 11px; border: 1px solid #fff;"
				name="othercolor" type="text" size="20" value="#4ad3c1"
				class="jscolor {hash:true, width:101, shadow:false, borderWidth:0, backgroundColor:'transparent', insetColor:'#000'}"
				id="othercolor">:الألوان الأخرى</label></center>
				
				
		</br>
	
				<center><label style=" float: right; width: 160px; height: 31px; " for="mapcolor">
				<input style="margin-right: 7px; width: 70; height: 20px; border-radius: 11px; border: 1px solid #fff;"
				name="mapcolor" type="text" size="20" value="#4ad3c1"
				class="jscolor {hash:true, width:101, shadow:false, borderWidth:0, backgroundColor:'transparent', insetColor:'#000'}"
				id="mapcolor">:لون الماب</label></center>
				

</form>
		
		
		<script type="text/javascript">
				var formData = {
			set : function (){
				var myForm = [];
				localStorage.removeItem('myForm');
				$('form input[type=text]').each(function(){
					myForm.push({ name: this.name, value: this.value});
				});
				localStorage.myForm = JSON.stringify(myForm);
			},
			get : function (){
				if(localStorage.myForm != undefined){
					myForm = JSON.parse(localStorage.myForm);
					for (var i = 0; i < myForm.length; i++) {
						$('[name='+myForm[i].name+']').val(myForm[i].value);
					}
				}
			}
		}
		formData.get();
		$("input").change( function() {
			formData.set();
		});
</script>


    </div>
	
		<script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
          <script type="text/javascript">
  ( function() {
    if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
    var unit = {"calltype":"async[2]","publisher":"mohamedsabbagh","width":320,"height":50,"sid":"Chitika Default"};
    var placement_id = window.CHITIKA.units.length;
    window.CHITIKA.units.push(unit);
    document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
}());
</script>
<script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
	</center>
        </div>

    </footer>
           </div>
      
        </div>
					<div id="footer"> <a href="http://xagar.io/discord/" style="color: white;">لدخول الدسكورد الخاص باللعبة اضغط هنا</a></div>
	 </div>			
			

	</div>	
	


		
					
			 
            
		
		
		
   

    <div id="connecting" style="display: none;">
        <div style="width: 350px; background-color: #000066; margin: 100px auto; border-radius: 15px; padding: 5px 15px 5px 15px;">
            <font color="#f2f2f2"><h2>Connecting</h2>
            <p> If you cannot connect to the servers, check if you have some anti virus or firewall blocking the connection.</p>
			</font>
		</div>
    </div>
	

    <canvas id="canvas"  width="821" height="786"></canvas>


	
	
	
    <input type="text" id="chat_textbox" style="border-radius: 15px;" placeholder="Press enter to chat" maxlength="200">
    <div style="font-family:'Ubuntu'">&nbsp;</div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


	

				</body></html>