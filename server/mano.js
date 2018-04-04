$("#list").click(function(){
console.log("paspaustas list")
});

let mmm = [
    {
        "id":6,
        "userName":"BANDas UPDATED",
        "eMail":"default Email","age":10
    },{
        "id":11,
        "userName":"nerbalionu",
        "eMail":"kazkokstaitest",
        "age":28
    },{
        "id":19,
        "userName":"sdsdg",
        "eMail":"sdgsdg",
        "age":2323
    },{
        "id":20,
        "userName":"rtrt",
        "eMail":"rtrt",
        "age":111
    },{
        "id":23,
        "userName":"rter",
        "eMail":"rtyry",
        "age":23
    },{"id":24,"userName":"kaiptrinti","eMail":"nemoku","age":666
    },{"id":25,"userName":"veikia","eMail":"viskas","age":666
    },{"id":27,"userName":"qaqaq","eMail":"qaqa","age":5656
    },{"id":30,"userName":"username","eMail":"email","age":0
    },{"id":31,"userName":"test","eMail":"test","age":222
    }
];
window.localStorage.clear();
window.localStorage.setItem["userList"] = JSON.stringify(mmm);

$.ajax({
    url:"http://192.168.1.81:8080/list",
    // data:s,
    // contentType:"application/json",
    type:"GET",
    // dataType:"json",
    success:function(data){
        console.log("gauti duomenys");
        console.log(data);
        document.getElementById("man").innerHTML =data;
        var s=data.length;
        document.getElementById("man").innerHTML =s;
        console.log(s);
        for(let i=0;i<s;i++){
            let age;
            age=data[i].age;
            document.getElementById("man").innerHTML =age;
        };
    }
});



$("#new").click(function(){
console.log("paspaustas new")
});
