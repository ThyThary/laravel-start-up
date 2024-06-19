@extends('layouts.master')
@section('content')
    <form method="POST" name='frmPro' id="frmPro">
        <div class="bg-white absolute min-w-[400px] min-h-[500px] top-[50%] left-[50%] rounded-2xl translate-y-[-50%] translate-x-[-50%] shadow-2xl">
            <div class="relative m-5 min-h-32 rounded-md max-h-32 bg-cover">
                <img class="h-32 w-full rounded-md" src="https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg?size=626&ext=jpg&ga=GA1.1.2116175301.1718668800&semt=sph">
            </div>
            <div class=" absolute translate-y-[-63px] flex w-full justify-center">
                <img class="min-w-[90px] min-h-[90px] w-[90px] rounded-full" src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png " alt="profile">
            </div>
            <div class="flex flex-col justify-center text-center translate-y-10 m-5">
                <h4 class="text-teal-900 text-xl font-bold inline-block">Srong Sokleap</h4>
                <p for="accountant" class=" text-base font-normal mb-2">Accountant</p>
                <textarea name="message" id="message" cols="7" rows="4" class="inputStyle" placeholder="message"></textarea>
            </div>
            <div class=" flex flex-col ml-auto items-end translate-y-[100px] m-5">
                <button type="button" onclick="post()" class="bg-sky-500 rounded-md px-4 py-1 text-white font-medium max-w-16 wave-affect hover:bg-sky-400 shadow-md"> Save</button>
            </div>
        </div>
    </form>
@endsection 