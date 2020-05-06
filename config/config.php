<?php



use ClassPreloader\ClassLoader;

$config = ClassLoader::getIncludes(function (ClassLoader $loader) {
    $loader->register();
    require dirname(__DIR__).'/vendor/autoload.php';
    require dirname(__DIR__) . '/index.php';
    var_dump($loader->getFilenames());

});

// Add a regex filter that requires all classes to match the regex.
// $config->addInclusiveFilter('/Foo/');

// Add a regex filter that requires that a class does not match the filter.
// $config->addExclusiveFilter('/Foo/');
return $config;
