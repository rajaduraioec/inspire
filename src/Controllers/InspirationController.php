<?php

namespace Rajaduraioec\Inspire\Controllers;

use Rajaduraioec\Inspire\Inspire;
use App\Http\Controllers\Controller;

class InspirationController extends Controller
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}