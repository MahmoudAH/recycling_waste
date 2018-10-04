<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Contact;
use App\Order;
use App\USer;
use App\Mail\newOrder;
use App\Notifications\RecievedOrder;
use Illuminate\Support\Facades\Auth;
use App\Events\OrderExist;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $request->validate([

            'city' => 'required|not_in:0',
            'return' => 'required|not_in:0'
        ]);
//        $user = Auth::user();
//'user_id' => auth()->user()->id
        //            'user_id' => Auth::user()->id ,

        $order = Order::create([
            // $habit->user_id = auth()->user()->id;
            'user_id' => auth()->user()->id,
            'city' => $request->city,
            'return' => $request->return,
            //'toppings' => implode(', ', $request->toppings),
            'glass' => $request->glass,
            'paper' => $request->paper,
            'steal' => $request->steal,
            'food' => $request->food,
            'plastic-bages' => $request->plastic_bages,
            'kanz_containers' => $request->kanz_containers,
            'plastic_containers' => $request->plastic_containers,
            'electronic' => $request->electronic,
            'instructions' => $request->instructions,
        ]);

      
     // $user = Auth::user();
       event(new OrderExist($order));


      //$phone=Auth::user()->phone;
      //\Notification::send($user, new RecievedOrder($phone));
     /*
         $result=DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('order.id','user.id')
            ->get();
*/
        return redirect()->route('user.makeorder.show',$order)->with('message', 'Order received!');
        //return back();
          
     
     //  event(new OrderExist($order));

    }

/*   public function sendordermail(Request $request,Order $order)
   {
        $order = Order::findOrFail($order);

     \Mail::to('mah199645@gmail.com')
     ->send(new newOrder($order));
  }
*/
   
   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
 //$user=User::find($id);
//$user = DB::table('users')->where('id', '=', $id)->increment('points',10);
      $user = Auth::user()->increment('points',10);

        return view('show', compact('order'));
    }

    


    public function manageorders(){
            $orders=Order::all();
        return view('admin.manage.manageorders',compact('orders'));
    }
    //event(new AddPoint($user));

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
