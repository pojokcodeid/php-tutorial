<?php

#fungsi dengan 2 parameter berurut
function find($needle, $haystack)
{
    return strpos($haystack, $needle);
}

echo find('PHP', 'is the best PHP language');
echo '<br>';
echo find(
    'PHP',
    // needle
    'is the best PHP language' // hystack
);

echo '<br>';
echo '<hr>';
echo find(
    haystack: 'is the best PHP language',
    needle: 'PHP'
);

function create_anchor(
    $text,
    $href = '#',
    $title = '',
    $target = '_self',
) {
    $href = $href ? sprintf('href="%s"', $href) : '';
    $title = $title ? sprintf('title="%s"', $title) : '';
    $target = $target ? sprintf('target="%s"', $target) : '';

    return "<a $href $title $target>$text</a>";
}

$link = create_anchor(
    'PHP Tutorial',
    'http://www.pojokcode.com/',
    '',
    '_blank'
);

echo '<br>';
echo $link;
echo '<br>';

# untuk mengatasi data blank tanpa menuliskan spasi kosong
$link = create_anchor(
    text: 'PHP Tutorial 2',
    href: 'http://www.pojokcode.net/',
    target: '_blank'
);
echo $link;

# atau mengunakan sebagian juga bsia 
$link = create_anchor(
    'PHP Tutorial 2',
    'http://www.pojokcode.net/',
    target: '_blank'
);
echo '<br>';
echo $link;