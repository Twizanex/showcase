<?php

echo elgg_view('page/elements/owner_block');

echo elgg_view('page/elements/comments_block', array(
	'subtypes' => 'showcase',
	'owner_guid' => elgg_get_page_owner_guid(),
));

echo elgg_view('page/elements/tagcloud_block', array(
	'subtypes' => 'showcase',
	'owner_guid' => elgg_get_page_owner_guid(),
));