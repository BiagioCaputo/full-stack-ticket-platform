<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Operator;
use App\Models\Ticket;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        $categories = Category::all();
        return view('admin.dishes.index', compact('tickets','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        // return view('admin.dishes.create',compact('categories'));
        // Ottengo gli operatori disponibili
        $available_operators = Operator::where('available', 1)->whereNull('ticket_id')->get();


        return view('admin.dishes.create', compact('available_operators','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | max:255',
            'description' => 'required',
            'status' => 'required',
        ]);

        $addTicket = $request->all();

        $newTicket = new Ticket();
        $newTicket->fill($addTicket);

        $newTicket->save();

        // Assegno gli operatori al ticket
        $operators = $request->input('operators', []);
        foreach ($operators as $operator_id) {
            $operator = Operator::find($operator_id);
            if ($operator) {
                $operator->ticket_id = $newTicket->id;
                $operator->save();
            }
        }

        return redirect()->route('dashboard.tickets.index', ['ticket' => $newTicket->id]);

        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {

        // Trovo gli operatori associati al ticket selezionato
        $operators = Operator::where('ticket_id', $ticket->id)->get();

        return view('admin.dishes.show', compact('ticket', 'operators'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
