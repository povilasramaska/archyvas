let tid;
let status;
let kvadratas;

function peleivaz(){
    status.innerHTML="pele ivaziavo";
    tid=setTimeout(pelemiega,500);
}
function pelemiega(){
    status.innerHTML="pele uzmigo";
}
function peleisvaz(){
    status.innerHTML="pele isvaziavo";
    clearTimeout(tid)
}

function start() {
    status=document.getElementById("status");
    kvadratas=document.getElementById("kvadratas");
    kvadratas.addEventListener('mouseout', peleisvaz);
    kvadratas.addEventListener('mouseover', peleivaz);
}
