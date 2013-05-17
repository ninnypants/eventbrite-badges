<?php
error_reporting( E_ALL );
require 'eventbrite/Eventbrite.php';
require 'phpwkhtmltopdf/WkHtmlToPdf.php';

$wkhtmltopdf_bin = dirname( __FILE__ ) . '/wkhtmltopdf-i386';

$template_file = 'badges-4x3.php';

$keys = array(
	'app_key' => '',
	'user_key' => '',
);

$attendee_list_args = array(
	'id' => '',
	'count' => 6,
 );

$eb = new Eventbrite( $keys );

try {
	$attendees = $eb->event_list_attendees( $attendee_list_args );
	$attendees = $attendees->attendees;
} catch (Exception $e) {
	var_dump( $e );
}

$pdf = new WkHtmlToPdf( array(
	'bin' => $wkhtmltopdf_bin,
	'page-size' => 'Letter',
	'margin-top' => 0,
	'margin-right' => 0,
	'margin-bottom' => 0,
	'margin-left' => 0,
) );

// $template = file_get_contents( $template_file );
$badges = '';
$num = 1;
foreach( $attendees as $attendee ){
	// have to drop it in one more because event brite
	// thinks it makes sense to put an object as the
	// only value in an object
	$attendee = $attendee->attendee;
	// $template = str_replace( array(
	// 	'{$first_name[' . $num . ']}',
	// 	'{$last_name[' . $num . ']}',
	// 	'{$job_title[' . $num . ']}',
	// 	'{$company[' . $num . ']}',
	// ), array(
	// 	$attendee->first_name,
	// 	$attendee->last_name,
	// 	$attendee->job_title,
	// 	$attendee->company,
	// ), $template );

	if( $num % 2 || 1 === $num )
		$badges .= '<tr><td class="side-rule"></td>';
	$badges .= '<td>';
	$badges .= '<h1>' . $attendee->first_name . ' ' . $attendee->last_name . '</h1>' .
	'<h2>' . $attendee->job_title . '</h2>' .
	'<h2>' . $attendee->company . '</h2>' .
	'<img src="http://www.openwest.org/wp-content/uploads/2013/02/open-west-conference-logo.png" width="100px;">';
	$badges .= '<td>';
	if( ! $num % 2 )
		$badges .= '<td class="side-rule"></td></tr>';
	$num++;
}
ob_start();
include $template_file;
$template = ob_get_clean();

// $pdf->addPage( $template );
// if( !$pdf->send() )
// 	var_dump( $pdf->getError() );

echo $template;