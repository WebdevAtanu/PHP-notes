function add(){
	var sname=$("#name").val();
	var sRemail=$("#Reamil").val();
	var srPass=$("#rPass").val();

$.ajax({
	url:'routes/signup.php',
	method:'post',
	data:{
		signup:"signup",
		name=name,
		Remail=Remail,
		rPass=rPass
	},
	success:function(data){
		console.log(data);
	}
	})
}