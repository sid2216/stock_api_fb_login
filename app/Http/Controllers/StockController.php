<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Stocks_data;

class StockController extends Controller
{
    public function index(){

    	return view('stock_data');
    }

    public function get_stocks(Request $request){
    	//dd($request->all());
         $response = Http::get('https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol='.$request->stock.'&apikey=0O18XUJW9P8QVGQJ');
         //dd($response->json());
         foreach ($response->json() as $value) {
         	//dd($value);
         	$symbol=$value["01. symbol"];
         	$open=$value["02. open"];
         	$high=$value["03. high"];
         	$low=$value["04. low"];
         	$price=$value["05. price"];
         	$volume=$value["06. volume"];
         	$latest_trading_day=$value["07. latest trading day"];
         	$previous_close=$value["08. previous close"];
         	$change=$value["09. change"];
         	$change_percent=$value["10. change percent"];
         }
        
         	$stock=Stocks_data::create(['symbol'=>$symbol,
                                      'open'=>$open,
                                        'high'=>$high,
                                     'low'=>$low,
                                      'price'=>$price,
                                      'volume'=>$volume,
                                      'latest_trading_day'=>$latest_trading_day,
                                  'previous_close'=>$previous_close,
                                     'change'=>$change,
                                        'change_percent'=>$change_percent]);
         	//dd($stock->symbol);
         
         $html = view('table')->with(compact('stock'))->render();
            return response()->json(['stock'=>$html]);
    }
}
