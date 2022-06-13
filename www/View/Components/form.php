


<form method="<?= $config["config"]["method"]??"GET" ?>" action="<?= $config["config"]["action"]??"" ?>">



	<?php foreach ($config["inputs"] as $name => $configInput):?>

		<input name="<?= $name ?>" 
				placeholder="<?= $configInput["placeholder"]??"" ?>"
				class="<?= $configInput["class"]??"" ?>"
				type="<?= $configInput["type"]??"text" ?>"

				<?php if(!empty($configInput["required"])): ?>
					required="required"
				<?php endif;?>

			><br>

	<?php endforeach;?>


	<input type="submit" value="<?= $config["config"]["submit"]??"Envoyer" ?>">

	<input type="reset" value="<?= $config["config"]["reset"]??"Annuler" ?>">

</form>