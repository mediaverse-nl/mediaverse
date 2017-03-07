<?php

namespace App\Http\Controllers;

use App\Page;

use App\TextEditor;

use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    protected $page;
    protected $projects;

    public function __construct()
    {
        $this->page = TextEditor::where('page', \Route::getFacadeRoot()->current()->getActionName())->first();
        $this->projects = new Project();
    }

    public function home(){
        return view('home')->with('portfolio', $this->projects->where('status', 'ready')->get()->take(3));
    }

    //web applicaties
    public function websites()
    {
        return view('pages.websites')->with('content', $this->page);
    }

    public function laravelWebsites()
    {
        return view('pages.laravel-websites')->with('content', $this->page);
    }

    public function diensten()
    {
        return view('pages.diensten')->with('content', $this->page);
    }

    public function contentManagement()
    {
        return view('pages.content-management')->with('content', $this->page);
    }

    public function hostingService()
    {
        return view('pages.hosting-service')->with('content', $this->page);
    }

    //internetmarketing
    public function internetMarketing()
    {
        return view('pages.zoekmachine-optimalisatie')->with('content', $this->page);
    }

    public function vindbaarheid()
    {
        return view('pages.vindbaar-google')->with('content', $this->page);
    }

    public function SEO()
    {
        return view('pages.seo')->with('content', $this->page);
    }

    //webwinkel
    public function webshops()
    {
        return view('pages.webshop')->with('content', $this->page);
    }

    public function laravelWebshop()
    {
        return view('pages.laravel-webshop')->with('content', $this->page);
    }

    public function onderhoud()
    {
        return view('pages.onderhoud')->with('content', $this->page);
    }

    //Visueel
    public function photography()
    {
        return view('pages.photography')->with('content', $this->page);
    }

    public function logoIllustratie()
    {
        return view('pages.logo-illustratie')->with('content', $this->page);
    }

    public function design()
    {
        return view('pages.design')->with('content', $this->page);
    }

    //other pages
    public function overOns()
    {
        return view('pages.over-ons')->with('content', $this->page);
    }

    public function sitemap()
    {
        return view('pages.sitemap')->with('content', $this->page);
    }

    public function applicaties()
    {
        return view('pages.applicatie')->with('content', $this->page);
    }

    public function privacy()
    {
        return view('pages.privacy-verklaring')->with('content', $this->page);
    }

    public function algemeneVoorwaarden()
    {
        return view('pages.algemene-voorwaarden')->with('content', $this->page);
    }


}
