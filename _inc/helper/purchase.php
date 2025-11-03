<?php
function  get_purchases($type, $store_id = null, $limit = 10000000000000)
{
    $purchase_model = registry()->get('loader')->model('purchase');
    return $purchase_model->getInvoices($type, $store_id, $limit);
}

function get_purchase_items_html($invoice_id, $store_id = null)
{
    $purchase_model = registry()->get('loader')->model('purchase');
    return $purchase_model->getPurchaseItemsHTML($invoice_id, $store_id);
}