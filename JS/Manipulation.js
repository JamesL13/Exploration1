$(document).ready(function()
{
        $("#Sources").hide();
        $("#Recap").hide();
}); 

function Emily(infoId)
{
	var xmlHttp = xmlHttpObjCreate();
		if (!xmlHttp) {
			alert("The browser doesn't support this action.");
			return;
		}
		var classchoice;
		
		if(infoId == 'choice1')
		{
			classchoice = 'Sources';
		}

		if(infoId == 'choice2')
		{
			classchoice = 'Recap';
		}

		xmlHttp.onreadystatechange=function() {
			if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
				elemObj = document.getElementById(classchoice);
				elemObj.innerHTML = xmlHttp.responseText;
			  }
		}
		
		// Append GET data to identify which quote we want
		var reqURL = "updateInfo.php?infoId=" + infoId;
		xmlHttp.open("GET", reqURL, true);
		xmlHttp.send();
}


function HideandSeek(Seek)
{
//THIS IS WHERE I WILL HAVE THE SWITCH STATEMENTS TO CHOOSE WHAT TO HIDE AND WHAT TO SEEK
	switch (Seek)
	{
		case 'choice1':
			$('#SolsticeLogo').fadeOut(500);
			$('#Sources').fadeIn(1250);	
			$('#choice1').click(Emily('choice1'));	
			$('#Recap').fadeOut(500);
		break;

		case 'choice2':
			$('#SolsticeLogo').fadeOut(500);
			$('#Recap').fadeIn(1250);	
			$('#choice2').click(Emily('choice2'));
			$('#Sources').fadeOut(500);
		break;

//		default 'SolsticeLogoOpener'

//		break;
	}
	
}
