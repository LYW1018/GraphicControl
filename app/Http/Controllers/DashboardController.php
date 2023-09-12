<?php

namespace App\Http\Controllers;

use App\Models\BitCell;
use App\Tool\ResponseService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


//Del_刪除所指定的Guid
    public function del_C(Request $request){
        $TmpResponseService = new ResponseService();
        $TmpGuid= $request['Guid'];
        if ($TmpGuid == '' ) return $TmpResponseService->HTTP_BAD_REQUEST([
            'REQUEST' => false
        ]);
        $TmpBitCell = new BitCell;
        $TmpBitCellByWhereByGuid = $TmpBitCell::where([
            ['Guid', '=', $TmpGuid]
        ])->get();
        if ($TmpBitCellByWhereByGuid->isEmpty()) {
            return $TmpResponseService->HTTP_BAD_REQUEST([
                'isEmpty' => true
            ]);
        }
        $TmpBitCellByWhereByGuid->first()->delete();

        return $TmpResponseService->JSON_HTTP_OK([
            'success' => true,
        ]);
    }
//Put_更新指定位置Update資料
    public function upd_B(Request $request){
        $TmpResponseService = new ResponseService();
        $TmpGuid= $request['Guid'];
        $TmpAddress = $request['Address'];
        if ($TmpGuid == '' or $TmpAddress == '') return $TmpResponseService->HTTP_BAD_REQUEST([
            'REQUEST' => false
        ]);
        $TmpBitCell = new BitCell;
        $TmpBitCellByWhereByAddress = $TmpBitCell::where([
            ['Guid', '=', $TmpGuid]
        ])->get();
        if ($TmpBitCellByWhereByAddress->isEmpty()) {
            return $TmpResponseService->HTTP_BAD_REQUEST([
                'isEmpty' => true
            ]);
        }
        $TmpByGuid = $TmpBitCellByWhereByAddress->first();
        $TmpByGuid['Address'] = $TmpAddress;
        $TmpByGuid->update();

        return $TmpResponseService->JSON_HTTP_OK([
            'success' => true,
        ]);
    }
//Post_新增資料入資料庫
    public function ins_A(Request $request){
        $TmpResponseService = new ResponseService();
        $TmpName = $request['Name'];
        $TmpAddress = $request['Address'];
        if ($TmpName == '' or $TmpAddress == '') return $TmpResponseService->HTTP_BAD_REQUEST([
            'REQUEST' => false
            ]);

        $TmpBitCell = new BitCell;
        $TmpBitCell::create([
            'Guid' => guid()
            , 'Name'=> $TmpName
            ,'Address' => $TmpAddress
            , 'NowValue' => 0
            ,'HandTrigger' => 99
            ,'HandTriggerValue' => 99
            ,'CollectData' => json_encode([])
            ,'NotifyStatus' => 0
            ,'NotifyCollectData' => json_encode([
                'NotifyType' => 0,
                'NotifyPlatFrom' => 0,
                'NotifyTimeStamp' => 0,
                'NotifyDateTime' => 0
            ])
        ]);
        return $TmpResponseService->JSON_HTTP_OK([
            'success' => true,
        ]);

    }

//Get_讀取單一選取一個Address資料
    public function BitcellsByAddress(Request $request)
    {
        //        dd($BitCell);
        $TmpResponseService = new ResponseService();
        $TmpAddress = $request['Address'];
        if ($TmpAddress == '') return $TmpResponseService->HTTP_BAD_REQUEST([
            'Address' => false
        ]);
//        dd($TmpAddress);

        $TmpBitCell = new BitCell;
        $TmpBitCellByWhereByAddress = $TmpBitCell::where([
            ['Address', '=', $TmpAddress]
        ])->get();
//        dd($TmpBitCellByWhereByAddress);

        if ($TmpBitCellByWhereByAddress->isEmpty()) {
            return $TmpResponseService->HTTP_BAD_REQUEST([
                'isEmpty' => true
            ]);
        }

        $BitCell = $TmpBitCellByWhereByAddress->map(function ($v, $k) {
            return [
                'Guid' => $v['Guid']
                , 'Name' => $v['Name']
                , 'Address' => $v['Address']
                , 'NowValue' => $v['NowValue']
                , 'HandTrigger' => $v['HandTrigger']
                , 'HandTriggerValue' => $v['HandTriggerValue']
                , 'CollectData' => $v['CollectData']
                , 'NotifyStatus' => $v['NotifyStatus']
                , 'NotifyCollectData' => json_decode($v['NotifyCollectData'])
            ];
        });
        return $TmpResponseService->JSON_HTTP_OK([
            'result' => $BitCell,
            'length' => $BitCell->count(),
        ]);
    }

//Get_讀取全部的Address資料
    public function GetAll(Request $request)
    {
        $TmpBitCell = new BitCell;
        $BitCell = $TmpBitCell::all()->map(function ($v,$k){
            return[
                'Guid' => $v['Guid']
                ,'Name'=> $v['Name']
                ,'Address'=> $v['Address']
                ,'NowValue'=> $v['NowValue']
                ,'HandTrigger'=> $v['HandTrigger']
                ,'HandTriggerValue'=> $v['HandTriggerValue']
                ,'CollectData'=> $v['CollectData']
                ,'NotifyStatus'=> $v['NotifyStatus']
                ,'NotifyCollectData'=> json_decode($v['NotifyCollectData'])
            ];
        });
//        dd($BitCell);
        $TmpResponseService = new ResponseService();
        return $TmpResponseService->JSON_HTTP_OK([
            'result' => $BitCell,
            'length' => $BitCell->count(),
        ]);

    }
}
