<?php
function educare_customizer_repeater_register( $wp_customize ) {

	require_once( get_template_directory().'/lib/customizer-repeater-control.php' );

}
add_action( 'customize_register', 'educare_customizer_repeater_register' );

function educare_customizer_repeater_sanitize($input){
	$input_decoded = json_decode($input,true);

	if(!empty($input_decoded)) {
		foreach ($input_decoded as $boxk => $box ){
			foreach ($box as $key => $value){
				$input_decoded[$boxk][$key] = wp_kses_post( force_balance_tags( $value ) );
			}
		}
		return json_encode($input_decoded);
	}
	return $input;
}
