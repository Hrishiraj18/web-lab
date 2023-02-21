
    const  email=document.getElementById("email");
    const pass=document.getElementById("pass");
    const emailer=document.getElementById("emailer");
    const passer=document.getElementById("passer");
    const btn=document.getElementById("btn");
    btn.addEventListener("click",(e)=>{

        let clr = ["#ff6b6b", "#f06595", "#cc5de8", "#845ef7", "#5c7cfa", "#339af0", "#22b8cf", "#20c997", "#51cf66", "#94d82d", "#fcc419", "#ff922b", "#20c988", "#23d997"];
    let error=false;
    emailer.textContent="";
    passer.textContent="";
    if(!email.value){
        emailer.textContent="Please enter a email";
        error=true;
    }
    if(!pass.value){
        passer.textContent="Please enter your password";
        error=true;
    }
    if(error)
    {
        e.preventDefault();
    }
    if(error=false)
    {
        const rndm = Math.floor(Math.random() * clr.length);
            console.log(rndm);
            bdy.style.background = clr[rndm];
    }
    });
