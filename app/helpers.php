<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

/**
* 前台视图路径
 * @param $path
 * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
 */
function frontendView($path)
{
    return view('frontend.' . $path);
}

/**
 * 后台视图路径
 * @param $path
 * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
 */
function backendView($path)
{
    return view('backend.' . $path);
}
