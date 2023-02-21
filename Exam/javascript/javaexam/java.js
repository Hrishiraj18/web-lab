function check()
{
    var q1=document.forms.q1.value;
    var q2=document.forms.q2.value;
    var q3=document.forms.q3.value;
    var q4=document.forms.q4.value;
    var q5=document.forms.q5.value;
    var c=0;
    var result=document.getElementById("result");
    var forms=document.getElementById("forms");


    if(q1=="D")
    {c++}
    if(q2=="A")
    {c++}
    if(q3=="A")
    {c++}
    if(q4=="C")
    {c++}
    if(q5=="A")
    {c++}
    forms.style.display = "none";
    result.textContent ="";
 
    if(c==0)
    result.textContent =`Your result is ${c}/10. TRY HARDER`;
 
    if(c>2&&c<3)
    result.textContent =`Your result is ${c}/10. SATISFACTORY`;
 
    if(c>=3&&c<4)
    result.textContent =`Your result is ${c}/10. GOOD`;
 
    if(c=4)
    result.textContent =`Your result is ${c}/10. EXCELLENT`;
 
 

    
}