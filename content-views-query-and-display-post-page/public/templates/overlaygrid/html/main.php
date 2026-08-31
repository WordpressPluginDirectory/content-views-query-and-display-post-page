<?php

if ( !defined( 'ABSPATH' ) ) {
	exit;
}
// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- output escaped before.
echo implode( "\n", $fields_html );
