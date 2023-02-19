const name=document.getElementById("name");
const nameer=document.getElementById("nameer");
const address=document.getElementById("address");
const addresser=document.getElementById("addresser");
const male=document.getElementById("male");
const female=document.getElementById("female");
const other=document.getElementById("other");
const genderer=document.getElementById("genderer");
const select=document.getElementById("select");
const selecter=document.getElementById("selecter");
const submit=document.getElementById("submit");
const body=document.getElementById("body");
//error marks
nameer.textContent="";
addresser.textContent="";
genderer.textContent="";
selecter.textContent="";

submit.addEventListener("click", (e) =>
{
    let iser=false;
    //e.preventDefault();
    if(name.value.length<6)
    {
        nameer.textContent="name cannot be less than 6";
        iser=true;
    }
    if(!name.value)
    {
        nameer.textContent="please enter a name";
        iser=true;
    }
    if(!name.value.match(/[a-zA-Z]/gi))
    {
        nameer.textContent="Name should only contain alphabets";
        iser=true;
    }
    if(!address.value)
    {
        addresser.textContent="Please enter a address";
        iser=true;
    }
    if(address.value.length<10)
    {
        addresser.textContent="Please enter a valid address";
        iser=true;
    }
    if(!male.checked &&!female.checked&&!other.checked)
    {
        genderer.textContent="Please select a gender";
        iser=true;
    }
    if(select.selectedIndex=='')
    {
        selecter.textContent="Please select a option";
        iser=true;
    }
    let clr = ["#ff6b6b", "#f06595", "#cc5de8", "#845ef7", "#5c7cfa", "#339af0", "#22b8cf", "#20c997", "#51cf66", "#94d82d", "#fcc419", "#ff922b", "#20c988", "#23d997"];
    const r =Math.floor(Math.random()*clr.length);
    body.style.background=clr[r];

    if(iser)
    {
        e.preventDefault();
    }

});