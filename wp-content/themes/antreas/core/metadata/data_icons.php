<?php

if ( ! function_exists( 'antreas_metadata_icons' ) ) {
	function antreas_metadata_icons() {
		$icons_packs = array(
			'fontawesome' => array(
				'name'  => 'Font Awesome',
				'icons' => antreas_metadata_fontawesome(),
			),
		);
		return apply_filters( 'antreas_metadata_icons', $icons_packs );
	}
}


if ( ! function_exists( 'antreas_metadata_fontawesome' ) ) {
	function antreas_metadata_fontawesome() {
		$data = array(
			'&#xf000' => '&#xf000',
			'&#xf001' => '&#xf001',
			'&#xf002' => '&#xf002',
			'&#xf003' => '&#xf003',
			'&#xf004' => '&#xf004',
			'&#xf005' => '&#xf005',
			'&#xf006' => '&#xf006',
			'&#xf007' => '&#xf007',
			'&#xf008' => '&#xf008',
			'&#xf009' => '&#xf009',
			'&#xf00a' => '&#xf00a',
			'&#xf00b' => '&#xf00b',
			'&#xf00c' => '&#xf00c',
			'&#xf00d' => '&#xf00d',
			'&#xf00e' => '&#xf00e',
			'&#xf010' => '&#xf010',
			'&#xf011' => '&#xf011',
			'&#xf012' => '&#xf012',
			'&#xf013' => '&#xf013',
			'&#xf014' => '&#xf014',
			'&#xf015' => '&#xf015',
			'&#xf016' => '&#xf016',
			'&#xf017' => '&#xf017',
			'&#xf018' => '&#xf018',
			'&#xf019' => '&#xf019',
			'&#xf01a' => '&#xf01a',
			'&#xf01b' => '&#xf01b',
			'&#xf01c' => '&#xf01c',
			'&#xf01d' => '&#xf01d',
			'&#xf01e' => '&#xf01e',
			'&#xf021' => '&#xf021',
			'&#xf022' => '&#xf022',
			'&#xf023' => '&#xf023',
			'&#xf024' => '&#xf024',
			'&#xf025' => '&#xf025',
			'&#xf026' => '&#xf026',
			'&#xf027' => '&#xf027',
			'&#xf028' => '&#xf028',
			'&#xf029' => '&#xf029',
			'&#xf02a' => '&#xf02a',
			'&#xf02b' => '&#xf02b',
			'&#xf02c' => '&#xf02c',
			'&#xf02d' => '&#xf02d',
			'&#xf02e' => '&#xf02e',
			'&#xf02f' => '&#xf02f',
			'&#xf030' => '&#xf030',
			'&#xf031' => '&#xf031',
			'&#xf032' => '&#xf032',
			'&#xf033' => '&#xf033',
			'&#xf034' => '&#xf034',
			'&#xf035' => '&#xf035',
			'&#xf036' => '&#xf036',
			'&#xf037' => '&#xf037',
			'&#xf038' => '&#xf038',
			'&#xf039' => '&#xf039',
			'&#xf03a' => '&#xf03a',
			'&#xf03b' => '&#xf03b',
			'&#xf03c' => '&#xf03c',
			'&#xf03d' => '&#xf03d',
			'&#xf03e' => '&#xf03e',
			'&#xf040' => '&#xf040',
			'&#xf041' => '&#xf041',
			'&#xf042' => '&#xf042',
			'&#xf043' => '&#xf043',
			'&#xf044' => '&#xf044',
			'&#xf045' => '&#xf045',
			'&#xf046' => '&#xf046',
			'&#xf047' => '&#xf047',
			'&#xf048' => '&#xf048',
			'&#xf049' => '&#xf049',
			'&#xf04a' => '&#xf04a',
			'&#xf04b' => '&#xf04b',
			'&#xf04c' => '&#xf04c',
			'&#xf04d' => '&#xf04d',
			'&#xf04e' => '&#xf04e',
			'&#xf050' => '&#xf050',
			'&#xf051' => '&#xf051',
			'&#xf052' => '&#xf052',
			'&#xf053' => '&#xf053',
			'&#xf054' => '&#xf054',
			'&#xf055' => '&#xf055',
			'&#xf056' => '&#xf056',
			'&#xf057' => '&#xf057',
			'&#xf058' => '&#xf058',
			'&#xf059' => '&#xf059',
			'&#xf05a' => '&#xf05a',
			'&#xf05b' => '&#xf05b',
			'&#xf05c' => '&#xf05c',
			'&#xf05d' => '&#xf05d',
			'&#xf05e' => '&#xf05e',
			'&#xf060' => '&#xf060',
			'&#xf061' => '&#xf061',
			'&#xf062' => '&#xf062',
			'&#xf063' => '&#xf063',
			'&#xf064' => '&#xf064',
			'&#xf065' => '&#xf065',
			'&#xf066' => '&#xf066',
			'&#xf067' => '&#xf067',
			'&#xf068' => '&#xf068',
			'&#xf069' => '&#xf069',
			'&#xf06a' => '&#xf06a',
			'&#xf06b' => '&#xf06b',
			'&#xf06c' => '&#xf06c',
			'&#xf06d' => '&#xf06d',
			'&#xf06e' => '&#xf06e',
			'&#xf070' => '&#xf070',
			'&#xf071' => '&#xf071',
			'&#xf072' => '&#xf072',
			'&#xf073' => '&#xf073',
			'&#xf074' => '&#xf074',
			'&#xf075' => '&#xf075',
			'&#xf076' => '&#xf076',
			'&#xf077' => '&#xf077',
			'&#xf078' => '&#xf078',
			'&#xf079' => '&#xf079',
			'&#xf07a' => '&#xf07a',
			'&#xf07b' => '&#xf07b',
			'&#xf07c' => '&#xf07c',
			'&#xf07d' => '&#xf07d',
			'&#xf07e' => '&#xf07e',
			'&#xf080' => '&#xf080',
			'&#xf081' => '&#xf081',
			'&#xf082' => '&#xf082',
			'&#xf083' => '&#xf083',
			'&#xf084' => '&#xf084',
			'&#xf085' => '&#xf085',
			'&#xf086' => '&#xf086',
			'&#xf087' => '&#xf087',
			'&#xf088' => '&#xf088',
			'&#xf089' => '&#xf089',
			'&#xf08a' => '&#xf08a',
			'&#xf08b' => '&#xf08b',
			'&#xf08c' => '&#xf08c',
			'&#xf08d' => '&#xf08d',
			'&#xf08e' => '&#xf08e',
			'&#xf090' => '&#xf090',
			'&#xf091' => '&#xf091',
			'&#xf092' => '&#xf092',
			'&#xf093' => '&#xf093',
			'&#xf094' => '&#xf094',
			'&#xf095' => '&#xf095',
			'&#xf096' => '&#xf096',
			'&#xf097' => '&#xf097',
			'&#xf098' => '&#xf098',
			'&#xf099' => '&#xf099',
			'&#xf09a' => '&#xf09a',
			'&#xf09b' => '&#xf09b',
			'&#xf09c' => '&#xf09c',
			'&#xf09d' => '&#xf09d',
			'&#xf09e' => '&#xf09e',
			'&#xf0a0' => '&#xf0a0',
			'&#xf0a1' => '&#xf0a1',
			'&#xf0f3' => '&#xf0f3',
			'&#xf0a3' => '&#xf0a3',
			'&#xf0a4' => '&#xf0a4',
			'&#xf0a5' => '&#xf0a5',
			'&#xf0a6' => '&#xf0a6',
			'&#xf0a7' => '&#xf0a7',
			'&#xf0a8' => '&#xf0a8',
			'&#xf0a9' => '&#xf0a9',
			'&#xf0aa' => '&#xf0aa',
			'&#xf0ab' => '&#xf0ab',
			'&#xf0ac' => '&#xf0ac',
			'&#xf0ad' => '&#xf0ad',
			'&#xf0ae' => '&#xf0ae',
			'&#xf0b0' => '&#xf0b0',
			'&#xf0b1' => '&#xf0b1',
			'&#xf0b2' => '&#xf0b2',
			'&#xf0c0' => '&#xf0c0',
			'&#xf0c1' => '&#xf0c1',
			'&#xf0c2' => '&#xf0c2',
			'&#xf0c3' => '&#xf0c3',
			'&#xf0c4' => '&#xf0c4',
			'&#xf0c5' => '&#xf0c5',
			'&#xf0c6' => '&#xf0c6',
			'&#xf0c7' => '&#xf0c7',
			'&#xf0c8' => '&#xf0c8',
			'&#xf0c9' => '&#xf0c9',
			'&#xf0ca' => '&#xf0ca',
			'&#xf0cb' => '&#xf0cb',
			'&#xf0cc' => '&#xf0cc',
			'&#xf0cd' => '&#xf0cd',
			'&#xf0ce' => '&#xf0ce',
			'&#xf0d0' => '&#xf0d0',
			'&#xf0d1' => '&#xf0d1',
			'&#xf0d2' => '&#xf0d2',
			'&#xf0d3' => '&#xf0d3',
			'&#xf0d4' => '&#xf0d4',
			'&#xf0d5' => '&#xf0d5',
			'&#xf0d6' => '&#xf0d6',
			'&#xf0d7' => '&#xf0d7',
			'&#xf0d8' => '&#xf0d8',
			'&#xf0d9' => '&#xf0d9',
			'&#xf0da' => '&#xf0da',
			'&#xf0db' => '&#xf0db',
			'&#xf0dc' => '&#xf0dc',
			'&#xf0dd' => '&#xf0dd',
			'&#xf0de' => '&#xf0de',
			'&#xf0e0' => '&#xf0e0',
			'&#xf0e1' => '&#xf0e1',
			'&#xf0e2' => '&#xf0e2',
			'&#xf0e3' => '&#xf0e3',
			'&#xf0e4' => '&#xf0e4',
			'&#xf0e5' => '&#xf0e5',
			'&#xf0e6' => '&#xf0e6',
			'&#xf0e7' => '&#xf0e7',
			'&#xf0e8' => '&#xf0e8',
			'&#xf0e9' => '&#xf0e9',
			'&#xf0ea' => '&#xf0ea',
			'&#xf0eb' => '&#xf0eb',
			'&#xf0ec' => '&#xf0ec',
			'&#xf0ed' => '&#xf0ed',
			'&#xf0ee' => '&#xf0ee',
			'&#xf0f0' => '&#xf0f0',
			'&#xf0f1' => '&#xf0f1',
			'&#xf0f2' => '&#xf0f2',
			'&#xf0a2' => '&#xf0a2',
			'&#xf0f4' => '&#xf0f4',
			'&#xf0f5' => '&#xf0f5',
			'&#xf0f6' => '&#xf0f6',
			'&#xf0f7' => '&#xf0f7',
			'&#xf0f8' => '&#xf0f8',
			'&#xf0f9' => '&#xf0f9',
			'&#xf0fa' => '&#xf0fa',
			'&#xf0fb' => '&#xf0fb',
			'&#xf0fc' => '&#xf0fc',
			'&#xf0fd' => '&#xf0fd',
			'&#xf0fe' => '&#xf0fe',
			'&#xf100' => '&#xf100',
			'&#xf101' => '&#xf101',
			'&#xf102' => '&#xf102',
			'&#xf103' => '&#xf103',
			'&#xf104' => '&#xf104',
			'&#xf105' => '&#xf105',
			'&#xf106' => '&#xf106',
			'&#xf107' => '&#xf107',
			'&#xf108' => '&#xf108',
			'&#xf109' => '&#xf109',
			'&#xf10a' => '&#xf10a',
			'&#xf10b' => '&#xf10b',
			'&#xf10c' => '&#xf10c',
			'&#xf10d' => '&#xf10d',
			'&#xf10e' => '&#xf10e',
			'&#xf110' => '&#xf110',
			'&#xf111' => '&#xf111',
			'&#xf112' => '&#xf112',
			'&#xf113' => '&#xf113',
			'&#xf114' => '&#xf114',
			'&#xf115' => '&#xf115',
			'&#xf118' => '&#xf118',
			'&#xf119' => '&#xf119',
			'&#xf11a' => '&#xf11a',
			'&#xf11b' => '&#xf11b',
			'&#xf11c' => '&#xf11c',
			'&#xf11d' => '&#xf11d',
			'&#xf11e' => '&#xf11e',
			'&#xf120' => '&#xf120',
			'&#xf121' => '&#xf121',
			'&#xf122' => '&#xf122',
			'&#xf123' => '&#xf123',
			'&#xf124' => '&#xf124',
			'&#xf125' => '&#xf125',
			'&#xf126' => '&#xf126',
			'&#xf127' => '&#xf127',
			'&#xf128' => '&#xf128',
			'&#xf129' => '&#xf129',
			'&#xf12a' => '&#xf12a',
			'&#xf12b' => '&#xf12b',
			'&#xf12c' => '&#xf12c',
			'&#xf12d' => '&#xf12d',
			'&#xf12e' => '&#xf12e',
			'&#xf130' => '&#xf130',
			'&#xf131' => '&#xf131',
			'&#xf132' => '&#xf132',
			'&#xf133' => '&#xf133',
			'&#xf134' => '&#xf134',
			'&#xf135' => '&#xf135',
			'&#xf136' => '&#xf136',
			'&#xf137' => '&#xf137',
			'&#xf138' => '&#xf138',
			'&#xf139' => '&#xf139',
			'&#xf13a' => '&#xf13a',
			'&#xf13b' => '&#xf13b',
			'&#xf13c' => '&#xf13c',
			'&#xf13d' => '&#xf13d',
			'&#xf13e' => '&#xf13e',
			'&#xf140' => '&#xf140',
			'&#xf141' => '&#xf141',
			'&#xf142' => '&#xf142',
			'&#xf143' => '&#xf143',
			'&#xf144' => '&#xf144',
			'&#xf145' => '&#xf145',
			'&#xf146' => '&#xf146',
			'&#xf147' => '&#xf147',
			'&#xf148' => '&#xf148',
			'&#xf149' => '&#xf149',
			'&#xf14a' => '&#xf14a',
			'&#xf14b' => '&#xf14b',
			'&#xf14c' => '&#xf14c',
			'&#xf14d' => '&#xf14d',
			'&#xf14e' => '&#xf14e',
			'&#xf150' => '&#xf150',
			'&#xf151' => '&#xf151',
			'&#xf152' => '&#xf152',
			'&#xf153' => '&#xf153',
			'&#xf154' => '&#xf154',
			'&#xf155' => '&#xf155',
			'&#xf156' => '&#xf156',
			'&#xf157' => '&#xf157',
			'&#xf158' => '&#xf158',
			'&#xf159' => '&#xf159',
			'&#xf15a' => '&#xf15a',
			'&#xf15b' => '&#xf15b',
			'&#xf15c' => '&#xf15c',
			'&#xf15d' => '&#xf15d',
			'&#xf15e' => '&#xf15e',
			'&#xf160' => '&#xf160',
			'&#xf161' => '&#xf161',
			'&#xf162' => '&#xf162',
			'&#xf163' => '&#xf163',
			'&#xf164' => '&#xf164',
			'&#xf165' => '&#xf165',
			'&#xf166' => '&#xf166',
			'&#xf167' => '&#xf167',
			'&#xf168' => '&#xf168',
			'&#xf169' => '&#xf169',
			'&#xf16a' => '&#xf16a',
			'&#xf16b' => '&#xf16b',
			'&#xf16c' => '&#xf16c',
			'&#xf16d' => '&#xf16d',
			'&#xf16e' => '&#xf16e',
			'&#xf170' => '&#xf170',
			'&#xf171' => '&#xf171',
			'&#xf172' => '&#xf172',
			'&#xf173' => '&#xf173',
			'&#xf174' => '&#xf174',
			'&#xf175' => '&#xf175',
			'&#xf176' => '&#xf176',
			'&#xf177' => '&#xf177',
			'&#xf178' => '&#xf178',
			'&#xf179' => '&#xf179',
			'&#xf17a' => '&#xf17a',
			'&#xf17b' => '&#xf17b',
			'&#xf17c' => '&#xf17c',
			'&#xf17d' => '&#xf17d',
			'&#xf17e' => '&#xf17e',
			'&#xf180' => '&#xf180',
			'&#xf181' => '&#xf181',
			'&#xf182' => '&#xf182',
			'&#xf183' => '&#xf183',
			'&#xf184' => '&#xf184',
			'&#xf185' => '&#xf185',
			'&#xf186' => '&#xf186',
			'&#xf187' => '&#xf187',
			'&#xf188' => '&#xf188',
			'&#xf189' => '&#xf189',
			'&#xf18a' => '&#xf18a',
			'&#xf18b' => '&#xf18b',
			'&#xf18c' => '&#xf18c',
			'&#xf18d' => '&#xf18d',
			'&#xf18e' => '&#xf18e',
			'&#xf190' => '&#xf190',
			'&#xf191' => '&#xf191',
			'&#xf192' => '&#xf192',
			'&#xf193' => '&#xf193',
			'&#xf194' => '&#xf194',
			'&#xf195' => '&#xf195',
			'&#xf196' => '&#xf196',
			'&#xf197' => '&#xf197',
			'&#xf198' => '&#xf198',
			'&#xf199' => '&#xf199',
			'&#xf19a' => '&#xf19a',
			'&#xf19b' => '&#xf19b',
			'&#xf19c' => '&#xf19c',
			'&#xf19d' => '&#xf19d',
			'&#xf19e' => '&#xf19e',
			'&#xf1a0' => '&#xf1a0',
			'&#xf1a1' => '&#xf1a1',
			'&#xf1a2' => '&#xf1a2',
			'&#xf1a3' => '&#xf1a3',
			'&#xf1a4' => '&#xf1a4',
			'&#xf1a5' => '&#xf1a5',
			'&#xf1a6' => '&#xf1a6',
			'&#xf1a7' => '&#xf1a7',
			'&#xf1a8' => '&#xf1a8',
			'&#xf1a9' => '&#xf1a9',
			'&#xf1aa' => '&#xf1aa',
			'&#xf1ab' => '&#xf1ab',
			'&#xf1ac' => '&#xf1ac',
			'&#xf1ad' => '&#xf1ad',
			'&#xf1ae' => '&#xf1ae',
			'&#xf1b0' => '&#xf1b0',
			'&#xf1b1' => '&#xf1b1',
			'&#xf1b2' => '&#xf1b2',
			'&#xf1b3' => '&#xf1b3',
			'&#xf1b4' => '&#xf1b4',
			'&#xf1b5' => '&#xf1b5',
			'&#xf1b6' => '&#xf1b6',
			'&#xf1b7' => '&#xf1b7',
			'&#xf1b8' => '&#xf1b8',
			'&#xf1b9' => '&#xf1b9',
			'&#xf1ba' => '&#xf1ba',
			'&#xf1bb' => '&#xf1bb',
			'&#xf1bc' => '&#xf1bc',
			'&#xf1bd' => '&#xf1bd',
			'&#xf1be' => '&#xf1be',
			'&#xf1c0' => '&#xf1c0',
			'&#xf1c1' => '&#xf1c1',
			'&#xf1c2' => '&#xf1c2',
			'&#xf1c3' => '&#xf1c3',
			'&#xf1c4' => '&#xf1c4',
			'&#xf1c5' => '&#xf1c5',
			'&#xf1c6' => '&#xf1c6',
			'&#xf1c7' => '&#xf1c7',
			'&#xf1c8' => '&#xf1c8',
			'&#xf1c9' => '&#xf1c9',
			'&#xf1ca' => '&#xf1ca',
			'&#xf1cb' => '&#xf1cb',
			'&#xf1cc' => '&#xf1cc',
			'&#xf1cd' => '&#xf1cd',
			'&#xf1ce' => '&#xf1ce',
			'&#xf1d0' => '&#xf1d0',
			'&#xf1d1' => '&#xf1d1',
			'&#xf1d2' => '&#xf1d2',
			'&#xf1d3' => '&#xf1d3',
			'&#xf1d4' => '&#xf1d4',
			'&#xf1d5' => '&#xf1d5',
			'&#xf1d6' => '&#xf1d6',
			'&#xf1d7' => '&#xf1d7',
			'&#xf1d8' => '&#xf1d8',
			'&#xf1d9' => '&#xf1d9',
			'&#xf1da' => '&#xf1da',
			'&#xf1db' => '&#xf1db',
			'&#xf1dc' => '&#xf1dc',
			'&#xf1dd' => '&#xf1dd',
			'&#xf1de' => '&#xf1de',
			'&#xf1e0' => '&#xf1e0',
			'&#xf1e1' => '&#xf1e1',
			'&#xf1e2' => '&#xf1e2',
			'&#xf1f0' => '&#xf1f0',
			'&#xf1f1' => '&#xf1f1',
			'&#xf1f2' => '&#xf1f2',
			'&#xf1f3' => '&#xf1f3',
			'&#xf1f4' => '&#xf1f4',
			'&#xf1f5' => '&#xf1f5',
			'&#xf1f6' => '&#xf1f6',
			'&#xf1f7' => '&#xf1f7',
			'&#xf1f8' => '&#xf1f8',
			'&#xf1f9' => '&#xf1f9',
			'&#xf1fa' => '&#xf1fa',
			'&#xf1fb' => '&#xf1fb',
			'&#xf1fc' => '&#xf1fc',
			'&#xf1fd' => '&#xf1fd',
			'&#xf1fe' => '&#xf1fe',
			'&#xf200' => '&#xf200',
			'&#xf201' => '&#xf201',
			'&#xf202' => '&#xf202',
			'&#xf203' => '&#xf203',
			'&#xf204' => '&#xf204',
			'&#xf205' => '&#xf205',
			'&#xf206' => '&#xf206',
			'&#xf207' => '&#xf207',
			'&#xf208' => '&#xf208',
			'&#xf209' => '&#xf209',
			'&#xf20a' => '&#xf20a',
			'&#xf20b' => '&#xf20b',
			'&#xf20c' => '&#xf20c',
			'&#xf20d' => '&#xf20d',
			'&#xf20e' => '&#xf20e',
			'&#xf210' => '&#xf210',
			'&#xf211' => '&#xf211',
			'&#xf212' => '&#xf212',
			'&#xf213' => '&#xf213',
			'&#xf214' => '&#xf214',
			'&#xf215' => '&#xf215',
			'&#xf216' => '&#xf216',
			'&#xf217' => '&#xf217',
			'&#xf218' => '&#xf218',
			'&#xf219' => '&#xf219',
			'&#xf21a' => '&#xf21a',
			'&#xf21b' => '&#xf21b',
			'&#xf21c' => '&#xf21c',
			'&#xf21d' => '&#xf21d',
			'&#xf21e' => '&#xf21e',
			'&#xf221' => '&#xf221',
			'&#xf222' => '&#xf222',
			'&#xf223' => '&#xf223',
			'&#xf224' => '&#xf224',
			'&#xf225' => '&#xf225',
			'&#xf226' => '&#xf226',
			'&#xf227' => '&#xf227',
			'&#xf228' => '&#xf228',
			'&#xf229' => '&#xf229',
			'&#xf22a' => '&#xf22a',
			'&#xf22b' => '&#xf22b',
			'&#xf22c' => '&#xf22c',
			'&#xf230' => '&#xf230',
			'&#xf231' => '&#xf231',
			'&#xf232' => '&#xf232',
			'&#xf233' => '&#xf233',
			'&#xf234' => '&#xf234',
			'&#xf235' => '&#xf235',
			'&#xf236' => '&#xf236',
			'&#xf237' => '&#xf237',
			'&#xf238' => '&#xf238',
			'&#xf239' => '&#xf239',
			'&#xf23a' => '&#xf23a',
		);

		return $data;
	}
}