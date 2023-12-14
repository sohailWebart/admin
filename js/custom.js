function ShowMenu(){
    if(document.getElementById("menu-buttom").style.display=="block"){
        document.getElementById("menu-buttom").style.display="none";
    }else{
        document.getElementById("menu-buttom").style.display="block";
    }
}
function ShowMenu1(){
    if(document.getElementById("submenu1").style.display=="none"){
        document.getElementById("submenu1").style.display="block";
        document.getElementById("drop1").className = "fa fa-caret-down";
        document.getElementById("submenu2").style.display = "none";
        document.getElementById("drop2").className = "fa fa-caret-right";
    }else{
        document.getElementById("submenu1").style.display = "none";
        document.getElementById("drop1").className = "fa fa-caret-right";
    }
}
function ShowMenu2(){
    if(document.getElementById("submenu2").style.display=="none"){
        document.getElementById("submenu2").style.display="block";
        document.getElementById("drop2").className = "fa fa-caret-down";
        document.getElementById("submenu1").style.display = "none";
        document.getElementById("drop1").className = "fa fa-caret-right";
    }else{
        document.getElementById("submenu2").style.display = "none";
        document.getElementById("drop2").className = "fa fa-caret-right";
    }
}
function Open (){
    if(document.getElementById("submenu3").style.display=="none"){
        document.getElementById("submenu3").style.display="block";
        document.getElementById("drop3").className = "fa fa-caret-down";
        document.getElementById("submenu4").style.display = "none";
        document.getElementById("drop4").className = "fa fa-caret-right";
    }else{
        document.getElementById("submenu3").style.display = "none";
        document.getElementById("drop3").className = "fa fa-caret-right";
    }
}

function ShowMenu4(){
    if(document.getElementById("submenu4").style.display=="none"){
        document.getElementById("submenu4").style.display="block";
        document.getElementById("drop4").className = "fa fa-caret-down";
        document.getElementById("submenu3").style.display = "none";
        document.getElementById("drop3").className = "fa fa-caret-right";
    }else{
        document.getElementById("submenu4").style.display = "none";
        document.getElementById("drop4").className = "fa fa-caret-right";
    }
}
function ShowMenu5(){
    if(document.getElementById("submenu5").style.display=="none"){
        document.getElementById("submenu5").style.display="block";
        document.getElementById("drop5").className = "fa fa-caret-down";
    }else{
        document.getElementById("submenu5").style.display = "none";
        document.getElementById("drop5").className = "fa fa-caret-right";
    }
}
function ShowMenu6(){
    if(document.getElementById("submenu6").style.display=="none"){
        document.getElementById("submenu6").style.display="block";
        document.getElementById("drop6").className = "fa fa-caret-down";
    }else{
        document.getElementById("submenu6").style.display = "none";
        document.getElementById("drop6").className = "fa fa-caret-right";
    }
}