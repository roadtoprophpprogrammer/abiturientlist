<?php

\classes\Route::set('registration', function () {
    \controllers\Registration::createView();
});

\classes\Route::set('', function () {
    \controllers\Home::createView();
});

\classes\Route::set('index', function () {
    \controllers\Home::createView();
});
