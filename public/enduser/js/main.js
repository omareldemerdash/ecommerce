
    let activelink =document.querySelectorAll('.nav-item .nav-link')
for(let i=0;i<activelink.length;i++){
   activelink[i].addEventListener('click',()=>{
       for (let index = 0; index < activelink.length; index++) {
           activelink[index].classList.remove("active");
           
       }
       activelink[i].classList.add("active")
   })
}
let showmore =document.querySelector('.show-more')
let showless =document.querySelector('.show-less')
let trending = document.querySelectorAll(".trending")
let all = document.querySelectorAll('all')
showmore.addEventListener('click',()=>{
    trending.style.display="none"
    all.style.display="block"
    showmore.style.display= "none"
    showless.style.display="block"
})
showless.addEventListener('click',()=>{
    all.style.display="none"
    showmore.style.display= "block"
    showless.style.display="none"
})
