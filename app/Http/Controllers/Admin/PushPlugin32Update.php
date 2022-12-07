<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PushPlugin32UpdateRequest;
use App\Models\Admin\Manage32bitPluginModel;
use Illuminate\Http\Request;

class PushPlugin32Update extends Controller
{
    public function pushPluginIndex()
    {
        return view('admin.push-plugin-updates.32bitindex');
    }

     //Fetch Data
    public function fetchPlugin32Data()
    {
        $fetchServers = Manage32bitPluginModel::all();
        return response()->json(['data'=>$fetchServers], 200);
    }

    //Routes
    public function push32BitPluginUpdate(Manage32bitPluginModel $modelPlugin32) {
        return view('admin.push-plugin-updates.32bit-push-update', compact('modelPlugin32'));
    }

    //Push new update
    public function push32bitPlugin(PushPlugin32UpdateRequest $requests, $modelPlugin32) {
        $validPluginFormData = $requests->validated();
        $modelPlugin32 = Manage32bitPluginModel::findOrFail($modelPlugin32);

        $modelPlugin32->pluginName = $validPluginFormData['pluginName'];
        $modelPlugin32->pluginVersion = $validPluginFormData['pluginVersion'];

        //Plugin apk
        function generateRandomLoaderName($length = 8)
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i=0; $i < $length ; $i++) {
                # code...
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        if($requests->hasFile('pluginUrl')) {
            $file = $requests->file('pluginUrl');
            $extension = $file->getClientOriginalExtension();
            $fileName = 'plugin-v-'.$validPluginFormData['pluginVersion'].'-'.generateRandomLoaderName().'.'.$extension;

            $file->move('uploads/plugins/plugin32/archiver/', $fileName);
            $modelPlugin32->pluginUrl = $fileName;
        }

        $modelPlugin32->update();
        return redirect('/admin/push-plugin-update')->with('message', 'New plugin was updated!');
    }
}
