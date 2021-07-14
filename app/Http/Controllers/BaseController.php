<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BaseController extends Controller
{
    /**
     * Set Page title and subtitle according to the requested page
     * Make them dynamic for the SEO
     * @param $title
     * @param $subTitle
     */
    protected function setPageTitle($title, $subTitle)
    {
        view()->share(['pageTitle' => $title, 'subTitle' => $subTitle]);
    }

    /**
     * @param $route
     * @param $title
     * @param $message
     * @param string $type
     * @param bool $error
     * @param bool $withOldInputWhenError
     * @return RedirectResponse
     */
    protected function responseRedirect($route, $title, $message, string $type = 'info', bool $error = false, bool $withOldInputWhenError = false): RedirectResponse
    {
        // Show Sweet Alert Notification
        alert($title, $message, $type);

        // If there is error's return to same page and show the error's
        if ($error && $withOldInputWhenError) {
            return redirect()->back()->withInput();
        }
        // else redirect to another route
        return redirect()->route($route);
    }

    /**
     * @param $title
     * @param $message
     * @param string $type
     * @param bool $error
     * @param bool $withOldInputWhenError
     * @return RedirectResponse
     */
    protected function responseRedirectBack($title, $message, string $type = 'info', bool $error = false, bool $withOldInputWhenError = false): RedirectResponse
    {
        // Show Sweet Alert Notification
        alert($title, $message, $type);

        // Redirect Back
        return redirect()->back();
    }
}
