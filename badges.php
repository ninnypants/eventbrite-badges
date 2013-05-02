<?php
require 'eventbrite/Eventbrite.php';
require 'wkhtmltopdf/WkHtmlToPdf.php';

$wkhtmltopdf_bin = 'wkhtmltopdf-i386';

$keys = array(
	'app_key' => '',
	'user_key' => '',
);

$attendee_list_args = array(
	'id' => '',
	'count' => 6,
 );

$eb = new Eventbrite( $keys );

$attendees = $eb->event_listAttendees( $attendee_list_args );