// console.log("hi");

function greeting(){
    console.log("hello all");
}

function getName(name = "default value",phone = '090000'){
    console.log(name,phone);
}

// getName();

// function sum(num1 , num2){
//     let result = num1 + num2
//     console.log(result);
// }

// sum(100,200)

// greeting();

// 2 types of function decalration 

// function customer(){
//     console.log("customer");
// }
// customer()

// let user = function(){
//     console.log("user");
// }
// user();

// es6 // arrow function

// let arrowFun = (name = 'default') => {
//     console.log("arrow function runnning"+name);
// }

// arrowFun();

// type function void function 

// function voidFunction(num1 , num2){
//     console.log(num1 + num2);
// }
// voidFunction(100,200);

// function typeFunction(num1 , num2){
//     return num1 + num2 ; 
// }

// let answer = typeFunction(1000,200);

// console.log(answer);


// let call = (className) => {
//     return className
// }

let call = (className = "code lab") =>  "hello " + className

// let response = call();

// console.log(  response );

// let dataReturn = () => ['apple','mango']

// let dataReturn = () => ( {
//     name : 'sithu' , 
//     job : 'programmer'
// } )

// console.log( dataReturn() );

// let name = 'code lab'; // global 

// function callName(){
//     let localName = "hello" // local scope
//     console.log(localName);
//     console.log(name);
// }

// callName()
// console.log(localName);

// let car = "Suzuki";

// for( let i = 0 ; i < carBrand.length ; i++ ){
//     console.log( carBrand[i] );
// }

// console.log("=======");

// carBrand.forEach(item => {
//     console.log(item);
// });

// array => index
// let carBrand = [ "BMW" , 'Lexus' , "Honda" , "Toyata" , 'Ford' ] ;

// bracket notation
// console.log(carBrand[2]);

// object => key : value
// let students = {
//     name : 'sithu' , 
//     age : 27 , 
//     job : 'programmer'
// };
// bracket notation || dot notation
// console.log( students.name );


// one dimensional array
let carBrand = [ "BMW" , 'Lexus' , "Honda" , "Toyata" , 'Ford' ] ;

// multi dimensional array
let info = [ 'phone' , { name : 'code lab' , 'job' : 'programmer' , platform : { platformOne : 'zoom' , platformTwo : 'offline' } , 'language' : ['javaScript','java','php'] } , ['red','blue','black',['apple','mango']] , 'charger' ]


let student = {
    name : 'aung aung' , 
    age : 19 ,
    colors : ['red' , 'green', [1,2] , {color:'red'}]  ,
    gender : { one : 'male' , two : 'female' , three : [1,2,3] } , 

    callName : function(){
        return this.name
    } ,

    callAge : () => {
        return this.age
    }
}

// console.log(student);

let name = student.callName()

console.log(name);



// https://fakestoreapi.com/products










