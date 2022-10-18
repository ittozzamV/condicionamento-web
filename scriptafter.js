
let clickb1 = document.querySelector(".b1")
let clickb2 = document.querySelector(".b2")
let clickb3 = document.querySelector(".b3")
let send = document.querySelector(".b4")
let plist = document.querySelector(".plist")
let vlist = document.querySelector(".vlist")
let clist = document.querySelector(".clist")
let pronome = ""
let verbo = ""
let complemento = ""
let a = true


clickb1.addEventListener("click", ()=>{
    if(a){
    plist.classList.toggle("newlist")
    a = false
    }
});
clickb2.addEventListener("click", ()=>{
    vlist.classList.toggle("newlist")
    });

clickb3.addEventListener("click", ()=>{
    clist.classList.toggle("newlist")
})

function pronoun_click(clicked_content){
    pronome = clicked_content
    clickb1.textContent = pronome
    plist.classList.toggle("newlist")
}

function verb_click(clicked_content){
    verbo = clicked_content
    clickb2.textContent = verbo
    vlist.classList.toggle("newlist")
}

function complement_click(clicked_content){
    complemento = clicked_content
    clickb3.textContent = complemento
    clist.classList.toggle("newlist")
}

send.addEventListener("click", ()=>{
    frase = pronome + " " + verbo + " " + complemento
    vindex = "" + (parseInt(getCookie("index"))+1)
    console.log(frase)
    createCookie("frase", frase, 2)
    createCookie("index", vindex, 2)
    location.reload()
})


function createCookie(cname, cvalue, days) {
    let expires;
      
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
      
    document.cookie = cname + "=" + 
        cvalue + expires + "; path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }