<?php

$finder = PhpCsFixer\Finder::create()
    ->notPath(['vendor' , 'bootstrap/cache' , 'storage/framework'])
    ->in(getcwd())
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$config = new PhpCsFixer\Config();

return $config->setRules([
    '@PSR12' => true,
])->setFinder($finder);