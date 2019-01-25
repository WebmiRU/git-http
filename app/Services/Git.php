<?php

namespace App\Services;


class Git
{
    /**
     * Фунция возвращает текущую (активную) ветку репозитория
     *
     * @param $repository Название репозитория
     * @param bool $formatJson флаг, возвращать ли данные в формате JSON (по умолчанию объект)
     * @return bool|false|string
     */
    public static function branchCurrent($repository, $formatJson = false)
    {
        $gitRepDir = env('GIT_REP_DIR');

        exec("git --git-dir {$gitRepDir}/{$repository}.git rev-parse --abbrev-ref HEAD", $output, $exitCode);


        if ($exitCode || !count($output)) {
            $result = [
                'error' => true,
                'exitCode' => $exitCode,
            ];
        } else {
            $result = [
                'branch' => $output[0],
            ];
        }

        $result = (object)$result;

        if($formatJson) {
            return json_encode($result);
        } else {
            return $result;
        }
    }
}