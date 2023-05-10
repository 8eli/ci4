<?php namespace App\Controllers;


use App\Models\TableModel;

class TableController extends BaseController
{
    public function index()
    {
        $opinion = new TableModel();
        $data['opinions'] = $opinion->findAll();
        return view('form/index.php', $data);
    }

    public function store()
    {
        $opinions = new TableModel();
        $data = [
                'email' => $this->request->getPost('email'),
                'name' => $this->request->getPost('name'),
                'comment' => $this->request->getPost('comment')
            ];
        $opinions->save($data);
        return redirect('form');
    }     

    public function edit($id = null)
    {
        $opinion = new TableModel();
        $data['opinion'] = $opinion->find($id);
        return view('form/edit.php', $data); 
    }
    
   public function update($id = null)
   {
        $opinion = new TableModel();
        $data = [
            'email' =>$this->request->getPost('email'),
            'name' =>$this->request->getPost('name'),
            'comment' =>$this->request->getPost('comment')
        ];
        $opinion->update($id, $data);
        return redirect()->to(base_url('form'));
   }

    public function delete($id = null)
    {
        $opinion = new TableModel();
        $opinion->delete($id);
        return redirect()->back();
    }

    public function editv($id = null)
    {
        $opinion = new TableModel();
        $data['opinion'] = $opinion->find($id);
        return view('form/view', $data); 
    }
}