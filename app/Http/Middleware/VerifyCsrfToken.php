<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://127.0.0.1:8000/image/upload/store',
        'http://127.0.0.1:8000/image/delete',
        'http://127.0.0.1:8000/image/getproductimages',
        'http://127.0.0.1:8000/admin/ListProducts/GetListProducts',
        'http://127.0.0.1:8000/admin/api/saveAttributeOptions',
        'http://127.0.0.1:8000/admin/api/ProductAttributes'
    ];
}
