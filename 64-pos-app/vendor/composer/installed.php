<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'e0c71e25589854a9e7f9e380074caa814fc9e038',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'e0c71e25589854a9e7f9e380074caa814fc9e038',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'components/font-awesome' => array(
            'pretty_version' => '6.4.2',
            'version' => '6.4.2.0',
            'reference' => 'f70143b8251916dbb207940f06fcb14d5f91e2c6',
            'type' => 'component',
            'install_path' => __DIR__ . '/../components/font-awesome',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v5.3.1',
            'version' => '5.3.1.0',
            'reference' => '2a1bf52b73fc9a97f6fef75aa1b29b3e9f0288b3',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v5.3.1',
            ),
        ),
    ),
);
