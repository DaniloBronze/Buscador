<?php

require 'vendor/autoload.php';

use Mix\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'SEU_LINK']);
$crawler = new Crawler();

$buscardor = new Buscador($client, $crawler);
$cursos = $buscardor->buscar('URL_DO_LINK');

foreach ($cursos as $curso) {
    echo exibeMensagem($curso);
}
