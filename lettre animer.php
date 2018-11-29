<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script language="JavaScript1.2">
var it=0
var head="display:''"
function initialize(){
mytext=typing.innerText
var myheight=typing.offsetHeight
typing.innerText=''
document.all.typing.style.height=myheight
typeit()
}
function typeit(){
typing.insertAdjacentText("beforeEnd",mytext.charAt(it))
if (it<mytext.length-1){
it++
setTimeout("typeit()",100)
}
else
return
}
if (document.all)
document.body.onload=initialize
<P><span id="typing" style="visiblity:hidden;">
Votrssss
</span></P>
</script>


</body>
</html>


