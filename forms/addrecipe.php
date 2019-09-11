<?php 
	//Form Add user
	include_once '../config/session.php';

	echo("<br>userId = $userId");
?>

<style>
	.ingredientContainer{ display: table; }
	.ingredienteTitle, .ingredientBox{ display: table-row; }
	.ingredientField
	{
		display: table-cell;
		padding-right: 10px;
		padding-bottom: 10px;
	}
	.textAreaForm{ display: block; }
</style>

<form class="cmxform" id="commentForm" method="get" action="../loads/addrecipe.php">
  <fieldset>
    <legend>Add Recipe</legend>
    <p>
      <label for="cname">Receta</label>
      <input id="cname" name="recipename" minlength="4" type="text" class="inputForm" required>
    </p>
    
    <p>
      <label for="ckind">Tipo</label>
      <input id="ckind" name="recipeKind" minlength="4" type="text" class="inputForm" required>
    </p>
    
    <p>
      <label for="cPortion">Porciones</label>
      <input id="cPortion" name="recipePortion" minlength="4" type="text" class="inputForm" required>
    </p>
    
	
    <div class='ingredientContainer'>
	    
	    <div class='ingredienteTitle'>
			<div class='ingredientField'>Ingredientes</div>
			<div class='ingredientField'>Cantidad</div>
		</div>
	    
	    <div class='ingredientBox'>
		    <div class='ingredientField'>
			    <input id="ingredient-1" name="ingredient-1" minlength="1" type="text" class="inputForm ingredientInput" placeholder="Ingrediente 1" required>
		    </div>
		    <div class='ingredientField'>
			    <input id="quantity-1" name="quantity-1" minlength="1" type="text" class="inputForm ingredientQuantityInput" placeholder="Cantidad" required>
		    </div>
	    </div>
    </div>
    <p>
	    <input class='moreIngredient' value='Agregar Ingrediente'>
    </p>
    
    <p>
	    <label >Preparación</label>
    </p>
    <div class='stepContainer'>
	    <div class='stepBox'>
			<label for="cStep-1">Paso 1</label>
			<textarea id="cStep-1" name="cStep-1" minlength="4" type="text" class="textAreaForm" placeholder="Paso 1" required></textarea>
	    </div>
    </div>
     <p>
	    <input class='moreStep' value='Agregar Paso'>
    </p>
    
    
    <p>
      <label for="cTips">Tips</label>
      <textarea  id="cTips" name="cTips" type="text" class="textAreaForm" ></textarea>
    </p>
    
    
    <p>
	    <label class='message-form'></label>
    </p>
    
    <p>
      <input class="submit" type="submit" value="Submit">
    </p>
  </fieldset>
</form>

<script>
	//Agrega los nuevos input para los ingredientes
	var numberIngredient = 2;
	jQuery(".moreIngredient").on("click", function(){
		jQuery(".ingredientContainer").append("<div class='ingredientBox ingredientId-"+numberIngredient+"'><div class='ingredientField'><input id='ingredient-"+numberIngredient+"' name='ingredient-"+numberIngredient+"' type='text' class='inputForm ingredientInput' placeholder='Ingrediente "+numberIngredient+"'></div><div class='ingredientField'><input id='quantity-"+numberIngredient+"' name='quantity-"+numberIngredient+"' type='text' class='inputForm ingredientQuantityInput' placeholder='Cantidad'></div><div class='ingredientField boxRemove' data-remove='ingredientId-"+numberIngredient+"'>remover</div></div>");
		numberIngredient++;
	});
	
	//Agrega los nuevos textarea para los Pasos
	var numberStep = 2;
	jQuery(".moreStep").on("click", function(){
		jQuery(".stepContainer").append("<div class='stepBox stepId-"+numberStep+"'><label for='cStep-"+numberStep+"'>Paso "+numberStep+"</label><textarea id='cStep-"+numberStep+"' name='cStep-"+numberStep+"' type='text' class='textAreaForm' placeholder='Paso "+numberStep+"'></textarea><div class='stepField boxRemove' data-remove='stepId-"+numberStep+"'>remover</div></div>");
		numberStep++;
	});
	
	//Elimina un box 
	jQuery('body').on('click', '.boxRemove', function() {
	    var removeId = jQuery(this).data('remove');
		jQuery("."+removeId).remove();
	});
	
</script>


