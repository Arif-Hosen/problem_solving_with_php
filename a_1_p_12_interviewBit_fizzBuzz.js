// https://www.interviewbit.com/problems/fizzbuzz/

// *locally solve, but online judge does not accept.

const fizzBuzz = (a)=>{
    let stringsArray = [];
    for(let i =1; i<= a; i++){
        if(((i%3)==0) && ((i%5)==0)){
            stringsArray.push('FizzBuzz');
        }
        else if((i%3)==0){
            stringsArray.push('Fizz');
        }
        else if((i%5)==0){
            stringsArray.push('Buzz');
        }
        else {
            stringsArray.push(i.toString());
        }
    }

    return stringsArray;
}

const result = fizzBuzz(5);
console.log('Result = ',result );