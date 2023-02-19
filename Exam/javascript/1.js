const binary=document.getElementById("binary");
        const decimal=document.getElementById("decimal");
        const button=document.getElementById("button");
        decimal.textContent='';
        button.addEventListener("click",()=>{
            if(binary.value)
            {
                decimal.value=parseInt(binary.value,2)
                decimal.textContent=decimal.value;
            }
            else{
                decimal.textContent="Please enter a binary";
            }

        });

//next part
const x=document.getElementById("x");
const x1=document.getElementById("x1");
const button1=document.getElementById("button1");
x1.textContent='';
button1.addEventListener("click",()=>{
    if(x.value=='')
    {
        x1.textContent="string is empty";
    }
    else
    {
        x1.textContent="String not empty";
    }

});
//next
const x2=document.getElementById("x2");
const x4=document.getElementById("x4");
const x3=document.getElementById("x3");
const button2=document.getElementById("button2");
x3.textContent='';
let count;
button2.addEventListener("click",()=>
{if(x2.value&&x4.value)
    {
        let regx=RegExp(x4.value,"gi")
        count=(x2.value.match(regx)||[]).length;
        x3.textContent=count;


    }

});
