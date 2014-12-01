<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//echo "<br>";
//echo "<center>"."<h3>".$this->Html->link("ÍNICIO", "/")."</h3>"."</center>";
//$cakeDescription = __d('cake_dev', 'CakePHP: Visite o site oficial do Framework');
?>
<!DOCTYPE html>
<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="app/webroot/css/estilos.css">-->
	<?php echo $this->Html->charset(); ?>
	<title>
	CakePHP: Planos de Ensino
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css();
	 	echo $this->Html->script();
	 	echo $this->Html->css('cake.generic.css');
	 	echo $this->Html->css('bootstrap.min');
	 	echo $this->Html->css('bootstrap-theme.css');
	 	echo $this->Html->css('bootstrap.css');
		echo $this->Html->css('estilos.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">

		<div id="header">

			
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="rodape">
		<br>
		</div>
		<br>
		<div id="footer">
			<?php 
			//echo $this->Html->link(
			//		$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
			//		'http://www.cakephp.org/',
			//		array('target' => '_blank', 'escape' => false)
			//	);

			echo "<br>"."Sistema de Planos de Ensino - IFMS"."<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  Todos os direitos reservados ©";
			?>
		</div>
	</div>
<?php
//=================gilson
if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) echo $this->Js->writeBuffer();
// Writes cached scripts
//fim gilson
?>	
</body>
</html>
