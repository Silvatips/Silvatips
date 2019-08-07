<?php

	echo '<p><a href="https://silvatips.ga/index.php?action=create">Ajouter News</a></p>';

	foreach ($tab_n as $n) {

		echo '<article><h1>' . htmlspecialchars($n->getTitre()) . '</h1>' .

		'<p>' . htmlspecialchars($n->getContenu()) . '</p></article>';

	}

?>