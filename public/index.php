<?php
define("NOME_CURSO", Sistemas.de.informação);
define("INSTITUIÇÃO", Multivix);
define("ANO_CORRENTE, 2024");
$ano_inicio_curso = 2020;
$semestre_atual = 7;
$calculo_tempo_curso = ANO_CORRENTE - $ano_inicio_curso;
echo "Estou no {$semestre_atual}° período do curso de " . NOME_CURSO . " na " . INSTITUICAO . ".";
echo "Você está no curso há" .$calculo_tempo_curso. "anos" ;
?>
