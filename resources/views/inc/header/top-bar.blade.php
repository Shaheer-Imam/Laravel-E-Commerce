<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

    switch($page){
        case 'home-v1':
        case 'home-v2':
            @include'/inc/header/top-bar-v1';
        break;


        case 'home-v3':
        case 'home-v4':
        case 'home-v5':
        case 'home-v6':
        case 'home-v7':
        case 'home-v8':
        case 'home-v11':
        case 'home-v12':
            @include'/inc/header/top-bar-v2';
        break;

        default:
            @include'/inc/header/top-bar-v1';

        
    }
?>
