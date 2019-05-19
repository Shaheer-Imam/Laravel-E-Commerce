<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

	switch($page){

        case 'home-v9':
            @include'/inc/footer/footer-v5';
        break;

        case 'home-v10':
            @include'/inc/footer/footer-v2';
        break;

        case 'home-v11':
            @include'/inc/footer/footer-v3';
        break;

        case 'home-v12':
            @include'/inc/footer/footer-v4';
        break;

        case 'home-v13':
            @include'/inc/footer/footer-v6';
        break;

        case 'home-v14':
            @include'/inc/footer/footer-v7';
        break;
        
        default:
        	@include'/inc/footer/footer-v1';
    }
?>
