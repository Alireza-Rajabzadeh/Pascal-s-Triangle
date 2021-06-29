@extends('Master.Master')
@section('title', 'مثلث خیام پاسکال به زبان PHP')
@section('content')
    <section class="content-section mt-5">
        <div class="article-list">
            <div class="container">
                <div class="intro shadow-lg rounded-top p-5 my-5 bg-light">
                    <h2 class="text-center">مثلث خیام پاسکال به زبان PHP</h2>
                    <p>
                        <b>مثلث خیام</b>: مثلث خیام پاسکال یک آرایش مثلثی از ضرایب بسط دو جمله است. یکی از مسائل مهم
                        برنامه
                        نویسی، مسئله مثلث
                        خیام پاسکال است.
                        روش کار به این صورت است که مجموع مقادیر دو خانه ی ردیف قبل در مثلث مقدار خانه ی ردیف فعلی را به
                        ما
                        میدهد و این عمل تا
                        بینهایت ادامه دارد .
                        <br>
                        در زیر به دو روش مقادیر این مثلث را مشخص میکنیم .
                    </p>
                </div>
                <div class="row articles justify-content-around">
                    <div class="col-sm-6 col-md-5 item shadow bg-light"><img class="img-fluid my-3"
                            src="/assets/img/pascal-1.jpg" />
                        <h4 class="name">مثلث خیام پاسکال با مجموع مقادیر دو خانه ی ردیف قبل</h4>
                        <hr>
                        <p class="description">
                            در این روش مجموع مقادیر دو خانه ی ردیف قبل در مثلث مقدار خانه ی ردیف فعلی را به ما میدهد و
                            این عمل تا
                            بینهایت ادامه دارد.
                        </p>
                        <form class="form-group" action="{{ route('Sum-Method') }}" method="get">
                            <div class="row justify-content-around align-items-center">
                                <input class="col-2 form-group" type="number" name="Line" min="0" max="20" value="10">
                                <button class="col-8 btn btn btn-block btn-primary mb-2">دیدن مثلث پاسکال</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6 col-md-5 item shadow bg-light"><img class="img-fluid my-3"
                            src="/assets/img/pascal-2.jpg" />
                        <h4 class="name">
                            مثلث خیام پاسکال با استفاده از فاکتوریل
                        </h4>
                        <hr>
                        <p class="description">
                            در این روش با استفاده از فرمول فاکتوریل مثلث خیام پاسکال مقادیر هر خانه را محاسبه میکنیم .
                        </p>
                        <form class="form-group" action="{{ route('Factorial-Method') }}" method="get">
                            <div class="row justify-content-around align-items-center">
                                <input class="col-2 form-group" type="number" name="Line" min="0" max="20" value="10">
                                <button class="col-8 btn btn btn-block btn-primary mb-2">دیدن مثلث پاسکال</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
