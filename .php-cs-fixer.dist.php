<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__,
    ])
    // ->ignoreDotFiles(false)
    // ->ignoreVCSIgnored(false)
;

$config = new PhpCsFixer\Config();

return $config
    ->setRules([
        '@PSR12' => true,
        'no_unused_imports' => true,
        'trailing_comma_in_multiline' => true,
        'declare_strict_types' => true,
    ])
    ->setFinder($finder);
