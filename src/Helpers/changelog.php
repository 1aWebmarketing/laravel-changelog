<?php

use Illuminate\Support\Facades\File;
use League\CommonMark\CommonMarkConverter;
use Illuminate\Support\Facades\Cache;

function getAppChangelog()
{
    $path = resource_path('../CHANGELOG.md');
    $markdown = File::get($path);

    $converter = new CommonMarkConverter();
    return $converter->convert($markdown);
}

function getAppVersion(String $returnIfFalse = "Unknown"): string
{
    return Cache::remember('app_version', 60, function () {
        $path = resource_path('../CHANGELOG.md');
        $content = File::get($path);

        if (preg_match('/## \[(\d+\.\d+\.\d+)\]/', $content, $matches)) {
            return $matches[1];
        }

        return $returnIfFalse;
    });
}
