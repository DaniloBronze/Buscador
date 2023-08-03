# 📚 Buscador

Projeto de biblioteca em PHP para busca de cursos.

## Índice

- [👁‍🗨 Visão Geral](#visão-geral)
- [🚀 Recursos](#recursos)
- [📋 Pré-requisitos](#pré-requisitos)
- [🛠 Instalação](#instalação)
- [💡 Utilização](#utilização)
- [🔍 Exemplos](#exemplos)
- [🤝 Contribuição](#contribuição)

## 👁‍🗨 Visão Geral

O Buscador é uma biblioteca PHP que possibilita a busca de cursos utilizando Guzzle para requisições e Symfony Dom Crawler e Css Selector para análise dos resultados.

## 🚀 Recursos

- Realiza buscas de cursos.
- Analisa e extrai informações dos resultados.
- Inclui testes unitários.

## 📋 Pré-requisitos

- PHP 7.2 ou superior.
- Composer
- GuzzleHttp
- Symfony

## 🛠 Instalação

Para instalar a biblioteca, utilize o seguinte comando:

```bash
composer require danilobronze/buscador
```

## 💡 Utilização
```bash
<?php
require 'vendor/autoload.php';

use Mix\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'SEU_LINK']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('URL_DO_LINK');

foreach ($cursos as $curso) {
    echo exibeMensagem($curso);
}
```

## 🔍 Exemplos
Confira exemplos adicionais na seção de Utilização acima.

## 🤝 Contribuição
Contribuições são bem-vindas! Siga as etapas abaixo para contribuir:

Clone o repositório: git clone https://github.com/DaniloBronze/buscador.git
Crie um branch para sua contribuição: git checkout -b minha-contribuição
Faça as alterações e commit: git commit -am 'Adiciona minha contribuição'
Envie o branch: git push origin minha-contribuição
Abra um Pull Request explicando suas alterações.
