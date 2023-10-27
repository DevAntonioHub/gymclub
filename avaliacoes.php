<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/avaliar.css">
    <script type="text/javascript" src="js/avaliar.js" async></script>
    <title>Avaliações GYM CLUB</title>
</head>
<body>
    <header>
<div id="avaible"><h1 class="h1-avaible">Avaliações do Site</h1></div>

    </header>
   <section id="forms-avaliar">
    <div>
        <h1 class="h1-geral">Avalie nosso site!</h1>
      
        <form id="siteForm">
        <label for="organizacao" class="labels">Organizacao:</label>
        <select id="org" class="selections" name="options">
            <option value="Bem organizado">Bem organizado</option>
            <option value="Nada organizado">Nada organizado</option>
            <option value="Precisa de melhorias">Precisa de melhorias</option>
              
        </select>
        <br><br>
        <label for="variedades" class="labels">Variedade de produtos</label>
        <select id="vari" class="selections" name="options">
            <option value="Bastante abrangente">Bastante abrangente</option>
            <option value="Pouco abrangente">Pouco abrangente</option>
            <option value="Suficiente">Suficiente</option>
            
        </select>
        <br><br>
          <textarea  id="textarea" cols="30" rows="10" placeholder="Digite sua opinião"></textarea>
      
        <h2>Nota de 0 a 10</h2>
          
          <input type="number" id="nota" class="nota" min="0" max="10" placeholder="1 a 10">
      <br><br>
          <button type="submit" class="btnEnviar">Enviar</button>
        </form>
      </div>
    </section>
    

    <section id="sectionContent">
        <h1 class="h1-geral" id="h1Avaible">Algumas avaliações abaixo:</h1>


    </section>

</body>
</html>