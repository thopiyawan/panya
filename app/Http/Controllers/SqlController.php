<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SqlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        
        $user->firstname = request('firstname');
        $user->lastname = request('lastname');
        $user->age = request('age');
        $user->tel_number = request('tel_number');
        $user->email = request('email');
        $user->addr = request('addr');
        $user->addr_sub_dist = request('addr_sub_dist');
        $user->addr_dist = request('addr_dist');
        $user->addr_prov = request('addr_prov');
        $user->addr_postal_code = request('addr_postal_code');
        $user->career = request('career');
        $user->edu_faculty = request('edu_faculty');
        $user->edu_major = request('edu_major');
        $user->edu_place = request('edu_place');
        $user->edu_level = request('edu_level');
        $user->save();


        $httpClient = new CurlHTTPClient(LINE_MESSAGE_ACCESS_TOKEN);
        $bot = new LINEBot($httpClient, array('channelSecret' => LINE_MESSAGE_CHANNEL_SECRET));
        $Message1 =  'ลงทะเบียนเรียบร้อย';
        $textMessageBuilder = new TextMessageBuilder($Message1);
        $response = $bot->pushMessage( $user_id_line ,$textMessageBuilder);
        $response->getHTTPStatus() . ' ' . $response->getRawBody();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
