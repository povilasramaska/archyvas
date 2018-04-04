function validate(){
    let un = document.getElementById('username').value;
    if(un.length<5||un.length>12){
        console.log(" klaida username neatitinka ilgis");
        return;

    }
    let r1=/\d/;
    if(!r1.test(un)){
        console.log("klaida username nera skaiciaus");
        return;
    }

    let pas=document.getElementById('password').value;
    if(pas.length<7||pas.length>12){
    console.log("klaida pasworde neatitinka ilgis");
    document.getElementById('password').focus();
    return;
    }
    let r2=/[!.,;|?\[\]\{\}\*\\]/;
    if(!r2.test(pas)){
    console.log("klaida pasworde nera simbolio");
    return;

    }
    let mail=document.getElementById('email').value;
    let r3=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!r3.test(mail)){
    console.log("neteisingas pastas");
    return;
    }
    let name=document.getElementById('name').value;
    let r4=/[A-Z ]/i;
    if(!r4.test(name)){
        console.log("neteisingas varbas");
        return;

    }
    let ch1=document.forms["forma"]["language1"].checked;
    let ch2=document.forms["forma"]["language2"].checked;
    if(ch1!==true&ch2!==true){
        console.log("nepazymetas");
        return;
    }
    console.log("viskas ok");
    }
