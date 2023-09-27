<?php

echo 'Nama: ';
echo 'Fardiansyah';
echo "\n";
//kutip dua dipakai untuk tag \
echo 'Nama: ';
echo "Fardi\t Ansyah\n";

//heredoc untuk string yg sangat panjang, Fardi sebagai tag
echo <<<Fardi
Lorem ipsum dolor sit amet, consectetur adipiscing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Fardi;

//nowdoc sama seperti heredoc tapi tidak memiliki kemampuan parsing
echo <<<'Fardi'
Gembel ipsum dolor sit amet, consectetur adipiscing elit,
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Fardi;
