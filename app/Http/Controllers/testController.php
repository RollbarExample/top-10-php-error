<?php
namespace App\Http\Controllers;
//ini_set('memory_limit','100MB');
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class testController extends Controller
{
    public function index()
    {
        $this-> error_1();
        //$this-> error_2();
        //$this-> error_3();
        //$this-> error_4();
        //$this-> error_5();
        //$this-> error_6();
        //$this-> error_7();
        //$this-> error_9();
        //$this-> error_10();
        return "";
    }

    function error_1(){
        $test= "test";
    }


    function error_2(){
        $y_exceptions = null;
        foreach($y_exceptions as $thisException) {

        }
    }
    function error_3(){
        $user_name="Wahid2";
        $password="12345";
        $data=array('user_name'=>$user_name,'password'=>$password);
        DB::table('testtable')->insert($data);
    }
    function error_4(){
        $user_name="test";
        $data=array('user_name'=>$user_name);
        DB::table('testtable')->insert($data);
    }

    function error_5(){
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://httpbin.org/status/404');
    }

    function error_6(){
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://httpbin.org/status/503');
    }

    function error_7(){
        $user_name="test";
        $data=array('user_name'=>$user_name);
        DB::table('testtable1')->insert($data);
    }

    function error_9(){
        $cards = Card::all();
    }
    function error_10(){
        Schema::create('users5', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('email', 340);
            $table->boolean('confirmed')->default(true);
            $table->timestamps();
            $table->unique('email', 'users_email_uniq');
        });
    }

}
