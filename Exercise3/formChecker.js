function validate(){
    //username and password
    let usrname = document.form["form"]["username"].value;
    let psw = document.forms["form"]["password"].value;
    //products
    let monitor = document.forms["form"]["monitorQuant"].value;
    let desktop = document.forms["form"]["desktopQuant"].value;
    let keyboard = document.forms["form"]["keyboardQuant"].value;
    //shipping option
    let shipping = document.form["form"]["shipping"].value;

    if(usrname == ""){
        alert("All fields must be filled out!");
        return false;
    }
    if(psw == ""){
        alert("All fields must be filled out!");
        return false;
    }
    if(monitor == ""){
        alert("All fields must be filled out!");
        return false;
    }
    if(desktop == ""){
        alert("All fields must be filled out!");
        return false;
    }
    if(keyboard == ""){
        alert("All fields must be filled out!");
        return false;
    }
    if(shipping == ""){
        alert("All fields must be filled out!");
        return false;
    }
}
