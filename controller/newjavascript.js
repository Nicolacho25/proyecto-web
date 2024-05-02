/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

const btn = document.getElementById("btn");
const vari = document.getElementsByName("here").values();
console.log(vari);
btn.addEventListener("click",function(){
    const a = document.getElementById("01").checked;
    
console.log(a + "este es el estado de el primer valor")
});

