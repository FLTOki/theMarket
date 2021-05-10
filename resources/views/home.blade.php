@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"><!--justify-content-center-->
        <div class="col-3 p-5">
            <img src="svg/undraw_web_shopping_dd4l.svg" alt="" width="200px" height="200px">
        </div>
        <div class="col-9 p-5 text-center">
            <div>
                <h2>THE MARKET</h2>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel magni obcaecati harum, ullam, sed sapiente maxime tempora, id modi sunt nam inventore necessitatibus nihil odio molestias earum. Magni, dolores et.</p>
            </div>
            <div>
                <a href="#" class="btn btn-outline-dark">
                    SHOP
                    <img src="svg/cartlogo.svg" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4 text-center">
            <h2>Household</h2>
            <a href="#"><img src="https://images.unsplash.com/photo-1583241475880-083f84372725?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8aG91c2Vob2xkfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" class="w-100"></a>
            <p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum aperiam ipsum dignissimos repudiandae sed culpa tempora officia doloremque rem in, mollitia impedit similique fuga consequatur quaerat delectus, accusantium consequuntur dolorem.</p>
            <a href="#" class="btn btn-outline-dark">Shop</a>
        </div>
        <div class="col-4 text-center">
            <h2>Tech</h2>
            <a href="#"><img src="https://images.unsplash.com/photo-1504610926078-a1611febcad3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dGVjaHxlbnwwfDJ8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" class="w-100"></a>
            <p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum aperiam ipsum dignissimos repudiandae sed culpa tempora officia doloremque rem in, mollitia impedit similique fuga consequatur quaerat delectus, accusantium consequuntur dolorem.</p>
            <a href="#" class="btn btn-outline-dark">Shop</a>
        </div>
        <div class="col-4 text-center">
            <h2>Party</h2>
            <a href=""><img src="https://images.unsplash.com/photo-1618611627105-74f7567bc6a2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fGFsY29ob2x8ZW58MHwyfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="" class="w-100"></a>
            <p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum aperiam ipsum dignissimos repudiandae sed culpa tempora officia doloremque rem in, mollitia impedit similique fuga consequatur quaerat delectus, accusantium consequuntur dolorem.</p>
            <a href="#" class="btn btn-outline-dark">Shop</a>
        </div>
    </div>

</div>
@endsection
