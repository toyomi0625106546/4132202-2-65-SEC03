
    // alert("Hello js!");
    var num = 10;
    let name = "ball";
    const arr = [10,20, "Hi"];
    let obj = { name:"dang",age:20};
    const objmix = {
        data:[
            {name:"dum",gpa:3.51},
            {name:"dong",age:18,gpa:3.12}
        ],
    };

    console.log(num);
    console.log(arr);
    console.log(objmix.data[1].age);

    function add(a,b){
        return a+b;
    }
    let total = add(3,5);

    document.getElementById("div1").innerHTML=name;
    
    $(function(){
    //  alert("Hello jquer...");

    $("#btn1").click(function(){
        $("#div1").text("BRU");
    });
    $("#btn2").bind("click",()=>{
        $(".in1").val("BRU");
    });
    $("#btn3").click(()=>{
        $(".in1:even").toggleClass("red");
    });
    $("#div_form").load("./pages/form.html");
    });//jquer Handle

