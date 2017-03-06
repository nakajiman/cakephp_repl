<?php
class ReplShell extends Shell {
    function main() {
        while (true) {
            $__repl_line__ = readline('> ');
            if (strlen($__repl_line__) > 0) {
                readline_add_history($__repl_line__);
            }
            eval($__repl_line__);
        }
    }
}