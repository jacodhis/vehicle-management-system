<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\OrderContract;
use App\Http\Controllers\BaseController;
use DB;
use App\Models\Support\booking;

class OrderController extends BaseController
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        $orders = $this->orderRepository->listOrders();
        $this->setPageTitle('Orders', 'List of all orders');
        return view('admin.orders.index', compact('orders'));
    }

    public function bookingindex()
    {
        $orders =  DB::select('select * from booking');
        $this->setPageTitle('booking', 'List of all booking');
        return view('admin.booking.index', compact('orders'));
    }

    public function feedbackindex()
    {
        $orders =  DB::select('select * from mailing_list');
        $this->setPageTitle('Feedback', 'List of all feedback');
        return view('admin.feedback.index', compact('orders'));
    }

    public function show($orderNumber)
    {
        $order = $this->orderRepository->findOrderByNumber($orderNumber);

        $this->setPageTitle('Order Details', $orderNumber);
        return view('admin.orders.show', compact('order'));
    }

    public function bookingshow($id)
    {
        $order =  DB::table('booking')->where('id', $id)->first();

        $this->setPageTitle('Booking Details', ':');
        return view('admin.booking.show', compact('order'));
    }

    public function feedbackshow($id)
    {
        $order =  DB::table('mailing_list')->where('id', $id)->first();

        $this->setPageTitle(' User Feedback', ':');
        return view('admin.feedback.show', compact('order'));
    }
    public function approved($id)
    {
        $name = "Y";
      DB::update('update booking set  status = ? where id = ?',[$name,$id]);

      $this->setPageTitle('Booking approved', ':');
        return redirect()->back()->with('message', 'Successfully Approved.');
    }
}
