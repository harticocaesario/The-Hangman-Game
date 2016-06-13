/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  function loadXMLDoc() {
		var xmlhttp;
		if (window.XMLHttpRequest) xmlhttp = new XMLHttpRequest();
		else xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				sessionStorage.listKata = xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","http://mahasiswa.cs.ui.ac.id/~hartico.caesario/assignment2/listkata.txt",true);
		xmlhttp.send();
	}
   
   $(document).ready(function(){
		loadXMLDoc();
		var daftarKata;	
		var arrayKata;
		var skorMain = 0;
		var isBenar = 0;
		var isSalah  = 0;
		var isPlay = false;
		var telahTebak;
		var arrHangman;
		var logScore;

		function startHangman(){

			daftarKata = sessionStorage.listKata;
			arrayKata = daftarKata.split('\n');

			skorMain = 0;
			isBenar = 0;
			isSalah = 0;
			telahTebak = [''];
			isPlay = true;

			$("#tebakKata").html("");
			$("#hangman").attr("src", "0.jpg");


			arrHangman = arrayKata[Math.floor(Math.random()*(arrayKata.length - 1))];
			for(var i = 0; i < arrHangman.length - 1; i++){
				$("#tebakKata").append('<div class="set" id="set' +i+ '">' +'_'+ '</div> ');
			}
			
			$(".myButton").css({
				"background-color":"#fff",
				"color":"black",
				"font-weight": "normal"
			});
			
		

			$("#skor").html(skorMain);
			$("#kekalahan").html(localStorage.gameLose);
			$("#kemenangan").html(localStorage.gameWin);
			$("#skor").css({"color":"white","text-decoration":"none"});



		}
		function guess(huruf){

			if(jQuery.inArray( huruf, telahTebak )==-1){
				benar = false;
				telahTebak.push(huruf);

				$("#"+huruf).css({
					"background-color": "black",
					"font-weight": "bold",
					"color":"#fff"

					
				});

				for(var i = 0; i < arrHangman.length; i++){
					if(arrHangman.charAt(i) == huruf){
						$("#set"+i).html(huruf);					
						benar = true;
						isBenar++;
					}
				}
				
				if(benar){
					skorMain += 20;
					$("#skor").html(skorMain);
					if(isBenar == arrHangman.length - 1) winFunction();
				} else {
					isSalah++;
					$("#hangman").attr("src", isSalah+".jpg");
					skorMain -= 10;
					$("#skor").html(skorMain);
					if(isSalah >= 7) loseFunction();
					
				}
			}
		}

		function winFunction(){
			alert("Congratulations ! You win THE HANGMAN GAME");
			isPlay=false;
			localStorage.gameWin? localStorage.gameWin= Number(localStorage.gameWin)+1 : localStorage.gameWin= 1;
			$("#kemenangan").html(localStorage.gameWin);
			$("#skor").css({"color":"blue","text-decoration":"underline"});
			addRow(skorMain, arrHangman);

			slideStatusOn();
		}

		function loseFunction(){
			isPlay=false;
			localStorage.gameLose ? localStorage.gameLose= Number(localStorage.gameLose)+1 : localStorage.gameLose= 1;
			$("#kekalahan").html(localStorage.gameLose);
			alert("Sorry ! You Lose");
			$("#skor").css({"color":"red","text-decoration":"underline"});
			addRow(skorMain, arrHangman);
			
			slideStatusOn();
                       
        }
		
		function addRow(skorKe, kataKe){
			if(localStorage.gameKe) 
			{
				localStorage.gameKe= Number(localStorage.gameKe)+1;
				if($(".log-permainan tr").length-2<2)
				{
					$(".log-permainan #gameKe_1").html("1");
					$(".log-permainan #scoreKe_1").html(localStorage.getItem("logSkor_1"));
					appendNext(localStorage.gameKe);
				}
				else
				{
					appendBiasa(localStorage.gameKe);
				}
				postLog(localStorage.gameKe, skorKe, kataKe);
			
				} else { 
				changeFirst(skorKe, kataKe);
			}
			
		}
		
		function changeFirst(skorKe, kataKe){
			localStorage.gameKe = 1;
			postLog(localStorage.gameKe, skorKe, kataKe);
		}
		
		function appendNext(banyakBaris){
			for(var i = 2; i<=banyakBaris; i++){
				var newRow = '<tr>' + 
				'<td id="gameKe_' + i + '">'+i+'</td>' +
				'<td id="scoreKe_' + i + '">'+localStorage.getItem("logSkor_"+i)+'</td>' +
         			'</tr>';
				$(".log-permainan").append(newRow);
			}
		}

		function appendBiasa(gameKe){
			var newRow = '<tr>' + 
			'<td id="gameKe_' + gameKe + '">'+gameKe+'</td>' +
			'<td id="scoreKe_' + gameKe + '">'+localStorage.getItem("logSkor_"+gameKe)+'</td>' +
         		'</tr>';
			$(".log-permainan").append(newRow);
		}

		function postLog(gameKe, skorKe, kataKe){
			localStorage.setItem("logSkor_"+gameKe+"x", kataKe);
			localStorage.setItem("logSkor_"+gameKe, skorKe);

			$(".log-permainan #gameKe_"+gameKe).html(gameKe);
			$(".log-permainan #scoreKe_"+gameKe).html(skorKe);
		}
		
		function slideStatusOn(){
			$("#status").animate({
				'left':'215px'
			});
			$("#info .log-permainan").delay(500).fadeIn(500);
			$("#mulaiYuk #ganti").text('Start');

		}

		function slideStatusOff(){
			$("#status").delay(600).animate({
				'left':'8px'
			});
		}		
		
		$(document).keydown(function(event){
			if(event.which >= 65 && event.which <= 90){
				if(isPlay)
					guess(String.fromCharCode(event.which+32));
			}
			if(event.which == 32){
				mulaiPermainan();
				$("#mulaiYuk #ganti").text('ReStart');
				slideStatusOff();
			}
		});

		$(".myButton").click(function(){
			if(isPlay){
				guess(this.getAttribute("value"));
			}
		});
		

		$("#start").click(function(){
			
			startHangman();
			$("#mulaiYuk #ganti").text('ReStart');
			slideStatusOff();
		});

		
		$(document).ready(function() {
			$('button').focus(function() {
				this.blur();
			});
		});
		
		$("#quit").click(function(){
			alert("You are going to exit this page")
			window.close();
		});
  
		
             
       });      