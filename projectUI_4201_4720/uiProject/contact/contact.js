function  message(){

    var name = document.getElementById("message");
    var email = document.getElementById("email");
    var message = document.getElementById("message");
    const success = document.getElementById("success");
    const failed = document.getElementById("failed");




    if(name.value === "" || email.value === "" || message.value === ""){
        
        failed.style.display = 'block';
    }else{
        setTimeout(() =>{
            
            name.value = "";
            email.value = "";
            message.value = "";
            },2000);
        success.style.display='block';
    }


    setTimeout(() =>{
    
          success.style.display = 'none';
            failed.style.display = 'none';
    },2000);
}

// https://www.youtube.com/watch?v=kWEDY0rjS30
function emailSend(){
   // const name = document.querySelector('.name'),
   // name = document.querySelector('.name');
}