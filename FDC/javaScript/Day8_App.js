let result = document.getElementById("result");
let temp = ""

function getData(data){
    let input = data.innerText;

    if( input == '=' ){
        result.innerHTML = eval(temp) // 1 + 2 
        temp = eval(temp) // 3
    }else{
        temp += input
        result.innerHTML = temp
    }
}

function clearForm(){
    result.innerHTML = 0;
    temp = ""
}

