<?php




add_action( 'gform_after_submission', 'after_submission', 10, 2 );

function after_submission($entry, $form) {

	global $wpdb;
	$table_name = $wpdb->prefix . 'cleaners';

	//missing travel method id[9] actually [9.1, 9.2, etc..] based on how many checkboxes
	// loop through them and find which is not hull
	
	//wp_mail('developer@buzzgraphicdesign.co.uk', 'Debug', print_r($entry, true));
	$wpdb->insert($table_name, array(
		'first_name' => rgar( $entry, '1' ),
		'last_name' => rgar( $entry, '2'),
		'email' => rgar( $entry, '4' ),
		'tel' => rgar( $entry, '5' ),
		'town' => rgar( $entry, '6' ),
		'postcode' => rgar( $entry, '7' ),
		'traveling_method' => rgar( $entry, '9' ),
		'preferred_contact_method' => rgar( $entry, '11' ),
		'form_id' => rgar( $entry, 'form_id' ),
	));
}



/*


$submitted_data = GFFormsModel::get_leads(1);


$f_name = 1;
$l_name = 2;
$email = 4;
$tel = 5;
$town = 6;
$postcode = 7;
$travel_to_work = 9;
$perferred_contact_method = 11;

$new_cleaner_data_array = [];

foreach ($submitted_data as $key => $value) {
	
	foreach ($value as $field_id => $form_data) {
		
		switch ($field_id) {
			case $f_name:				
				$wpdb->insert($table_name, array(
					'first_name' => $form_data
				));
				break;
			case $l_name:
				$new_cleaner_data_array['last_name'] = $form_data;
				break;
			case $email:
				$new_cleaner_data_array['email'] = $form_data;
				break;
			case $tel:
				$new_cleaner_data_array['tel'] = $form_data;
				break;
			case $town:
				$new_cleaner_data_array['town'] = $form_data;
				break;
			case $postcode:
				$new_cleaner_data_array['postcode'] = $form_data;
				break;
			case $travel_to_work:
				$new_cleaner_data_array['traveling'] = $form_data;
				break;
			case $perferred_contact_method:
				$new_cleaner_data_array['contact_method'] = $form_data;
				break;
			case 'form_id':
				$new_cleaner_data_array['form_id'] = $form_data;
				break;
			default:
				# code...
				break;
		}	
	}
}





































