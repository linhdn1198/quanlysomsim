<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sosim;

class sosim_c extends Controller
{
    //
    public function danhsachsim(){
        $danhsachsosim = sosim::all();
        return view('danhsachsim',['danhsachsosim'=> $danhsachsosim]);
    }

    public function getAdd(){
        return view('getAdd');
    }
    public function postAdd(Request $request){
        $this->validate($request,
                        [
                            'sosim' => 'required | min:10 | max:15',
                            'gia' => 'required'
                        ],
                        [
                            'sosim.required' => 'Bạn chưa nhập số sim.',
                            'sosim.min' => 'Số sim phải lớn hơn 10.',
                            'sosim.max' => 'Số sim phải nhỏ hơn 15.',
                            'gia.required' => 'Bạn chưa nhập giá.'
                        ]);

        $sosim = new sosim;
        $sosim->sosim = $request->sosim;
        $sosim->gia = $request->gia;
        $sosim->save();
        return redirect('sosim/getAdd')->with('thongbao','Thêm thành công!');
    }

    public function getEdit($id){
        $sosim = sosim::find($id);
        return view('getEdit',['sosim'=>$sosim]);
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,
                        [
                            'sosim' => 'required | min:10 | max:15',
                            'gia' => 'required'
                        ],
                        [
                            'sosim.required' => 'Bạn chưa nhập số sim.',
                            'sosim.min' => 'Số sim phải lớn hơn 10.',
                            'sosim.max' => 'Số sim phải nhỏ hơn 15.',
                            'gia.required' => 'Bạn chưa nhập giá.'
                        ]);

        $sosim = sosim::find($id);
        $sosim->sosim = $request->sosim;
        $sosim->gia = $request->gia;
        $sosim->save();
        return redirect('sosim/getEdit/'.$id)->with('thongbao','Sửa thành công!');
    }

    public function getDelete($id){
        $sosim = sosim::find($id);
        $sosim->delete();

        return redirect('sosim/danhsachsim');
    }
}
