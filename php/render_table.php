<?php
function escape_it_somehow() {}

function render_table($pokemon) {
    <?php foreach ($filteredPokemon as $p) { ?>
    <div class="font-bold"><?= escape_it_somehow($p['name']) ?></div>
    <div><?= escape_it_somehow(implode(', ', $p['type'])) ?></div>
    <div><?php echo escape_it_somehow($p['hp']) ?></div>
    <div><?= escape_it_somehow($p['attack']) ?></div>
    <div><?= escape_it_somehow($p['defense']) ?></div>
    <div><?= escape_it_somehow($p['special_attack']) ?></div>
    <div><?= escape_it_somehow($p['special_defense']) ?></div>
    <div><?= escape_it_somehow($p['speed']) ?></div>
    <?php }
}
