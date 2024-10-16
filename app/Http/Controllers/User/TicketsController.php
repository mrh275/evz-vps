<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        $user = User::find(session()->get('user'));
        $tickets = Ticket::where('user_id', $user[0]->id)->get();

        $data = [
            'title' => 'Tickets',
            'activeMenu' => 'tickets',
            'user' => $user[0],
            'tickets' => $tickets
        ];

        return view('user.tickets', $data);
    }

    public function createTicket()
    {
        $user = User::find(session()->get('user'));

        $data = [
            'title' => 'Create Ticket',
            'activeMenu' => 'tickets',
            'user' => $user[0]
        ];

        return view('user.create-ticket', $data);
    }

    public function store(Request $request)
    {
        $user = User::find(session()->get('user'));

        try {
            $ticketCode = 'TCKT/' . fake()->unique()->randomNumber(5) . "/" . 'EVZ/' . date('m') . '/' . date('Y');

            $issuedTicket = Ticket::create([
                'user_id' => $user[0]->id,
                'ticket_code' => $ticketCode,
                'title' => $request->ticketTitle,
                'description' => $request->ticketDescription,
                'status' => 'open',
                'open_date' => date('Y-m-d H:i:s'),
            ]);

            return redirect()->route('user.tickets')->with([
                'status' => 200,
                'success' => 'Ticket has been issued successfully',
                'ticket' => $issuedTicket
            ]);
        } catch (\Exception $e) {
            return redirect()->route('user.issueTicket')->with([
                'status' => 500,
                'error' => 'Failed to issue ticket',
            ]);
        }
    }
}
