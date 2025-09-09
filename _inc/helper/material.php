<?php
function get_materials($data = array()) 
{
	$model = registry()->get('loader')->model('material');
	return $model->getMaterials($data);
}

function get_material_images($p_id) 
{
	$model = registry()->get('loader')->model('material');
	return $model->getMaterialImages($p_id);
}

function get_the_material($id, $field = null, $store_id = null) 
{	
	$model = registry()->get('loader')->model('material');
	$product = $model->getMaterial($id, $store_id);
	if ($field && isset($product[$field])) {
		return $product[$field];
	} elseif ($field) {
		return;
	}
	return $product;
}

function material_selling_price($p_id, $from, $to)
{	
	$product_model = registry()->get('loader')->model('material');
	return $product_model->getSellingPrice($p_id, $from, $to);
}

function material_purchase_price($p_id, $from, $to)
{	
	$product_model = registry()->get('loader')->model('material');
	return $product_model->getpurchasePrice($p_id, $from, $to);
}

function total_material_today($store_id = null)
{	
	$product_model = registry()->get('loader')->model('material');
	return $product_model->totalToday($store_id);
}

function total_material($from = null, $to = null, $store_id = null)
{	
	$product_model = registry()->get('loader')->model('material');
	return $product_model->total($from, $to, $store_id);

}

function total_trash_material()
{	
	$product_model = registry()->get('loader')->model('material');
	return $product_model->totalTrash();
}