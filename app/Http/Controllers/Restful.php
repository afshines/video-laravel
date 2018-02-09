<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface Restful
{
    public function index(Request $request,$id=null);
    public function create();
    public function store(Request $request);
    public function show($id);
    public function edit($id);
    public function update(Request $request,$id);
    public function destroy($id);
}