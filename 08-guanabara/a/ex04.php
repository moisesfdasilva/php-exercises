<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Tipos Primitivos em PHP</title>
  </head>
  <body>
    <div>
      <h1>Strings</h1>
    </div>
    <div>
      <h2>Double Quoted e Single Quoted</h2>
      <p>Double Quoted, existe a interpretação de conteúdo</p>
      <p>"PHP \u{1F418}" -> aparece PHP e um emoji de elefante</p>
      <p>Single Quoted, não existe a interpretação de conteúdo</p>
      <p>'PHP \u{1F418}' -> aparece PHP \u{1F418}</p>
      <?php
        echo "<h3>teste:</h3>";
        $var_elephant = "PHP \u{1F418}";
        echo "<p>$var_elephant</p>";
        $var_elephant = 'PHP \u{1F418}';
        echo "<p>$var_elephant</p>";
        const ESTADO = "RJ";
        echo "Moro no ESTADO"; //não identifica pela falta do cifrão
        echo 'Moro no ESTADO'; //idem
        echo "Moro no ".ESTADO; //concatenando aparece
        echo "Estamos no ano de " .date('Y');
        $nom = "Rodrigo";
        $snom = "Nogeira";
        // Rodrigo "Minotauro" Nogueira
        // echo "$nom "Minotauro" $snom"; <- dá erro
        echo '$nom "Minotauro" $snom'; // funciona, mas não interpreta a var
        echo "$nom \"Minotauro\" $snom"; // sequencia de escape.
        // Sequencia de Escape (Escape Sequences)
        // \n Nova linha
        // \t Tabulação horizontal
        // \\ Barra invertida
        // \$ Sinal de cifrão
        // \u{} Codepoint Unicode
      ?>
    </div>
    <div>
      <h3>Heredoc</h3>
      <p>Tem a característica do Double Quoted com multiplas linhas</p>
      <?php
        $canal = "Curso em vídeo";
        $ano = date('Y');
        echo <<< TESTE
          Olá galera do $canal!
            Tudo bem com vocês?
            Como está sendo esse ano de $ano?
            Abraços! \u{1F596}
        TESTE;
      ?>
    </div>
    <div>
      <h3>Nowdoc</h3>
      <p>Tem a característica do Single Quoted com multiplas linhas</p>
      <?php
        $canal = "Curso em vídeo";
        $ano = date('Y');
        echo <<< 'TESTE'
          Olá galera do $canal!
            Tudo bem com vocês?
            Como está sendo esse ano de $ano?
            Abraços! \u{1F596}
        TESTE;
      ?>
    </div>
  </body>
</html>