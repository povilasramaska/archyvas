let startas;
let pause;
let reset;
let faster;
let slower;
let sekundes;
let minutes;
let valandos;
let tid=null;
let i=0;
let j=0;
let k=0;
let speed=1000;

function laikas (){

sekundes.innerHTML=i;
minutes.innerHTML=j;
valandos.innerHTML=k;
if(i>=59)   {
            i=0;j++;
            minutes.innerHTML=j;
                if(j>=59){
                    j=0;
                    k++;
                    valandos.innerHTML=k;
                    if(k>=23){
                    k=0;
                    };
                };
            };
i++;
};
function pradzia(){
sekundes.innerHTML=i;
minutes.innerHTML=j;
sekundes.innerHTML=k;
}

function startuoja(){
if(!tid){
console.log("startuoja");
tid=setInterval(laikas,speed);}
}

function sustoja(){
    if(tid){
    console.log("sustoja");
    clearInterval(tid);
    tid=null;
}else{

startuoja()
}
}
function naujai(){
    if(tid){
        clearInterval(tid);
        tid=null;
    }
    console.log("naujai");
    speed=1000;
    i=0;
    j=0;
    k=0;
    pradzia();
}

function greitai(){

    console.log("greitai")
}
function letai(){
    clearInterval(tid);
    tid=setInterval(laikas,speed);
    speed=speed*2;
    startuoja();
    console.log("letai")
}

function start() {
    startas=document.getElementById("startas");
    pause=document.getElementById("pause");
    reset=document.getElementById("reset");
    faster=document.getElementById("faster");
    slower=document.getElementById("slower");
    sekundes=document.getElementById("sekundes");
    minutes=document.getElementById("minutes");
    valandos=document.getElementById("valandos");

    startas.addEventListener("click", startuoja);
    pause.addEventListener("click", sustoja);
    reset.addEventListener("click", naujai);
    faster.addEventListener("click", greitai);
    slower.addEventListener("click", letai);
}
