<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearchController extends Controller
{
    function index()
    {
        $tickets = Tickets::all();
        return view('tickets.index',['tickets' => $tickets]);
    }

    function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '') {
                $data = DB::table('customers')
                    ->where('Titre', 'like', '%'.$query.'%')
                    ->orWhere('Description', 'like', '%'.$query.'%')
                    ->orWhere('Statut', 'like', '%'.$query.'%')
                    ->orderBy('id', 'desc')
                    ->get();

            } else {
                $data = DB::table('tickets')
                    ->orderBy('id', 'desc')
                    ->get();
            }

            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $row)
                {
                    $output .= '
                    <tr>
                    <td>'.$row->Titre.'</td>
                    <td>'.$row->Description.'</td>
                    <td>'.$row->Statut.'</td>
                    </tr>
                    ';
                }
            } else {
                $output = '
                <tr>
                    <td align="center" colspan="5">Aucun resultat </td>
                </tr>
                ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }
}
