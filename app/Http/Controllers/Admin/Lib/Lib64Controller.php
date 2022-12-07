<?php

namespace App\Http\Controllers\Admin\Lib;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Lib\Lib64Requests;
use App\Models\Admin\Lib\Lib64Model;
use Illuminate\Http\Request;

class Lib64Controller extends Controller
{
    public function lib64Index()
    {
        return view('admin.lib.lib64');
    }

    //Fetch Data
    public function fetchLib64Data()
    {
        $fetchServers = Lib64Model::all();
        return response()->json(['data'=>$fetchServers], 200);
    }

    //Routes
    public function push64bitLib(Lib64Model $lib64Model)
    {
        return view('admin.lib.push-updates.push64-update', compact('lib64Model'));
    }

    //Push lib update
    public function pushLib64BitToSQL(Lib64Requests $lib64Requests, $lib64Model)
    {
        $validLib64FormData = $lib64Requests->validated();
        $lib64Model = Lib64Model::findOrFail($lib64Model);

        $lib64Model->lib64ARMV7aName = $validLib64FormData['lib64ARMV7aName'];
        $lib64Model->lib64ARMV8aName = $validLib64FormData['lib64ARMV8aName'];
        $lib64Model->lib64ARMV7aVersion = $validLib64FormData['lib64ARMV7aVersion'];
        $lib64Model->lib64ARMV8aVersion = $validLib64FormData['lib64ARMV8aVersion'];

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
        if ($lib64Requests->hasFile('lib64ARMV7aUrl'))
        {
            $libv7File = $lib64Requests->file('lib64ARMV7aUrl');
            $v7Extension = $libv7File->getClientOriginalExtension();
            $v7Name = 'lib-pg64-v7a_v-'.$validLib64FormData['lib64ARMV7aVersion'].'-'.genLibRandomStr().'.'.$v7Extension;

            $libv7File->move('uploads/libs/pg64/v7/archiver/', $v7Name);
            $lib64Model->lib64ARMV7aUrl = $v7Name;
        }

        //Lib-V8-File
        if ($lib64Requests->hasFile('lib64ARMV8aUrl'))
        {
            $libv8File = $lib64Requests->file('lib64ARMV8aUrl');
            $v8Extension = $libv8File->getClientOriginalExtension();
            $v8Name = 'lib-pg64-v8a_v-'.$validLib64FormData['lib64ARMV8aVersion'].'-'.genLibRandomStr().'.'.$v8Extension;

            $libv8File->move('uploads/libs/pg64/v8/archiver/', $v8Name);
            $lib64Model->lib64ARMV8aUrl = $v8Name;
        }

        $lib64Model->update();
        return redirect('admin/push-lib64-update')->with('message', 'New Lib was updated!');
    }
}
