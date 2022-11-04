function mainback(){


    var btn =document.getElementById("btnback");

    window.open("../index.php");
}
function registerpage(){


    var btn =document.getElementById("btnback");

    window.open("../STUDENT REGISTER/register.php");
}


function adminlog(){

  var log =   document.getElementById("loginEmail").value;
    var pw =document.getElementById("loginPassword").value;

    if (log=="sahan"){
        if(pw == "sahan"){
            window.open("../LOGIN/ADMIN PAGE/Adminpage.php");
        }else{
            window.reload;
        }

    }else{
        Window.reload;
    }

}