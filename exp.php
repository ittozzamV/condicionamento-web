<?php
$index = $_COOKIE["index"];
$pronomes = ["Eu", "Tu", "Ele", "Nós", "Vós", "Eles"];
$verbos = ["[Andar]", "[Ir]", "[Cuidar]", "[Cozinhar]", "[Fazer]", "[Dançar]", "[Voltar]", "[Estudar]", "[Conhecer]", "[Escutar]", "[Degustar]", "[Sentar]", "[Caminhar]", "[Ler]", "[Assistir]", "[Beber]", "[Usar]", "[Pensar]", "[Dormir]", "[Festejar]", "[Debater]", "[Responder]", "[Lembrar]", "[Pintar]", "[Construir]", "[Recusar]", "[Grelhar]", "[Tocar]", "[Pular]", "[Tirar]", "[Falar]", "[Despertar]", "[Ver]", "[Perturbar]", "[Amar]", "[Elaborar]", "[Permitir]", "[Esperar]", "[Segurar]", "[Liderar]", "[Perder]", "[Oferecer]", "[Trabalhar]", "[Experimentar]", "[Pedir]", "[Entender]", "[Começar]", "[Mostrar]", "[Limpar]", "[Desejar]", "[Exercitar]", "[Perceber]", "[Compartilhar]", "[Viajar]", "[Lavar]", "[Chamar]", "[Comparecer]", "[Fechar]", "[Conquistar]", "[Chegar]", "[Rir]", "[Aprender]"];
$conjs = [["ando", "andas", "anda", "andamos", "andais", "andam"], ["vou", "vais", "vai", "vamos", "ides", "vão"], ["cuido", "cuidas", "cuida", "cuidamos", "cuidais", "cuidam"], ["cozinho", "cozinhas", "cozinha", "cozinhamos", "cozinhais", "cozinham"], ["faço", "fazes", "faz", "fazemos", "fazeis", "fazem"], ["danço", "danças", "dança", "dançamos", "dançais", "dançam"], ["volto", "voltas", "volta", "voltamos", "voltais", "voltam"], ["estudo", "estudas", "estuda", "estudamos", "estudais", "estudam"], ["conheço", "conheces", "conhece", "conhecemos", "conheceis", "conhecem"], ["escuto", "escutas", "escuta", "escutamos", "escutais", "escutam"], ["degusto", "degustas", "degusta", "degustamos", "degustais", "degustam"], ["sento", "sentas", "senta", "sentamos", "sentais", "sentam"], ["caminho", "caminhas", "caminha", "caminhamos", "caminhais", "caminham"], ["leio", "lês", "lê", "lemos", "ledes", "leem"], ["assisto", "assistes", "assiste", "assistimos", "assistis", "assistem"], ["bebo", "bebes", "bebe", "bebemos", "bebeis", "bebem"], ["uso", "usas", "usa", "usamos", "usais", "usam"], ["penso", "pensas", "pensas", "pensa", "pensamos", "pensais", "pensam"], ["durmo", "dormes", "dorme", "dormimos", "dormis", "dormem"], ["festejo", "festejas", "festeja", "festejamos", "festejais", "festejam"], ["debato", "debates", "debate", "debatemos", "debateis", "debatem"], ["respondo", "respondes", "responde", "respondemos", "respondeis", "respondem"], ["lembro", "lembras", "lembra", "lembramos", "lembrais", "lembram"], ["pinto", "pintas", "pinta", "pintamos", "pintais", "pintam"], ["construo", "constróis", "constrói", "construímos", "construís","constroem"], ["recuso", "recusas", "recusa", "recusamos", "recusais", "recusam"], ["grelho", "grelhas", "grelha", "grelhamos", "grelhais", "grelham"], ["toco", "tocas", "toca", "tocamos", "tocais", "tocam"], ["pulo", "pulas", "pula", "pulamos", "pulais", "pulam"], ["tiro", "tiras", "tira", "tiramos", "tirais", "tiram"], ["falo", "falas", "fala", "falamos", "falais", "falam"], ["desperto", "despertas", "desperta", "despertamos", "despertais", "despertam"], ["vejo", "vês", "vê", "vemos", "vedes", "veem"], ["perturbo", "perturbas", "perturba", "perturbamos", "perturbais", "perturbam"], ["amo", "amas", "ama", "amamos", "amais", "amam"], ["elaboro", "elaboras", "elabora", "elaboramos", "elaborais", "elaboram"], ["permito", "permites", "permite", "permitimos", "permitis", "permitem"], ["espero", "esperas", "espera", "esperamos", "esperais", "esperam"], ["seguro", "seguras", "segura", "seguramos", "segurais", "seguram"], ["lidero", "lideras", "lidera", "lideramos", "liderais", "lideram"], ["perco", "perdes", "perde", "perdemos", "perdeis", "perdem"], ["ofereço", "ofereces", "oferece", "oferecemos", "ofereceis", "oferecem"], ["trabalho", "trabalhas", "trabalha", "trabalhamos", "trabalhais", "trabalham"], ["experimento", "experimentas", "experimenta", "experimentamos", "experimentais", "experimentam"], ["peço", "pedes", "pede", "pedimos", "pedis", "pedem"], ["entendo", "entendes", "entende", "entendemos", "entendeis", "entendem"], ["começo", "começas", "começa", "começamos", "começais", "começam"], ["mostro", "mostras", "mostra", "mostramos", "mostrais", "mostram"], ["limpo", "limpas", "limpa", "limpamos", "limpais", "limpam"], ["desejo", "desejas", "deseja", "desejamos", "desejais", "desejam"], ["exercito", "exercitas", "exercita", "exercitamos", "exercitais", "exercitam"], ["percebo", "percebes", "percebe", "percebemos", "percebemos", "percebeis", "percebem"], ["compartilho", "compartilhas", "compartilha", "compartilhamos", "compartilhais", "compartilham"], ["viajo", "viajas", "viaja", "viajamos", "viajais", "viajam"], ["lavo", "lavas", "lava", "lavamos", "lavais", "lavam"], ["chamo", "chamas", "chama", "chamam", "chamais", "chamam"], ["compareço", "compareces", "comparece", "comparecemos", "compareceis", "comparecem"], ["fecho", "fechas", "fecha", "fechamos", "fechais", "fecham"], ["conquisto", "conquistas", "conquista", "conquistamos", "conquistais", "conquistam"], ["chego", "chegas", "chega", "chegamos", "chegais", "chegam"], ["rio", "ris", "ri", "rimos", "rides", "riem"], ["aprendo", "aprendes", "aprende", "aprendemos", "aprendeis", "aprendem"]];
$complementos = [["a pé", "de bicicleta", "de carro"], ["à praia", "ao restaurante", "às compras"], ["das crianças", "dos gatos", "das plantas"], ["o arroz", "os legumes", "o feijão"], ["companhia", "a prova", "fofoca"], ["na festa", "na rua", "no bar"], ["para a casa", "para a festa", "para o bar"], ["na faculdade", "na biblioteca", "em casa"], ["a cidade", "o parque", "a faculdade"], ["o som do mar", "os pássaros", "o piano"], ["os petiscos", "o vinho", "os doces"], ["no chão", "no sofá", "na poltrona"], ["no bosque", "na trilha", "na praça"], ["o artigo", "o livro", "o folheto"], ["o filme", "a série", "a novela"], ["suco", "água", "vitamina"], ["o computador", "o fogão", "a máscara"], ["músicas", "arte", "poemas"], ["muito", "pouco", "em nada"], ["no trabalho", "na aula", "na praia"], ["no carnaval", "na balada", "no aniversário"], ["as ideias", "as respostas", "o texto"], ["à mensagem", "à pergunta", "ao formulário"], ["de ontem", "da festa", "da aula"], ["o quadro", "a parede", "o muro"], ["móveis", "casas", "objetos"], ["o convite", "o chamado", "a ligação"], ["a carne", "o churrasco", "a comida"], ["piano", "flauta", "violão"], ["no trampolim", "na cama", "no show"], ["um cochilo", "o dente", "uma foto"], ["rápido", "devagar", "pouco"], ["de manhã", "de tarde", "de noite"], ["a novela", "o filme", "a série"], ["a aula", "o silêncio", "o filme"], ["cantar", "dançar", "nadar"], ["as pesquisas", "as respostas", "as perguntas"], ["a entrada", "a saída", "a estadia"], ["o transporte", "a comida", "a aula"], ["a bolsa", "o telefone", "a carteira"], ["um time", "uma empresa", "as vendas"], ["o jogo", "o celular", "a carteira"], ["ajuda", "companhia", "comida"], ["longe", "em casa", "tarde"], ["uma comida", "uma roupa", "uma atividade"], ["um papel", "uma caneta", "um presente"], ["a matéria", "a fala", "o livro"], ["um esporte", "um trabalho", "uma viagem"], ["a prova", "a casa", "as fotos"], ["o quarto", "a sala", "a gaveta"], ["descanso", "comida", "viajar"], ["o corpo", "a mente", "o espírito"], ["a distância", "a luz", "o som"], ["um conhecimento", "uma opinião", "uma receita"], ["sozinho", "com pais", "com amigos"], ["a louça", "a roupa", "o quintal"], ["o cachorro", "o amigo", "a família"], ["à palestra", "à aula", "à festa"], ["a janela", "o portão", "o armário"], ["uma avaliação", "uma casa", "uma medalha"], ["cedo", "tarde", "pontualmente"], ["alto", "baixo", "muito"], ["uma matéria", "uma receita", "um hobby"]];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles2.css">
    <title>Pesquisa</title>
    <script src = "scriptafter.js" defer></script>
