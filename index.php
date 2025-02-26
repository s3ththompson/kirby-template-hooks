<?php

use Kirby\Cms\App as Kirby;
use Kirby\Cms\File;
use Kirby\Cms\Page;
use Kirby\Filesystem\File as BaseFile;

Kirby::plugin('afbora/kirby-template-hooks', [
    'hooks' => [
        'file.changeName:after' => function (File $newFile, File $oldFile) {
            kirby()->trigger('file.' . $newFile->template()->name() . '.changeName:after', compact('newFile', 'oldFile'));
        },

        'file.changeName:before' => function (File $file, string $name) {
            kirby()->trigger('file.' . $file->template()->name() . '.changeName:before', compact('file', 'name'));
        },

        'file.changeSort:after' => function (File $newFile, File $oldFile) {
            kirby()->trigger('file.' . $newFile->template()->name() . '.changeSort:after', compact('newFile', 'oldFile'));
        },

        'file.changeSort:before' => function (File $file, int $position) {
            kirby()->trigger('file.' . $file->template()->name() . '.changeSort:before', compact('file', 'position'));
        },

        'file.create:after' => function (File $file) {
            kirby()->trigger('file.' . $file->template()->name() . '.create:after', compact('file'));
        },

        'file.create:before' => function (File $file, BaseFile $upload) {
            kirby()->trigger('file.' . $file->template()->name() . '.create:before', compact('file', 'upload'));
        },

        'file.delete:after' => function (bool $status, File $file) {
            kirby()->trigger('file.' . $file->template()->name() . '.delete:after', compact('status', 'file'));
        },

        'file.delete:before' => function (File $file) {
            kirby()->trigger('file.' . $file->template()->name() . '.delete:before', compact('file'));
        },

        'file.replace:after' => function (File $newFile, File $oldFile) {
            kirby()->trigger('file.' . $newFile->template()->name() . '.replace:after', compact('newFile', 'oldFile'));
        },

        'file.replace:before' => function (File $file, BaseFile $upload) {
            kirby()->trigger('file.' . $file->template()->name() . '.replace:before', compact('file', 'upload'));
        },

        'file.update:after' => function (File $newFile, File $oldFile) {
            kirby()->trigger('file.' . $newFile->template()->name() . '.update:after', compact('newFile', 'oldFile'));
        },

        'file.update:before' => function (File $file, array $input) {
            kirby()->trigger('file.' . $file->template()->name() . '.update:before', compact('file', 'input'));
        },

        'page.changeNum:after' => function (Page $newPage, Page $oldPage) {
            kirby()->trigger('page.' . $newPage->intendedTemplate()->name() . '.changeNum:after', compact('newPage', 'oldPage'));
        },

        'page.changeNum:before' => function (Page $page, int $num) {
            kirby()->trigger('page.' . $page->intendedTemplate()->name() . '.changeNum:before', compact('page', 'num'));
        },

        'page.changeSlug:after' => function (Page $newPage, Page $oldPage) {
            kirby()->trigger('page.' . $newPage->intendedTemplate()->name() . '.changeSlug:after', compact('newPage', 'oldPage'));
        },

        'page.changeSlug:before' => function (Page $page, string $slug, string $languageCode) {
            kirby()->trigger('page.' . $page->intendedTemplate()->name() . '.changeSlug:before', compact('page', 'slug', 'languageCode'));
        },

        'page.changeStatus:after' => function (Page $newPage, Page $oldPage) {
            kirby()->trigger('page.' . $newPage->intendedTemplate()->name() . '.changeStatus:after', compact('newPage', 'oldPage'));
        },

        'page.changeStatus:before' => function (Page $page, string $status, ?int $position = null) {
            kirby()->trigger('page.' . $page->intendedTemplate()->name() . '.changeStatus:before', compact('page', 'status', 'position'));
        },

        'page.changeTemplate:after' => function (Page $newPage, Page $oldPage) {
            kirby()->trigger('page.' . $newPage->intendedTemplate()->name() . '.changeTemplate:after', compact('newPage', 'oldPage'));
        },

        'page.changeTemplate:before' => function (Page $page, string $template) {
            kirby()->trigger('page.' . $page->intendedTemplate()->name() . '.changeTemplate:before', compact('page', 'template'));
        },

        'page.changeTitle:after' => function (Page $newPage, Page $oldPage) {
            kirby()->trigger('page.' . $newPage->intendedTemplate()->name() . '.changeTitle:after', compact('newPage', 'oldPage'));
        },

        'page.changeTitle:before' => function (Page $page, string $title) {
            kirby()->trigger('page.' . $page->intendedTemplate()->name() . '.changeTitle:before', compact('page', 'title'));
        },

        'page.create:after' => function (Page $page) {
            kirby()->trigger('page.' . $page->intendedTemplate()->name() . '.create:after', compact('page'));
        },

        'page.create:before' => function (Page $page, array $input) {
            kirby()->trigger('page.' . $page->intendedTemplate()->name() . '.create:before', compact('page', 'input'));
        },

        'page.delete:after' => function (bool $status, Page $page) {
            kirby()->trigger('page.' . $page->intendedTemplate()->name() . '.delete:after', compact('status', 'page'));
        },

        'page.delete:before' => function (Page $page, bool $force) {
            kirby()->trigger('page.' . $page->intendedTemplate()->name() . '.delete:before', compact('page', 'force'));
        },

        'page.duplicate:after' => function (Page $duplicatePage, Page $originalPage) {
            kirby()->trigger('page.' . $duplicatePage->intendedTemplate()->name() . '.duplicate:after', compact('duplicatePage', 'originalPage'));
        },

        'page.duplicate:before' => function (Page $originalPage, array $input, array $options) {
            kirby()->trigger('page.' . $originalPage->intendedTemplate()->name() . '.duplicate:before', compact('originalPage', 'input', 'options'));
        },

        'page.update:after' => function (Page $newPage, Page $oldPage) {
            kirby()->trigger('page.' . $newPage->intendedTemplate()->name() . '.update:after', compact('newPage', 'oldPage'));
        },

        'page.update:before' => function (Page $page, array $values, array $strings) {
            kirby()->trigger('page.' . $page->intendedTemplate()->name() . '.update:before', compact('page', 'values', 'strings'));
        }
    ]
]);
