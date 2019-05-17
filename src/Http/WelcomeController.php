<?php

namespace Dovemad\Welcome\Http;

class WelcomeController
{
    public function welcome($name = null)
    {
        return view('dovemadwelcome::welcome', compact('name'));
    }
}
