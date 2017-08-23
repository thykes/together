<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'filefield' => [
            'rules' => [
                'required',
                'file',
                'mime' => ['application/pdf'],
                'filesize' => 5000,
            ],
            'message' => [
                'Please choose a file.',
                'Please choose a file.',
                'Please choose a PDF.',
                'Please choose a file that is smaller than 5 MB.',
            ],
        ],
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Please enter a valid email address',
        ],
        'message' => [
            'rules' => ['required'],
            'message' => 'Please enter a message',
        ],

    ]);

    if (r::is('POST')) {
        $form->uploadAction(['fields' => [
            'filefield' => [
                'target' => kirby()->roots()->content(),
                'prefix' => false,
            ],
        ]]);
    }

    if (r::is('POST')) {
        $form->emailAction([
            'to' => 'tim@timhykes.com',
            'from' => 'love@love.com',
        ]);
    }

    return compact('form');
};
