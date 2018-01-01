<?php
return [
	'users' => [
		['name' => 'Home', 'url' => '/', 'icon' => 'fa-users'],
	],

	'admin' => [
		['name' => 'Home', 'url' => '/', 'icon' => 'fa-users'],
		['name' => 'Settings', 'items' => [
			['name' => 'Sectors', 'url' => 'sectors', 'icon' => 'fa-link'],
			['name' => 'Qualifications', 'url' => 'qualifications', 'icon' => 'fa-link'],
			['name' => 'Competencies', 'url' => 'competencies', 'icon' => 'fa-link'],
		], 'icon' => 'fa-link'],
		['name' => 'Address', 'items' => [
			['name' => 'Municipalities', 'url' => 'municipalities', 'icon' => 'fa-link'],
			['name' => 'Provinces', 'url' => 'provinces', 'icon' => 'fa-link'],
		], 'icon' => 'fa-link'],
	],
];