<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_pagination;
use Illuminate\Cache\RateLimiting\Limit;

class datasearchcontroller extends Controller
{
    public function Search(Request $request) {
    // {
    //     $query = $request->input('query');


    //      $datas = data_pagination::where('name', 'LIKE', "%{$query}%")
    //                 ->orWhere('email', 'LIKE', "%{$query}%")
    //                 ->orWhere('last_name', 'LIKE', "%{$query}%")->Limit(10)->get();

    //                 return response()->json($datas);
    //     }


        $query = trim($request->input("query"));

        if(empty($query)){
            return response()->json([]);
        }

        $datas = data_pagination::whereRaw("CONCAT(name, ' ', last_name) LIKE ?", ["%{$query}%"])
            ->orderBy('name')
            ->orderBy('last_name')
            ->limit(10)
            ->get();

        return response()->json($datas);

    }
}

