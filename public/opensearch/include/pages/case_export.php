<?php
			$optionsArray = array( 'totals' => array( '_id' => array( 'totalsType' => '' ),
'account_id' => array( 'totalsType' => '' ),
'role1' => array( 'totalsType' => '' ),
'successful' => array( 'totalsType' => '' ),
'failed' => array( 'totalsType' => '' ),
'_index' => array( 'totalsType' => '' ),
'_type' => array( 'totalsType' => '' ),
'product_series_id' => array( 'totalsType' => '' ),
'original_id' => array( 'totalsType' => '' ),
'name' => array( 'totalsType' => '' ),
'update_at' => array( 'totalsType' => '' ),
'created' => array( 'totalsType' => '' ),
'create_at' => array( 'totalsType' => '' ),
'updated' => array( 'totalsType' => '' ),
'update_at1' => array( 'totalsType' => '' ),
'deleted' => array( 'totalsType' => '' ),
'delete_at' => array( 'totalsType' => '' ),
'is_deleted' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( '_id',
'account_id',
'role1',
'successful',
'failed',
'_index',
'_type',
'product_series_id',
'original_id',
'name',
'update_at',
'created',
'create_at',
'updated',
'update_at1',
'deleted',
'delete_at',
'is_deleted' ),
'exportFields' => array( '_id',
'account_id',
'role1',
'successful',
'failed',
'_index',
'_type',
'product_series_id',
'original_id',
'name',
'update_at',
'created',
'create_at',
'updated',
'update_at1',
'deleted',
'delete_at',
'is_deleted' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( '_id' => array( 'export_field' ),
'account_id' => array( 'export_field1' ),
'role1' => array( 'export_field2' ),
'successful' => array( 'export_field3' ),
'failed' => array( 'export_field4' ),
'_index' => array( 'export_field5' ),
'_type' => array( 'export_field6' ),
'product_series_id' => array( 'export_field7' ),
'original_id' => array( 'export_field8' ),
'name' => array( 'export_field9' ),
'update_at' => array( 'export_field10' ),
'created' => array( 'export_field11' ),
'create_at' => array( 'export_field12' ),
'updated' => array( 'export_field13' ),
'update_at1' => array( 'export_field14' ),
'deleted' => array( 'export_field15' ),
'delete_at' => array( 'export_field16' ),
'is_deleted' => array( 'export_field17' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_field14' => 'grid',
'export_field15' => 'grid',
'export_field16' => 'grid',
'export_field17' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field15',
'export_field16',
'export_field17' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => '_id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'account_id',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'role1',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'successful',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'failed',
'type' => 'export_field' ),
'export_field5' => array( 'field' => '_index',
'type' => 'export_field' ),
'export_field6' => array( 'field' => '_type',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'product_series_id',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'original_id',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'name',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'update_at',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'created',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'create_at',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'updated',
'type' => 'export_field' ),
'export_field14' => array( 'field' => 'update_at1',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'deleted',
'type' => 'export_field' ),
'export_field16' => array( 'field' => 'delete_at',
'type' => 'export_field' ),
'export_field17' => array( 'field' => 'is_deleted',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>