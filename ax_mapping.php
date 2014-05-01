<?php

function ax_get_postscript_cname_map($encoding) {
	$encoding = str_replace('-', '', $encoding);
	$encoding = strtolower($encoding);
	static $cache = array(
		'winansiencoding' => array(
			32 => 'space',		33 => 'exclam',		34 => 'quotedbl',	35 => 'numbersign',	
			36 => 'dollar',		37 => 'percent',	38 => 'ampersand',	39 => 'quotesingle',	
			40 => 'parenleft',	41 => 'parenright',	42 => 'asterisk',	43 => 'plus',		
			44 => 'comma',		45 => 'hyphen',		46 => 'period',		47 => 'slash',		
			48 => 'zero',		49 => 'one',		50 => 'two',		51 => 'three',		
			52 => 'four',		53 => 'five',		54 => 'six',		55 => 'seven',		
			56 => 'eight',		57 => 'nine',		58 => 'colon',		59 => 'semicolon',	
			60 => 'less',		61 => 'equal',		62 => 'greater',	63 => 'question',	
			64 => 'at',		65 => 'A',		66 => 'B',		67 => 'C',		
			68 => 'D',		69 => 'E',		70 => 'F',		71 => 'G',		
			72 => 'H',		73 => 'I',		74 => 'J',		75 => 'K',		
			76 => 'L',		77 => 'M',		78 => 'N',		79 => 'O',		
			80 => 'P',		81 => 'Q',		82 => 'R',		83 => 'S',		
			84 => 'T',		85 => 'U',		86 => 'V',		87 => 'W',		
			88 => 'X',		89 => 'Y',		90 => 'Z',		91 => 'bracketleft',	
			92 => 'backslash',	93 => 'bracketright',	94 => 'asciicircum',	95 => 'underscore',	
			96 => 'grave',		97 => 'a',		98 => 'b',		99 => 'c',		
			100 => 'd',		101 => 'e',		102 => 'f',		103 => 'g',		
			104 => 'h',		105 => 'i',		106 => 'j',		107 => 'k',		
			108 => 'l',		109 => 'm',		110 => 'n',		111 => 'o',		
			112 => 'p',		113 => 'q',		114 => 'r',		115 => 's',		
			116 => 't',		117 => 'u',		118 => 'v',		119 => 'w',		
			120 => 'x',		121 => 'y',		122 => 'z',		123 => 'braceleft',	
			124 => 'bar',		125 => 'braceright',	126 => 'asciitilde',	128 => 'Euro',		
			130 => 'quotesinglbase',131 => 'florin',	132 => 'quotedblbase',	133 => 'ellipsis',	
			134 => 'dagger',	135 => 'daggerdbl',	136 => 'circumflex',	137 => 'perthousand',	
			138 => 'Scaron',	139 => 'guilsinglleft',	140 => 'OE',		142 => 'Zcaron',	
			145 => 'quoteleft',	146 => 'quoteright',	147 => 'quotedblleft',	148 => 'quotedblright',	
			150 => 'endash',	151 => 'emdash',	152 => 'tilde',		153 => 'trademark',	
			154 => 'scaron',	155 => 'guilsinglright',156 => 'oe',		158 => 'zcaron',	
			159 => 'Ydieresis',	161 => 'exclamdown',	162 => 'cent',		163 => 'sterling',	
			164 => 'currency1',	165 => 'yen',		166 => 'brokenbar',	167 => 'section',	
			168 => 'dieresis',	169 => 'copyright',	170 => 'ordfeminine',	171 => 'guillemotleft',	
			172 => 'logicalnot',	174 => 'registered',	175 => 'macron',	176 => 'degree',	
			177 => 'plusminus',	178 => 'twosuperior',	179 => 'threesuperior',	180 => 'acute',		
			181 => 'mu',		182 => 'paragraph',	183 => 'periodcentered',184 => 'cedilla',	
			185 => 'onesuperior',	186 => 'ordmasculine',	187 => 'guillemotright',188 => 'onequarter',	
			189 => 'onehalf',	190 => 'threequarters',	191 => 'questiondown',	192 => 'Agrave',	
			193 => 'Aacute',	194 => 'Acircumflex',	195 => 'Atilde',	196 => 'Adieresis',	
			197 => 'Aring',		198 => 'AE',		199 => 'Ccedilla',	200 => 'Egrave',	
			201 => 'Eacute',	202 => 'Ecircumflex',	203 => 'Edieresis',	204 => 'Igrave',	
			205 => 'Iacute',	206 => 'Icircumflex',	207 => 'Idieresis',	208 => 'Eth',		
			209 => 'Ntilde',	210 => 'Ograve',	211 => 'Oacute',	212 => 'Ocircumflex',	
			213 => 'Otilde',	214 => 'Odieresis',	215 => 'multiply',	216 => 'Oslash',	
			217 => 'Ugrave',	218 => 'Uacute',	219 => 'Ucircumflex',	220 => 'Udieresis',	
			221 => 'Yacute',	222 => 'Thorn',		223 => 'germandbls',	224 => 'agrave',	
			225 => 'aacute',	226 => 'acircumflex',	227 => 'atilde',	228 => 'adieresis',	
			229 => 'aring',		230 => 'ae',		231 => 'ccedilla',	232 => 'egrave',	
			233 => 'eacute',	234 => 'ecircumflex',	235 => 'edieresis',	236 => 'igrave',	
			237 => 'iacute',	238 => 'icircumflex',	239 => 'idieresis',	240 => 'eth',		
			241 => 'ntilde',	242 => 'ograve',	243 => 'oacute',	244 => 'ocircumflex',	
			245 => 'otilde',	246 => 'odieresis',	247 => 'divide',	248 => 'oslash',	
			249 => 'ugrave',	250 => 'uacute',	251 => 'ucircumflex',	252 => 'udieresis',	
			253 => 'yacute',	254 => 'thorn',		255 => 'ydieresis'),
	);
	$map = $cache[$encoding];
	if(!$map) {
		$dat_path = AX_FILE_ROOT . "/{$encoding}_ps_name.dat";
		$data = file_get_contents($dat_path);
		if($map = unserialize($data)) {
			$cache[$encoding] = $map;
		}
	}
	return $map;
}

