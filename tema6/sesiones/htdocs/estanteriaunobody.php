<div data-role="page" id="page">
    <div data-role="header" data-position="fixed" class="ui-header" data-theme="b">
    <?php include ('header.php'); ?>
	</div>
	<?php include ('preferencias.php'); ?>
	<div role="main" class="ui-content">
    	<ul data-role='listview' data-split-icon='gear' data-split-theme='a' data-inset='true' data-filter="true" data-filter-placeholder="Buscar inventario">
        	<?php modulouno();?>
        </ul>
	</div>
    <?php include ('footer.php');?>    
</div>
