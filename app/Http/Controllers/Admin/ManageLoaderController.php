<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PushLoaderUpdateRequest;
use App\Models\Admin\ManageLoaderModel;
use Illuminate\Http\Request;

class ManageLoaderController extends Controller
{
    public function manageLoaderIndex() {
        return view('admin.manage-loader.index');
    }

    //Fetch Data
    public function fetchLoaderData()
    {
        $fetchServers = ManageLoaderModel::all();
        return response()->json(['data'=>$fetchServers], 200);
    }

    //Rotes
    public function pushLoaderUpdate(ManageLoaderModel $manageLoaderModel) {
        return view('admin.manage-loader.push-update', compact('manageLoaderModel'));
    }

    //Push
    public function push(PushLoaderUpdateRequest $requests, $manageLoaderModel) {
        $validFormData = $requests->validated();
        $manageLoaderModel = ManageLoaderModel::findOrFail($manageLoaderModel);

        $manageLoaderModel->name = $validFormData['name'];
        $manageLoaderModel->loaderVersion = $validFormData['loaderVersion'];
        $manageLoaderModel->loaderPackage = $validFormData['loaderPackage'];

        //new Loader
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
        if($requests->hasFile('loaderUrl')) {
            $file = $requests->file('loaderUrl');
            $extension = $file->getClientOriginalExtension();
            $fileName = $validFormData['loaderPackage'].'-v-'.$validFormData['loaderVersion'].'-'.generateRandomLoaderName().'.'.$extension;

            $file->move('uploads/loaders/archiver/', $fileName);
            $manageLoaderModel->loaderUrl = $fileName;
        }

        $manageLoaderModel->loaderChangeLog = $validFormData['loaderChangeLog'];

        $manageLoaderModel->update();
        return redirect('/admin/manage-loader')->with('message', 'An update was pushed! User App was notified!');

        //
    }
}
