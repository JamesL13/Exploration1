<?php
$infoId = empty($_GET['infoId']) ? 'choice1' : $_GET['infoId'];

switch($infoId) {
	case 'choice1':
		$info = 'For my exploration, I decided to explore some new design techniques such as Microsofts Metro Design and Googles Material Design. I also wanted to try make a website with ajax and jquery that makes it look like you navigate to other pages but you stay on the same page.
		The Sources I used were:
		Metro Design: https://msdn.microsoft.com/en-us/library/windows/apps/hh465424.aspx
		I looked at: https://msdn.microsoft.com/en-us/library/windows/apps/dn434070.aspx
		Material Design: https://www.google.com/design/spec/material-design/introduction.html
		I looked at: https://www.google.com/design/spec/style/color.html
					https://www.google.com/design/spec/layout/principles.html#
		Jquery: http://api.jquery.com/
			I looked at: http://api.jquery.com/fadein/
						http://api.jquery.com/fadeout/
		 ';
		break;
	case 'choice2':
		$info = 'My experience with design is very much lacking which is why I decided to make it part of my exploration. I wanted to se what big and successful companies say about UX guidelines so I sought out Googles Material Design and Microsofts Metro Design. I then tried to combine the two, colors from Material and layour of Metro. The result? Well not great. More practice and research is definetely needed. The biggest problem I had was runnning into an issue where the left side to properly resize and not mess up the content on the right. I have somewhat succedded but I think I now know my next exploration: CSS mediaqueries. But the getting of teh jquery to work seemed relatively straight forward for a first approach but I assume my code looks sloppy as it has javascript in the index file and probably uses bad coding practices. This is another thing I should work on. The design itself took me a while despite it being simple as I kept changing what I wanted to do until I settled on this design. This design would probably be best used for where there is a lot more content on the right side then I have to show. Maybe a picture gallery on the right side would be worth while for this design.';
		break;
}
print $info;
?>