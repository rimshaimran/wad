
/*function definition*/
function funcDec() {
    console.log("Its from func");
}

funcDec();/* calling function*/

var funcExp = function () {
    console.log("Its from func Expression");
}

funcExp();/* calling function*/

function calc(a, b) {

    return a+b;
}

console.log(calc(4, 7));

var fruitList = ["apple", "berry", "banana", "orange"];
fruitList[1];
fruitList.shift(); /*remove first index value*/
fruitList.pop(); /*remove last index value*/
fruitList.push("mango");/* add on last*/
fruitList.splice(2,0);
/*
JS ARRAY FROM W3SCHOOLS*/

var array2 =["banana", ["apple",["orange"],"berry"]];
/*array2[1][1][0]; orange*/

var user = [{
    name:"rimsha",
    age: 28,
    isAlive: true,
    move: function () {
        console.log("Moving from A to B");
    }
    },{
    name:"mahnoor",
        age: 28,
        isAlive: true,
        move: function () {
        console.log("Moving from A to B");
    }
}]

var database = {
user: "ali",
pass: "123"}

var newsFeed = [{
    user: "usman",
    content: "I am happy today"
}, {
    user: "umer",
    content: "feeling upset and alone"
}]

var name =prompt("Enter your username");
var pass = prompt("Enter your password");

if (name===database.user && pass===database.pass)
{
    console.log(newsFeed);
}else {
    console.log("wrong");
}