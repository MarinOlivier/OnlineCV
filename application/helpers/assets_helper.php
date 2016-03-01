<?php
/**
 * Created by PhpStorm.
 * User: olivier
 * Date: 20/09/15
 * Time: 11:02
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url'))
{
    function css_url($nom)
    {
        return base_url() . 'assets/css/' . $nom . '.css';
    }

    function css_jquery_url($nom)
    {
        return base_url() . 'assets/jquery-ui/' . $nom . '.css';
    }
}

if ( ! function_exists('js_url'))
{
    function js_url($nom)
    {
        return base_url() . 'assets/js/' . $nom . '.js';
    }

    function js_jquery_url($nom)
    {
        return base_url() . 'assets/jquery-ui/' . $nom . '.js';
    }

}

if ( ! function_exists('img_url'))
{
    function img_url($nom)
    {
        return base_url() . 'assets/img/' . $nom;
    }
}

if ( ! function_exists('img')) {
    function img($nom, $alt = '')
    {
        return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
    }
}