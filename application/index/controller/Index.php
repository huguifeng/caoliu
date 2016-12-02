<?php
namespace app\index\controller;
use app\index\model\User;
class Index
{
    public function index()
    {
       
    	$date = User::onlyTrashed()->select();
    	dump($date);
    }
}
