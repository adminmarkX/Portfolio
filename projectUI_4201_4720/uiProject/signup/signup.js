function validateForm(){
    let username = document.forms["signUpForm"]["username"].value;
    let password = document.forms["signUpForm"]["password"].value;
    let emai = document.forms["signUpForm"]["email"].value;
    let name = document.forms["signUpForm"]["name"].value;
    let lastname = document.forms["signUpForm"]["lastname"].value;
    let phone = document.forms["signUpForm"]["phone"].value;
    let address = document.forms["signUpForm"]["address"].value;
    let TK = document.forms["signUpForm"]["TK"].value;
    let country = document.forms["signUpForm"]["country"].value;
    let repassword = document.forms["signUpForm"]["repassword"].value;
    let x = document.getElementById("pwd").value;
    let y = document.getElementById("repwd").value;

    // checks if password and the retype password are correct
    if(x == y){
      alert("The password is correct");
    }else
    {
      alert("The password is incorrect");
    }

    // checks if
    if(username =="" || password =="" || email == "" || name == "" || lastname =="" || address == "" || phone == ""|| TK == "" || country == ""){
        alert("Please all the fields");
    }


}

// it's a event listener that takes object(e) an event that starts to check the values
form.addEventListener("submit",(e) => {
  e.preventDefault();
  checkInputs();
});

function checkInputs(){
  const username = document.forms["signUpForm"]["username"].value.trim();
  const password = document.forms["signUpForm"]["password"].value.trim();
  const emai = document.forms["signUpForm"]["email"].value.trim();
  const name = document.forms["signUpForm"]["name"].value.trim();
  const lastname = document.forms["signUpForm"]["lastname"].value.trim();
  const phone = document.forms["signUpForm"]["phone"].value.trim();
  const address = document.forms["signUpForm"]["address"].value.trim();
  const TK = document.forms["signUpForm"]["TK"].value.trim();
  const country = document.forms["signUpForm"]["country"].value.trim();
  const repassword = document.forms["signUpForm"]["repassword"].value.trim();

  if(usernameValue === ''){

  }else{
    insertValuesToDatabase();
  }


}

function insertValuesToDatabase(){
  var mysql = require('mysql');

  var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "root",
    database: "mydb"
  });
}