// let r1=new RegExp("\d+");
// let r2=/\d+/;
//
// let r3=new RegExp("[a-q]*","i");
// let r4=/^a.*c$/i;
// let s="afc"
// if (r4.test(s)){
//     console.log(s+"               viskas ok");
// }else{
//     console.log(s+"     neprasideda aA arba nesibaigia Cc");
// }
let m="apple is red and tasty";
let r5=/(\w*) (\w*)/;
console.log(m.match(r5));
console.log(r5.exec(m));
m=m.replace(r5,"$2 $1");
console.log(m);
