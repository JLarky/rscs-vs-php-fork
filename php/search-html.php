<?php
$jsonData = file_get_contents('http://localhost:8080/pokemon.json');
$pokemon = json_decode($jsonData, true);

$search = $_GET['search'] ?? '';
$filteredPokemon = array_slice(
  array_filter($pokemon, function ($p) use ($search) {
    return strpos(strtolower($p['name']), strtolower($search)) !== false;
  }),
  0, 20);

include 'render_table.php';
render_table($filteredPokemon);
