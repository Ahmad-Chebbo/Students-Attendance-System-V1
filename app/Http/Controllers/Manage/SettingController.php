<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\BaseController;
use App\Models\Setting;
use App\Traits\UploadFilesTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class SettingController extends BaseController
{
    use UploadFilesTrait;

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $this->setPageTitle('Settings', 'Manage Settings');
        return view('Manage.pages.Settings.index');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        if ($request->has('site_logo') && ($request->file('site_logo') instanceof UploadedFile)) {

            if (config('settings.site_logo') != null) {
                $this->deleteOne((config('settings.site_logo')));
            }

            Setting::set('site_logo', $this->uploadOne($request, 'site_logo', 'uploads/settings/'));
        } elseif ($request->has('site_favicon') && ($request->file('site_favicon') instanceof UploadedFile)) {

            if (config('settings.site_favicon') != null) {
                $this->deleteOne((config('settings.site_favicon')));
            }

            Setting::set('site_favicon', $this->uploadOne($request, 'site_favicon', 'uploads/settings/'));
        } else {

            $keys = $request->except('_token');
            foreach ($keys as $key => $value) {
                Setting::set($key, $value);
            }
        }
        return $this->responseRedirectBack('Settings','Settings updated successfully.', 'success');
    }
}
