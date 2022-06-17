<?php

include_once __DIR__ . '/vendor/autoload.php';

use \Kirby\Cms\App as Kirby;
use \Kirby\Cms\File as File;
use \Kirby\Filesystem\File as FileSystem;

Dotenv\Dotenv::createImmutable(kirby()->root('index'))->load();

Kirby::plugin('robinscholz/kirby-mux', [
    'translations' => [
        'en' => [
            'field.blocks.mux-video.thumbnail' => 'Generate thumbnail from frame',
            'field.blocks.mux-video.thumbnail.help' => 'In seconds',
        ],
        'nl' => [
            'field.blocks.mux-video.thumbnail' => 'Maak thumbnail van frame',
            'field.blocks.mux-video.thumbnail.help' => 'In seconden',
        ],
    ],
    'blueprints' => [
        'files/mux-video' => __DIR__ . '/blueprints/files/mux-video.yml',
        'blocks/mux-video' => __DIR__ . '/blueprints/blocks/mux-video.yml'
    ],
    'snippets' => [
        'blocks/mux-video' => __DIR__ . '/snippets/blocks/mux-video.php'
    ],
    'hooks' => [
        'file.create:after' => function (File $file) {
            if ($file->type() !== 'video') {
                return;
            }

            // Authenticate
            $assetsApi = KirbyMux\Auth::assetsApi();

            // Upload the file to mux
            $result = KirbyMux\Methods::upload($assetsApi, $file->url());

            // Save mux data
            try {
                $file = $file->update([
                    'mux' => $result->getData()
                ]);
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        },
        'file.delete:before' => function (File $file) {
            if ($file->type() !== 'video') {
                return;
            }

            // Authentication setup
            $assetsApi = KirbyMux\Auth::assetsApi();

            // Get mux Id
            $muxId = json_decode($file->mux())->id;

            // Delete Asset
            try {
                $assetsApi->deleteAsset($muxId);
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        },
        'file.replace:before' => function (File $file, FileSystem $upload) {
            if ($upload->type() !== 'video') {
                return;
            }

            // Authentication setup
            $assetsApi = KirbyMux\Auth::assetsApi();

            // Get old mux Id
            $muxId = json_decode($file->mux())->id;

            // Delete old asset
            try {
                $assetsApi->deleteAsset($muxId);
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        },
        'file.replace:after' => function (File $newFile, File $oldFile) {
            if ($newFile->type() !== 'video') {
                return;
            }

            // Authentication setup
            $assetsApi = KirbyMux\Auth::assetsApi();

            // Upload new file to mux
            $result = KirbyMux\Methods::upload($assetsApi, $newFile->url());

            // Save playback Id
            try {
                $newFile = $newFile->update([
                    'mux' => $result->getData()
                ]);
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        }
    ]
]);
