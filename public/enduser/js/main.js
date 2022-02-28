
    let activelink =document.querySelectorAll('.nav-item .nav-link')
for(let i=0;i<activelink.length;i++){
   activelink[i].addEventListener('click',()=>{
       for (let index = 0; index < activelink.length; index++) {
           activelink[index].classList.remove("active");
           
       }
       activelink[i].classList.add("active")
   })
}

