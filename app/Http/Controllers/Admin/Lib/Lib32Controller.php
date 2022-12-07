<?php

namespace App\Http\Controllers\Admin\Lib;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Lib\Lib32Requests;
use App\Models\Admin\Lib\Lib32Model;
use Illuminate\Http\Request;

class Lib32Controller extends Controller
{
    public function lib32Index()
    {
        return view('admin.lib.lib32');
    }

    //Fetch Data
    public function fetchLib32Data()
    {
        $fetchServers = Lib32Model::all();
        return response()->json(['data'=>$fetchServers], 200);
    }

    //Routes
    public function push32bitLib(Lib32Model $lib32Model)
    {
        return view('admin.lib.push-updates.push32-update', compact('lib32Model'));
    }

    //Push new lib
    public function pushLib32BitToSQL(Lib32Requests $lib32Requests, $lib32Model)
    {
        $validLib32FormData = $lib32Requests->validated();
        $lib32Model = Lib32Model::findOrFail($lib32Model);

        $lib32Model->libARMV7aName = $validLib32FormData['libARMV7aName'];
        $lib32Model->libARMV8aName = $validLib32FormData['libARMV8aName'];
        $lib32Model->libARMV7aVersion = $validLib32FormData['libARMV7aVersion'];
        $lib32Model->libARMV8aVersion = $validLib32FormData['libARMV8aVersion'];

        function genLibRandomStr($length = 5)
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

        //Lib-V7-File
        if ($lib32Requests->hasFile('libARMV7aUrl'))
        {
            $libv7File = $lib32Requests->file('libARMV7aUrl');
            $v7Extension = $libv7File->getClientOriginalExtension();
            $v7Name = 'lib-pg-v7a_v-'.$validLib32FormData['libARMV7aVersion'].'-'.genLibRandomStr().'.'.$v7Extension;

            $libv7File->move('uploads/libs/pg32/v7/archiver/', $v7Name);
            $lib32Model->libARMV7aUrl = $v7Name;
        }


        //Lib-V8-File
        if ($lib32Requests->hasFile('libARMV8aUrl'))
        {
            $libv8File = $lib32Requests->file('libARMV8aUrl');
            $v8Extension = $libv8File->getClientOriginalExtension();
            $v8Name = 'lib-pg-v8a_v-'.$validLib32FormData['libARMV8aVersion'].'-'.genLibRandomStr().'.'.$v8Extension;

            $libv8File->move('uploads/libs/pg32/v8/archiver/', $v8Name);
            $lib32Model->libARMV8aUrl = $v8Name;
        }

        $lib32Model->update();
        return redirect('admin/push-lib32-update')->with('message', 'New Lib was updated!');
    }
}
