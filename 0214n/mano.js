/*
// objektinis programavimas

// funcija kaip klase
function Car(pav){
    this.marke=pav;
    this.greitis=0;
}

// naujas objektas
let c1=new Car("Ford");
console.log(c1);

let m1=new Car("Mazda");
console.log(m1);


// aprasom kad visa klase gali gazuot
Car.prototype.speedup=function(s){
    this.greitis+=s;
}
// padidinam gr
m1.speedup(10);
console.log(m1);
*/

let masinuSk= prompt("Ivesk, kiek masinu vaziuos");
masinuSk=parseInt(masinuSk);
let atstumas=prompt("Koki atstuma vaziuos");
atstumas=parseFloat(atstumas);
console.log(atstumas,masinuSk);

function Car(pav){
    this.marke=pav;
    this.greitis=0;
    this.atstumas=0;
}



var masina= [];
for(let i=0;i<masinuSk;i++){
masina[i]= new Car(i);

}
console.log(masina);

Car.prototype.speedup=function(s){
    this.greitis+=s;
}
Car.prototype.speeddown=function(s){
    this.greitis-=s;
}
let timer2Id;
var timer1Id = setInterval(function(){

    for (let j=0;j<masina.length;j++){
    let min=-5;
    let max=5;
    let greitiss=Math.floor(Math.random() * (max - min + 1)) + min;
    if(masina[j].greitis>=0&&masina[j].greitis<=150){
        if (greitiss>=0){
            masina[j].speedup(greitiss);
            if(masina[j].greitis>150){
                masina[j].greitis=150;
            }

            }else{
                masina[j].speeddown(-greitiss);
                if(masina[j].greitis<0){
                    masina[j].greitis=0;
                }
                }
        };
        console.log("2sek");
        clearInterval(timer2Id);
        timer2Id=setInterval(function(){
        for(let k =0;k<masina.length;k++){
            masina[k].atstumas+=masina[k].greitis*0.5;
            console.log("masinos  "+k+"     atstumas     "+masina[k].atstumas);
        }
    },499);

    }

},2300);










// var greitiss=0;
// var timerId = setInterval(function(){
//     let min=-5;
//     let max=5;
//      greitiss=Math.floor(Math.random() * (max - min + 1)) + min;
//      console.log(greitiss);
// },2000);
