function prompt1(){
    var bio1 = prompt("Enter a new description for your profile");
    if (bio1.length < 500){
        document.getElementById("bio1").innerHTML = bio1;
    } else{
        document.getElementById("bio1").innerHTML = "Too long, type something shorter. Please.";
    }
}
