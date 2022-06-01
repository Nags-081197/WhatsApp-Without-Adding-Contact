
// const form = document.getElementById("myform");
// const phone = document.getElementById("phone");
// const text = document.getElementById("text");
// // const ErrorMsg = document.getElementById("error");


// form.addEventListener('submit', (e) => {
//     let message = []

//     console.log("hujhgfhgvjhb");

//     if(phone.value==="" || phone.value==null){
//         message.push('Phone No. Required')
//     }

//     if (message.length>0){
//         ErrorMsg.innerHTML = message.join(', ')

//     }

    
// })

// const form = document.getElementById("myform");
// const phone = document.getElementById("phone");
// const text = document.getElementById("text");
// const chat = document.getElementById("chat");

function check(){
    var phone=document.form1.phone;
    var error=document.form1.phone;
	var regex = /^[0-9]{11,13}$/;
	 if(phone.value.length>0){
	 	if(regex.test(phone.value))
	 	{
	 		phone.innerHTML="";
         }
     }
     else{
        error.innerHTML="Enter Valid Phone number with country code and without '+' "
     }
}

