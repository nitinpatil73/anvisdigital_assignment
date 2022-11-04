<?php 
namespace App\Controllers;
use App\Models\GuestModel;
use CodeIgniter\Controller;
class GuestController extends Controller
{
    public function index(){
        $GuestModel = new GuestModel();
        $data['guest_data'] = $GuestModel->orderBy('id', 'DESC')->findAll();
        return view('guest_view', $data);
    }

    public function create(){
        return view('add_guest');
    }
 
    public function store() {
        $GuestModel = new GuestModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'mobile_no'  => $this->request->getVar('mobile_no'),
            'how_many_adults'  => $this->request->getVar('how_many_adults'),
            'how_many_children'  => $this->request->getVar('how_many_children'),
            'in'  => $this->request->getVar('in'),
            'out'  => $this->request->getVar('out'),
            'room_category'  => $this->request->getVar('room_category'),
        ];
        //print_r($data); exit();
        $GuestModel->insert($data);
        return $this->response->redirect(site_url('/guest-list'));
    }
}