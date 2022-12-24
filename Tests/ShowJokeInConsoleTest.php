<?php

namespace Tests\ShowJokeInConsoleTest;

use function Saeghe\FileManager\Resolver\root;
use function Saeghe\TestRunner\Assertions\Boolean\assert_true;

test(
    title: 'it should show a joke in the console',
    case: function () {
        $output = shell_exec('php ' . root() . 'Console.php');

        assert_true(str_contains($output, 'Chuck Norris'));
    }
);
