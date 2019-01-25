<?php

namespace App\Services;


class Git
{
    //Фунция возвращает текущую (активную) ветку
    public static function branchCurrent($repName, $formatJson = false)
    {
        $gitRepDir = env('GIT_REP_DIR');

        exec("git --git-dir {$gitRepDir}/{$repName}.git rev-parse --abbrev-ref HEAD", $output, $exitCode);

        $result = false;

        if ($exitCode) {
            return $result;
        }

        $result = $output;

        if($formatJson) {
            return json_encode($result);
        } else {
            return $result;
        }
    }
}

/**
 * Список возможных параметров
 * -r -- repository name (обязательный)
 */