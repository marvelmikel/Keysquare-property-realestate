<?php

namespace App\Http\Controllers;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Base\Supports\RepositoryHelper;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\Location\Repositories\Interfaces\CityInterface;
use Botble\RealEstate\Enums\PropertyTypeEnum;
use Botble\RealEstate\Models\Account;
use Botble\RealEstate\Repositories\Interfaces\AccountInterface;
use Botble\RealEstate\Repositories\Interfaces\ProjectInterface;
use Botble\RealEstate\Repositories\Interfaces\PropertyInterface;
use Botble\Theme\Http\Controllers\PublicController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use RealEstateHelper;
use SeoHelper;
use Theme;
use Mail;
use Theme\FlexHome\Http\Resources\AgentHTMLResource;
use Theme\FlexHome\Http\Resources\PostResource;
use Theme\FlexHome\Http\Resources\PropertyHTMLResource;
use Theme\FlexHome\Http\Resources\PropertyResource;
use App\Models\Carier;

class CarierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function c()
    {
        return view('c');
    }
    public function video()
    {
        return view('video');
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'job_position' => 'required',
            'qualification' => 'required',
            // 'file' => 'required',
        ]);

        $data = array(
            'name'=> $request->name,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'job_position'=> $request->job_position,
            'qualification'=> $request->qualification,
            
        );
        $name = $request->name;
        $files = $request->file('file');

        Mail::send('email.career', compact('data'), function($message) use($request, $files,$name){
            $message->to('keysquareservices@gmail.com');
            $message->subject('Received New CV from '.$name);
            $message->from('keysquareservices@gmail.com');
            
                $message->attach($files->getRealPath(), array(
                    'as' => $files->getClientOriginalName(), // If you want you can chnage original name to custom name      
                    'mime' => $files->getMimeType())
                );
            
            
        });  

        $notify[] = ['success', 'Your submission has successfully been received'];
        return redirect("/careers")->withNotify($notify);
       
        // Carier::create($request->all());

        // return redirect()->route('career')->with('Success', 'Career created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carier  $carier
     * @return \Illuminate\Http\Response
     */
    public function show(Carier $carier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carier  $carier
     * @return \Illuminate\Http\Response
     */
    public function edit(Carier $carier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carier  $carier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carier $carier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carier  $carier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carier $carier)
    {
        //
    }
}
