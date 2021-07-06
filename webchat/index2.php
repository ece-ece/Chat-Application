<?php
    if (!isset($_SESSION)) session_start();
    //realpath_cache_size = 0;
   
?>

<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
	body{width:600px;font-family:calibri; background-color: #191919}
	.error {color:#FF0000;}
	.chat-connection-ack{color: #26af26; font-size: 20px; }
	.chat-message {border-bottom-left-radius: 4px;border-bottom-right-radius: 4px;
	}
	#btnSend {background: #26af26;border: #26af26 1px solid;	border-radius: 4px;color: #FFF;display: block;margin: 15px 0px;padding: 10px 50px;cursor: pointer;
	}

	#chat-box {background: #CECECE ;border: 1px solid #ffdddd;border-radius: 4px;border-bottom-left-radius:0px;border-bottom-right-radius: 0px;padding: 10px;position: relative;
    overflow-y: scroll;
    height: 400px;
    
	}
	.chat-box-html{color: #09F;margin: 10px 0px;font-size:0.8em;font-family: sans-serif;}
	.chat-box-message{color: black;padding: 5px 10px; background: linear-gradient(120deg, rgba(23, 190, 187, 1), rgba(240, 166, 202, 1));border: 1px solid #ffdddd;border-radius:9px;display:inline-block; }
	#chat-message{width: 100%; box-sizing: border-box;padding: 10px 8px;color: #191919; border-radius: 16px; border-style: groove; 
	}
	.asd{
		background: rgba(255, 255, 255, 0.05);
  
  border-radius: 0.2em;
  /*position: relative;*/
  box-shadow: 1px 1px 12px rgba(0, 0, 0, 0.1);	
			width: 650px;
		height: 650px;
  padding: 20px;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  

	}
	.asd input[type ="submit"]{
  border: 0;
  background: rgba(255, 255, 255, 0.05);
  display: block;
  margin: 20px auto;
  text-align:  center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
  position: relative;
  left: 220px;
}
.asd input[type ="submit"]:hover{
   background: #2ecc71;
}

body{
	background: linear-gradient(180deg, rgba(98, 95, 90, 61), rgba(0, 0, 0, 1));
}

label{
	color:white;
}

.time {
	float: right;
	font-size: 16px;
	color: #888;
	font-weight: 700px;
}
#typing_on{
	color:white;
}
	</style>	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<input type="hidden" id="sessionId" value="<?php echo $_COOKIE["username"]; ?>" />
	

	<script> 
		
	function showMessage(messageHTML) {
		$('#chat-box').append(messageHTML);
	}




	$(document).ready(function(){
		var websocket = new WebSocket("ws://localhost:8090/demo/php-socket.php"); 
		websocket.onopen = function(event) { 
			showMessage("<div class='chat-connection-ack'>Connection is established!</div>");		
		}
		websocket.onmessage = function(event) {
			var Data = JSON.parse(event.data);
			var today = new Date();

			var time = today.getHours() + ":" + today.getMinutes();
			showMessage("<div class='"+Data.message_type+"'>"+Data.message + "</div>");
			showMessage("<div class=time>" + time + "</div>");
			$('#chat-message').val('');
		};
		
		websocket.onerror = function(event){
			showMessage("<div class='error'>Problem due to some Error</div>");
		};
		websocket.onclose = function(event){
			showMessage("<div class='chat-connection-ack'>Connection Closed</div>");
		}; 
		
		$('#frmChat').on("submit",function(event){
			event.preventDefault();
			$('#chat-user').attr("type","hidden");
			var messageJSON = {
				chat_user: document.getElementById("sessionId").value,
				chat_message: $('#chat-message').val()			
			};
			websocket.send(JSON.stringify(messageJSON));
			$.ajax({
	            type: 'post',
	            url: './backend/send.php',
	            data: $('#frmChat').serialize()
          });

		});
	});




	</script>
	</head>

	<body id="screen">
	
		<form class="asd" name="frmChat" id="frmChat" method="post" action="./backend/send.php">
		<div class="btn-group">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Themes
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
		<button  class="dropdown-item" type="button" id="button1">Original</button>
		<button   class="dropdown-item" type="button" id="button2">midnight blue</button>
		<button  class="dropdown-item" type="button" id="button3">cloudy</button>
		<button  class="dropdown-item" type="button" id="button4">pinky</button>
		<button   class="dropdown-item" type="button"id="button5">suny</button>
		</div>
		<script>
		document.getElementById("button1").onclick=function()
		{
			document.getElementById("screen").style.background='linear-gradient(180deg, rgba(98, 95, 90, 61), rgba(0, 0, 0, 1))';
		}
		document.getElementById("button2").onclick=function()
		{
			document.getElementById("screen").style.background='linear-gradient(180deg, rgba(0, 10, 90, 3), rgba(8, 6, 0, 1))';
		}
		document.getElementById("button3").onclick=function()
		{
			document.getElementById("screen").style.background='linear-gradient(180deg, rgba(240, 255, 255, 250), rgba(0, 46,90, 1))';
		}
		document.getElementById("button4").onclick=function()
		{
			document.getElementById("screen").style.background='linear-gradient(180deg, rgba(240, 25, 255, 50), rgba(50, 46,90, 21))';
		}
		document.getElementById("button5").onclick=function()
		{
			document.getElementById("screen").style.background='linear-gradient(180deg, rgba(228, 212, 105, 150), rgba(50, 46,100, 21))';
		}
	</script>
</div>

<div class="btn-group">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Settings
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="./backend/delete-account.php">Delete Account</a>
    <a class="dropdown-item" href="./backend/change-password.php">Change Password</a>
    <a class="dropdown-item" href="index.php">Log out</a>
  </div>
</div>
	
  </body>
			<div id="chat-box"></div>
			<label for="chat-message">Message:</label>
            <input type="text" name="chat-message" id="chat-message" class="chat-input" required>
			<div id="typing_on"></div>
			<script>
				var textarea = $('#chat-message');
				var name = document.getElementById("sessionId").value;
				var typingStatus = $('#typing_on');
				var lastTypedTime = new Date(0); // it's 01/01/1970
				var typingDelayMillis = 5000; // how long user can "think about his spelling" before we show "No one is typing" message

				function refreshTypingStatus() {
				    if (!textarea.is(':focus') || textarea.val() == '' || new Date().getTime() - lastTypedTime.getTime() > typingDelayMillis) {
				        typingStatus.html('No one is typing');
				    } else {
				        typingStatus.html(document.getElementById("sessionId").value + ' is typing');
				    }
				}
				function updateLastTypedTime() {
				    lastTypedTime = new Date();
				}

				setInterval(refreshTypingStatus, 100);
				textarea.keypress(updateLastTypedTime);
				textarea.blur(refreshTypingStatus);
			</script>
        <input type="submit" value="Send">
		</form>

		
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>