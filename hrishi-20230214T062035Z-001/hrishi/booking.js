const name1=document.getElementById("name");
const btn=document.getElementById("btn");
const namerr=document.getElementById("namerr");


btn.addEventListener("click", (e) => {
    let isError = false;
    if (!name1) {
      document.getElementById("namerr").style.visibility="visible";
        isError = true;
      }

if (isError) {
e.preventDefault();
}
});
