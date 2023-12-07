<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
  
class PDFController extends Controller
{
    public function index(){
        $users = User::get();
        return view('index',compact('users'));
    }

    public function generatePDF()
    {
        $users = User::get();
        $pdf = PDF::loadView('myPDF',[
            'users' => $users
        ]);
        return $pdf->download('itsolutionstuff.pdf');
        
    }
}   