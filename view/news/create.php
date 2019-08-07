<form method="get" action="index.php">
	<fieldset>
		<legend>Ajout de News:</legend>
		<input type="hidden" name="action" value="created">
		<input type="hidden" name="id" value="0">
		<p>
			<label for="titre_id">Titre</label> :
			<input type="text" placeholder="Ex: Best titre ever" name="titre" id="titre_id" required/>
		</p>
		<p>
			<label for="contenu_id">Contenu</label> :
			<textarea id="Contenu" name="contenu" rows="40" cols="200" placeholder="Le meilleur contenu du monde" required></textarea>
		</p>
		<p>
			<input type="submit" value="Publier" />
		</p>
	</fieldset>
</form>