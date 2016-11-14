<?php

namespace App\Http\Controllers;

use App\Page;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    protected $page;

    public function __construct()
    {
//        $this->page = Page::where('page', \Request::route()->getPath())->first();
    }

    public function home(){
        return view('home')->with('seo', $this->page);
    }

    //web applicaties
    public function websites()
    {
        return view('pages.websites')->with('seo', $this->page);
    }

    public function laravelWebsites()
    {
        return view('pages.laravel-websites')->with('seo', $this->page);
    }

    public function contentManagement()
    {
        return view('pages.content-management')->with('seo', $this->page);
    }

    public function hostingService()
    {
        return view('pages.hosting-service')->with('seo', $this->page);
    }

    //internetmarketing
    public function internetMarketing()
    {
        return view('pages.zoekmachine-optimalisatie')->with('seo', $this->page);
    }

    public function vindbaarheid()
    {
        return view('pages.vindbaar-google')->with('seo', $this->page);
    }

    public function SEO()
    {
        return view('pages.seo')->with('seo', $this->page);
    }

    //webwinkel
    public function webshops()
    {
        return view('pages.webshop')->with('seo', $this->page);
    }

    public function laravelWebshop()
    {
        return view('pages.laravel-webshop')->with('seo', $this->page);
    }

    public function onderhoud()
    {
        return view('pages.onderhoud')->with('seo', $this->page);
    }

    //Visueel
    public function photography()
    {
        return view('pages.photography')->with('seo', $this->page);
    }

    public function logoIllustratie()
    {
        return view('pages.logo-illustratie')->with('seo', $this->page);
    }

    public function design()
    {
        return view('pages.design')->with('seo', $this->page);
    }

    //other pages
    public function overOns()
    {
        return view('pages.over-ons')->with('seo', $this->page);
    }

    public function sitemap()
    {
        return view('pages.sitemap')->with('seo', $this->page);
    }

    public function applicaties()
    {
        return view('pages.applicatie')->with('seo', $this->page);
    }

    public function privacy()
    {
        return view('pages.privacy-verklaring')->with('seo', $this->page);
    }

    public function algemeneVoorwaarden()
    {
        return view('pages.algemene-voorwaarden')->with('seo', $this->page);
    }


}
