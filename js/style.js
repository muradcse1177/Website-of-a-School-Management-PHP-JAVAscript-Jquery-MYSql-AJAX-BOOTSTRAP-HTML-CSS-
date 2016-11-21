function stat() {
	text1 = ""; //the same as text2, only the last character is highlighted
    text2 = ""; //current string, which will be written
    count = 0;
	text = "Start now".split("");
	writetext();
	function writetext() { //show strings above on screen
		text1 = text2 + "<font color='00ff00'>" + text[count] + "</font>";
        text2 += text[count];
document.getElementById("nnn").innerHTML = text1; //where to write

if (count < text.length-1){
count++;
setTimeout('writetext()', 25);
}
}
window.onload =  function() {
	stat();
}


