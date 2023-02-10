<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index()
    // {
    //     return view('welcome_message');
    // }

    public function index()
    {
        $data = [
            'title' => 'Knowldege Service Excellence',
            'name' => 'home',
            'meta_title' => 'Prism IPR Homepage',
            'meta_description' => 'We are IP Services experts, proficient in delivering proven, predictidble, and repetable quality of service.'
        ];
        return view('homepage', $data);

    }
    public function about()
    {
        $data = [
            'title' => 'Meet Us',
            'name' => 'about',
            'meta_title' => 'Get to know Prism IP',
            'meta_description' => 'Know the team Prism IP, and how they are delivering world-class services'
        ];
        return view('about', $data);

    }

    public function analytics()
    {
        $data = [
            'title' => 'Analytics',
            'name' => 'analytics',
            'meta_title' => 'IP Analytics',
            'meta_description' => 'Know the team Prism IP, and how they are delivering world-class services'
        ];
        return view('analytics', $data);

    }

    public function protection()
    {
        $data = [
            'title' => 'Statutory Protection',
            'name' => 'protection',
            'meta_title' => 'IP Protection',
            'meta_description' => 'Know the team Prism IP, and how they are delivering world-class services'
        ];
        return view('protection', $data);

    }

    public function transaction()
    {
        $data = [
            'title' => 'IP Transactions',
            'name' => 'transaction',
            'meta_title' => 'IP Transactions',
            'meta_description' => 'Know the team Prism IP, and how they are delivering world-class services'
        ];
        return view('transactions', $data);

    }

    public function scouting()
    {
        $data = [
            'title' => 'Technology Scouting',
            'name' => 'scouting',
            'meta_title' => 'Technology Scouting',
            'meta_description' => 'Know the team Prism IP, and how they are delivering world-class services'
        ];
        return view('scouting', $data);

    }

    public function green()
    {
        $data = [
            'title' => 'Green Initiative',
            'name' => 'green',
            'meta_title' => 'Green Initiative',
            'meta_description' => 'Know the team Prism IP, and how they are delivering world-class services'
        ];
        return view('green', $data);

    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'name' => 'contact',
            'meta_title' => 'Contact us for more information',
            'meta_description' => 'For any Intellectual Property related services, contact Team Prism IP. We will help with all your IP needs.'
        ];
        return view('contact', $data);

    }

    public function privacy()
    {
        $data = [
            'title' => 'Privacy Policy',
            'name' => 'privacy',
            'meta_title' => 'Prism IP Privacy Policy',
            'meta_description' => 'Prism IP Privacy Policy'
        ];
        return view('privacy', $data);

    }
}
