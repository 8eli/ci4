<?php namespace App\Controllers;

use App\Models\Table;
class TableController extends BaseController
{
    public function index()
    {
        $user = new Table();
        $data['table'] = $user->findAll();
        return view('table.php', $data);
    }
    public function create()
    {
        return view('table/create');
    }

    public function store()
    {
      $table = new Table();
      $data = [
        'email' => $this->request->getPost('email'),
        'name' => $this->request->getPost('name'),
        'comment' => $this->request->getPost('comment'),

      ];
       $table->save($data);
       return redirect('contact')->with('status','Table store succesfully');

    }
}