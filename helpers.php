<?php

/**
 * get the base path
 * 
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
}


/**
 * Load a view
 * @param string $name
 * @return void
 */

function loadView($name = '')
{
    $viewPath = basePath("views/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo 'View "' . $name . ' Not Found!!';
    }
}

/**
 * Load a Partial
 * @param string $name
 * @return void
 */

function loadPartial($name = '')
{
    $partialPath = basePath("views/partials/{$name}.php");


    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo 'Partial "' . $name . '.php" Not Found!!';
    }
}

/**
 * inspect a value
 * @param string $value
 * @return void
 */

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '<pre>';

}


/**
 * inspect a value and die
 * @param string $value
 * @return void
 */

function inspectDie($value)
{
    echo '<pre>';
    var_dump($value);
    echo '<pre>';
    die();

}