function ax_get_unicode_map($encoding) {
	$encoding = str_replace('-', '', $encoding);
	$encoding = strtolower($encoding);
	static $cache = array(
		'winansiencoding' => array(
			0x20 => 0x20,	0x21 => 0x21,	0x22 => 0x22,	0x23 => 0x23,	
			0x24 => 0x24,	0x25 => 0x25,	0x26 => 0x26,	0x27 => 0x27,	
			0x28 => 0x28,	0x29 => 0x29,	0x2a => 0x2a,	0x2b => 0x2b,	
			0x2c => 0x2c,	0x2d => 0x2d,	0x2e => 0x2e,	0x2f => 0x2f,	
			0x30 => 0x30,	0x31 => 0x31,	0x32 => 0x32,	0x33 => 0x33,	
			0x34 => 0x34,	0x35 => 0x35,	0x36 => 0x36,	0x37 => 0x37,	
			0x38 => 0x38,	0x39 => 0x39,	0x3a => 0x3a,	0x3b => 0x3b,	
			0x3c => 0x3c,	0x3d => 0x3d,	0x3e => 0x3e,	0x3f => 0x3f,	
			0x40 => 0x40,	0x41 => 0x41,	0x42 => 0x42,	0x43 => 0x43,	
			0x44 => 0x44,	0x45 => 0x45,	0x46 => 0x46,	0x47 => 0x47,	
			0x48 => 0x48,	0x49 => 0x49,	0x4a => 0x4a,	0x4b => 0x4b,	
			0x4c => 0x4c,	0x4d => 0x4d,	0x4e => 0x4e,	0x4f => 0x4f,	
			0x50 => 0x50,	0x51 => 0x51,	0x52 => 0x52,	0x53 => 0x53,	
			0x54 => 0x54,	0x55 => 0x55,	0x56 => 0x56,	0x57 => 0x57,	
			0x58 => 0x58,	0x59 => 0x59,	0x5a => 0x5a,	0x5b => 0x5b,	
			0x5c => 0x5c,	0x5d => 0x5d,	0x5e => 0x5e,	0x5f => 0x5f,	
			0x60 => 0x60,	0x61 => 0x61,	0x62 => 0x62,	0x63 => 0x63,	
			0x64 => 0x64,	0x65 => 0x65,	0x66 => 0x66,	0x67 => 0x67,	
			0x68 => 0x68,	0x69 => 0x69,	0x6a => 0x6a,	0x6b => 0x6b,	
			0x6c => 0x6c,	0x6d => 0x6d,	0x6e => 0x6e,	0x6f => 0x6f,	
			0x70 => 0x70,	0x71 => 0x71,	0x72 => 0x72,	0x73 => 0x73,	
			0x74 => 0x74,	0x75 => 0x75,	0x76 => 0x76,	0x77 => 0x77,	
			0x78 => 0x78,	0x79 => 0x79,	0x7a => 0x7a,	0x7b => 0x7b,	
			0x7c => 0x7c,	0x7d => 0x7d,	0x7e => 0x7e,	0x80 => 0x20ac,	
			0x82 => 0x201a,	0x83 => 0x192,	0x84 => 0x201e,	0x85 => 0x2026,	
			0x86 => 0x2020,	0x87 => 0x2021,	0x88 => 0x2c6,	0x89 => 0x2030,	
			0x8a => 0x160,	0x8b => 0x2039,	0x8c => 0x152,	0x8e => 0x17d,	
			0x91 => 0x2018,	0x92 => 0x2019,	0x93 => 0x201c,	0x94 => 0x201d,	
			0x96 => 0x2013,	0x97 => 0x2014,	0x98 => 0x2dc,	0x99 => 0x2122,	
			0x9a => 0x161,	0x9b => 0x203a,	0x9c => 0x153,	0x9e => 0x17e,	
			0x9f => 0x178,	0xa1 => 0xa1,	0xa2 => 0xa2,	0xa3 => 0xa3,	
			0xa4 => 0xa4,	0xa5 => 0xa5,	0xa6 => 0xa6,	0xa7 => 0xa7,	
			0xa8 => 0xa8,	0xa9 => 0xa9,	0xaa => 0xaa,	0xab => 0xab,	
			0xac => 0xac,	0xae => 0xae,	0xaf => 0xaf,	0xb0 => 0xb0,	
			0xb1 => 0xb1,	0xb2 => 0xb2,	0xb3 => 0xb3,	0xb4 => 0xb4,	
			0xb5 => 0xb5,	0xb6 => 0xb6,	0xb7 => 0xb7,	0xb8 => 0xb8,	
			0xb9 => 0xb9,	0xba => 0xba,	0xbb => 0xbb,	0xbc => 0xbc,	
			0xbd => 0xbd,	0xbe => 0xbe,	0xbf => 0xbf,	0xc0 => 0xc0,	
			0xc1 => 0xc1,	0xc2 => 0xc2,	0xc3 => 0xc3,	0xc4 => 0xc4,	
			0xc5 => 0xc5,	0xc6 => 0xc6,	0xc7 => 0xc7,	0xc8 => 0xc8,	
			0xc9 => 0xc9,	0xca => 0xca,	0xcb => 0xcb,	0xcc => 0xcc,	
			0xcd => 0xcd,	0xce => 0xce,	0xcf => 0xcf,	0xd0 => 0xd0,	
			0xd1 => 0xd1,	0xd2 => 0xd2,	0xd3 => 0xd3,	0xd4 => 0xd4,	
			0xd5 => 0xd5,	0xd6 => 0xd6,	0xd7 => 0xd7,	0xd8 => 0xd8,	
			0xd9 => 0xd9,	0xda => 0xda,	0xdb => 0xdb,	0xdc => 0xdc,	
			0xdd => 0xdd,	0xde => 0xde,	0xdf => 0xdf,	0xe0 => 0xe0,	
			0xe1 => 0xe1,	0xe2 => 0xe2,	0xe3 => 0xe3,	0xe4 => 0xe4,	
			0xe5 => 0xe5,	0xe6 => 0xe6,	0xe7 => 0xe7,	0xe8 => 0xe8,	
			0xe9 => 0xe9,	0xea => 0xea,	0xeb => 0xeb,	0xec => 0xec,	
			0xed => 0xed,	0xee => 0xee,	0xef => 0xef,	0xf0 => 0xf0,	
			0xf1 => 0xf1,	0xf2 => 0xf2,	0xf3 => 0xf3,	0xf4 => 0xf4,	
			0xf5 => 0xf5,	0xf6 => 0xf6,	0xf7 => 0xf7,	0xf8 => 0xf8,	
			0xf9 => 0xf9,	0xfa => 0xfa,	0xfb => 0xfb,	0xfc => 0xfc,	
			0xfd => 0xfd,	0xfe => 0xfe,	0xff => 0xff ),
	);
	$map = $cache[$encoding];
	if(!$map) {
		$dat_path = AX_FILE_ROOT . "/{$encoding}_unicode.dat";
		$data = file_get_contents($dat_path);
		if($map = unserialize($data)) {
			$cache[$encoding] = $map;
		}
	}
	return $map;
}

function ax_is_predefined_encoding($encoding) {
	static $names = array('StandardEncoding', 'MacRomanEncoding', 'WinAnsiEncoding');
	return in_array($encoding, $names);
}

?>