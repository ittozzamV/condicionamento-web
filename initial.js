const enviar = document.querySelector("#enviar")
let b1 = document.querySelector(".genero")
let b2 = document.querySelector(".escolaridade")
let glist = document.querySelector(".glist")
let elist = document.querySelector(".elist")
let gender = ""
let escolaridade = ""
let nome = ""

enviar.addEventListener("click", function(e){
    e.preventDefault();

    nome = document.querySelector("#name").value;
    const personal_info = "Nome: " + nome + ", Gênero: " + gender + ", Escolaridade: " + escolaridade

    createCookie("info", personal_info, 2)
    createCookie("frase", "", 2)
    createCookie("index", "0", 2)
    document.location.href = "exp.php"
});

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

b1.addEventListener("click", (e)=>{
    e.preventDefault()

    glist.classList.toggle("nglist")
    });

b2.addEventListener("click", (e)=>{
    e.preventDefault()
    
    elist.classList.toggle("nglist")
    });

glist.addEventListener("click", (e)=>{
    e.preventDefault();
})
elist.addEventListener("click", (e)=>{
    e.preventDefault();
})
function gender_click(click){
    gender = click
    b1.textContent = gender
    glist.classList.toggle("nglist")
}

function esc_click(click){
    escolaridade = click;
    b2.textContent = escolaridade
    elist.classList.toggle("nglist")
}
