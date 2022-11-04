let date = new Date();
let hours = date.getHours();
let greetings;

if(hours>18){
    greetings = "Good Morning";
}else if(hours > 12){
    greetings = "Good Afternooon";
}else if(hours > 0){
    greetings = "Good Morning";
}else{
    greetings = "HELLO"
}

document.getElementById("greeting").innerHTML = "HEY" +" "+ greetings;


