//Main Array,

const mainArr = [4,6,9,-3,5,8];

//Varibles to exctract.

let maxNum = [0];
let minNum = [0];

let addition = 0;

//Make the loop for search the max and min number.

for(let i = 0; i < mainArr.length; i++){

  if(mainArr[i] > maxNum){
  	maxNum = mainArr[i]
  }

  if(mainArr[i] < minNum){
    minNum = mainArr[i];
  }
  
}

addition = maxNum + minNum;

//Print the results.

console.log(`Array: [${mainArr}]`)

console.log(`Max Number: ${maxNum}`);
console.log(`Min Number: ${minNum}`);

console.log(`The result addition with 2 numbers: ${addition}`);