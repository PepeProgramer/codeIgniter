<?php

foreach ($cursos->result() as $cursop){?>
	<ul>
		<li><a href="<?= $cursop->id; ?>" <?= $cursop->curso; ?></li></li>
	</ul>
<?php } ?>

</body>
</html>

