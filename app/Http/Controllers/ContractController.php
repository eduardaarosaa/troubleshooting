<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Model\Contract\Contract;
use Model\Customer\Customer;
use Model\Customer\CustomerRepository;
use Model\ContractItems\Item;
use App\Http\View\Composers\CurrentDateComposer;




class ContractController extends Controller
{
    public function show($contract_id,$customer_id, CustomerRepository $customerRepository, CurrentDateComposer $currentDateComposer){

        $customer = $customerRepository->get($customer_id,$contract_id);

        $loren = $customer->contract()->first()['contract_id'];

        $contract_items = Item::all();


        $date = $currentDateComposer->compose();

        $dia = $date->current_date;

        return view('contract/show', compact('customer','dia', 'loren','contract_items'));
    }
}
