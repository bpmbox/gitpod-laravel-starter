<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( '_id',
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
'fieldItems' => array( '_id' => array( 'import_field' ),
'account_id' => array( 'import_field1' ),
'role1' => array( 'import_field2' ),
'successful' => array( 'import_field3' ),
'failed' => array( 'import_field4' ),
'_index' => array( 'import_field5' ),
'_type' => array( 'import_field6' ),
'product_series_id' => array( 'import_field7' ),
'original_id' => array( 'import_field8' ),
'name' => array( 'import_field9' ),
'update_at' => array( 'import_field10' ),
'created' => array( 'import_field11' ),
'create_at' => array( 'import_field12' ),
'updated' => array( 'import_field13' ),
'update_at1' => array( 'import_field14' ),
'deleted' => array( 'import_field15' ),
'delete_at' => array( 'import_field16' ),
'is_deleted' => array( 'import_field17' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17' ) ),
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
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
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
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => '_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'account_id',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'role1',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'successful',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'failed',
'type' => 'import_field' ),
'import_field5' => array( 'field' => '_index',
'type' => 'import_field' ),
'import_field6' => array( 'field' => '_type',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'product_series_id',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'original_id',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'name',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'update_at',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'created',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'create_at',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'updated',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'update_at1',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'deleted',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'delete_at',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'is_deleted',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>