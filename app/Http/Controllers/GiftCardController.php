<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GiftCardController extends Controller {
    
    
    public function showAll() {
        return view('home');
    }

    public function recept(Request $request) {
        $montant= htmlspecialchars( $request->montant);
        $beneficiaire= htmlspecialchars( $request->beneficiaire);
         $donateur= htmlspecialchars( $request->donateur);
$date=date('m-Y');
$num1=rand(0,9);
$num2=rand(0,9);

$numbon=$date.'-'.$num1.$num2;
       return view('giftcard',
    ['montant'=>$montant, 'beneficiaire'=>$beneficiaire, 'donateur'=>$donateur, 'numbon'=>$numbon]
    
    
    );
    }
}
