function Car(name,lane){
    this.name=name;
    this.speed=0;
    this.distance=0;
    this.lane=lane;
    this.cardiv=$('<div style="top:0;position:absolute;left:'+this.lane*40+'px; width:20px;height:40px;border: 3px solid green;background-color:red;"></div>');
    this.cardiv.appendTo(document.body);
}

Car.prototype.speedup = function(s){
    this.speed+=s;
    if(this.speed>150){this.speed=150};
}

Car.prototype.slowdown = function(s){
    this.speed-=s;
    if(this.speed<0){this.speed=0};
}

Car.prototype.move = function(t){
    this.distance+=this.speed*t;
    this.cardiv.css("top",Math.round(this.distance));
}
let riid;
let siid;
let raceDistance;
let allCars=[];

$(function(){

let cc = prompt('Car count:',5);
cc=parseInt(cc);
if(cc>0){
    for(let i=0;i<cc;i++){
        allCars.push(new Car("Car"+i,i));
    }

    raceDistance = prompt('raceDistance:',500);
    raceDistance=parseInt(raceDistance);
    if(raceDistance>0){
        let finisch=$('<div style="top:'+(raceDistance+40)+'px;position:absolute;width:1500px;height:1px;border: 1px solid green;"></div>');
        finisch.appendTo(document.body);
        riid=setInterval(race,500);
        siid=setInterval(speedChange,2000);


    }else{
    alert("bloga distancija");
    }
    }else{
    alert("blogas masinu skaicius");
}
function speedChange(){
    for(let i=0;i<allCars.length;i++){
        if(Math.random()>=0.5){
            allCars[i].speedup(Math.round((Math.random()*5)));
        }else{
            allCars[i].slowdown(Math.round((Math.random()*5)));
        }
    }
}

function race(){
    let winner=-1;
    for(let i=0;i<allCars.length;i++){
        allCars[i].move(0.5);
        if (allCars[i].distance>=raceDistance){
            winner=i;
            break;
        }
    }
    if (winner>=0){
        clearInterval(riid);
        clearInterval(siid);
        console.log('laimejo   '+winner+"   masina");
    }
    for(let i=0;i<allCars.length;i++){
        console.log("masina  "+allCars[i].name+"  greitis  "+allCars[i].speed+" atstumas  "+ allCars[i].distance)
    }
}

race();
});