</head>
<body>
    <?php
    $infofile = fopen("data.txt", "a") or die("Unable to");
    if($index == 0){
    $info = "\n \n ".$_COOKIE["info"];
    fwrite($infofile, $info);
    }
    $frase = "\n ".$_COOKIE["frase"];
    fwrite($infofile, $frase);
    fclose($infofile);
    ?>
    <div class="container1" id="container1">
        <button class="b1">
            Pronome
        </button>
        <div class="plist">
            <?php foreach($pronomes as $pronome){ ?>
                <button class="pronomes" onClick="pronoun_click(this.textContent || this.innerText)"><?=$pronome?></button>
            <?php } ?>
        </div>
    </div>
    <div class="container2" id="container2">
        <button class="b2">
            <?= $verbos[$index]?>
        </button>
        <div class="vlist">
            <?php for($i = 0; $i < 6; $i++){ ?>
                <button class="verbo" onClick="verb_click(this.textContent || this.innerText)"><?= $conjs[$index][$i]?></button> 
                <?php } ?>
        </div>
    </div>
    <div class="container3" id="container3">
        <button class="b3">
            Complemento
        </button>
        <div class="clist">
            <?php for($i = 0; $i < 3; $i++){ ?>
                <button class="complemento" onClick="complement_click(this.textContent || this.innerText)"><?= $complementos[$index][$i]?></button> 
            <?php } ?>
        </div>
    </div>
    <div class="container4">
            <button class="b4">
                Enviar
        </button>
        </div>
</body>