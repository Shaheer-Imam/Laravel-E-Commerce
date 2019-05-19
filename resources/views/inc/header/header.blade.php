<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

	switch($page){
        case 'home-v1':
            @include'/inc/header/header-v1';
        break;

        case 'home-v2':
         	@include'/inc/header/header-v1';
        break;

        case 'home-v3':
         	@include'/inc/header/header-v2';
        break;

        case 'home-v4':
         	@include'/inc/header/header-v2';
        break;

		case 'home-v5':
         	@include'/inc/header/header-v3';
        break;

		case 'home-v6':
         	@include'/inc/header/header-v4';
        break;

		case 'home-v7':
         	@include'/inc/header/header-v2';
        break;

        case 'home-v8':
            @include'/inc/header/header-v2';
        break;

        case 'home-v9':
            @include'/inc/header/header-v7';
        break;

        case 'home-v10':
            @include'/inc/header/header-v8';
        break;

        case 'home-v11':
            @include'/inc/header/header-v9';
        break;

        case 'home-v12':
            @include'/inc/header/header-v10';
        break;

        case 'home-v13':
            @include'/inc/header/header-v11';
        break;

        case 'home-v14':
            @include'/inc/header/header-v12';
        break;

        case 'landing-page-v1':
            @include'/inc/header/header-v5';
        break;

        case 'landing-page-v2':
            @include'/inc/header/header-v6';
        break;
        
        default:
        	@include'/inc/header/header-v1';
    }
?>
