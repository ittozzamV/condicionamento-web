<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Pesquisa</title>
    <script src = "initial.js" defer></script>
</head>
<body>
    <form action="" class="forms">
        <input type="text" id="name" placeholder="Digite o seu nome">
        <div class="container1">
            <button class="genero">Gênero</button>
            <div class="glist">
                <button class="g" id="masc" onClick="gender_click(this.textContent || this.innerText)">Masculino</button>
                <button class="g" id="fem" onClick="gender_click(this.textContent || this.innerText)">Feminino</button>
                <button class="g" id="outro" onClick="gender_click(this.textContent || this.innerText)">Outro</button>
            </div>
     </div>
     <div class="container2">
        <button class="escolaridade">Escolaridade</button>
        <div class="elist">
            <button class="e" onClick="esc_click(this.textContent || this.innerText)">Ensino Fundamental Completo</button>
            <button class="e" onClick="esc_click(this.textContent || this.innerText)">Ensino Médio Incompleto</button>
            <button class="e" onClick="esc_click(this.textContent || this.innerText)">Ensino Médio Completo</button>
            <button class="e" onClick="esc_click(this.textContent || this.innerText)">Ensino Superior Incompleto</button>
            <button class="e" onClick="esc_click(this.textContent || this.innerText)">Ensino Superior Completo</button>
        </div>
     </div>
        <input id="enviar" type="submit" value="Enviar">
    </form>
</body>
</html>