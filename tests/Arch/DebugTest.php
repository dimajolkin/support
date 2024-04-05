<?php

declare(strict_types=1);

arch("Forgotten functions")
    ->expect(['trap', 'dd', 'dump', 'exit', 'die', 'print_r', 'var_dump', 'echo', 'print', 'sleep', 'usleep'])
    ->not
    ->toBeUsed();
