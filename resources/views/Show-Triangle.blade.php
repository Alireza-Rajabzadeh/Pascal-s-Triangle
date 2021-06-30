@extends('Master.Master')
{{-- By checking the value of $title that defined in 'KhayamController' we will recognise which of our methods used --}}
@if ($title == 'FactorialModel')
    @section('title', 'مثلث خیام با استفاده از فرمول فاکتوریل')
    @section('content')
        <div class="intro shadow-lg rounded-top p-5 my-5 bg-light">
            <h4>مثلث خیام با استفاده از فرمول فاکتوریل</h4>
            <p>
                دز زیر با استفاده از فرمول فاکتوریل مثلث خیام پاسکال مقادیر هر سلول به دست آمده است .
            </p>
            <p class="text-left "><b> Cell[L][N] = L! / (N! * (L-N)! )</b></p>
            <p>که در آن L سطر مثلث و N شماره سلول در آن سطر است .</p>
        </div>
        <section class=" mt-5 px-1">
            <div class="bg-light shadow-lg  py-5 ">
                @foreach ($Pascal as $item)
                    <div class="row justify-content-center">
                        @foreach ($item as $Cell)
                            @if (count($item) % 2 == 0)
                                <div style="width: 60px ; background-color: rgb(35, 0, 236) ; transition: transform 0.3s;"
                                    onMouseOver="this.style.transform='scale(1.2)'"
                                    onMouseOut="this.style.transform='scale(1)'"
                                    class="border small yekan text-light text-center">
                                    {{ $Cell }}
                                </div>
                            @else
                                <div style="width: 60px ; background-color: rgb(236, 8, 0) ; transition: transform 0.3s;"
                                    onMouseOver="this.style.transform='scale(1.2)'"
                                    onMouseOut="this.style.transform='scale(1)'"
                                    class="border small yekan text-light text-center">
                                    {{ $Cell }}
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
        </section>
        <hr>
        <form class="row justify-content-center form-group my-3" action="{{ route('Factorial-Method') }}" method="get">
            <div class="col-6">
                <div class="row">
                    <input class="col-2 form-group mx-1" type="number" name="Line" min="0" max="20" value="10">
                    <button class="col-9 btn btn btn-block btn-primary mb-2 mx-1">بارگذاری مجدد</button>
                </div>
            </div>
        </form>
        <hr>
        <div class="row justify-content-center">
            <a href="/" class="col-6 btn btn-block btn-danger">
                رفتن به صفحه اصلی
            </a>
        </div>
    @endsection
@endif
@if ($title == 'SumMethod')
    @section('title', 'مثلث خیام با استفاده جمع سلول ها')

    @section('content')
        <div class="intro shadow-lg rounded-top p-5 my-5 bg-light">
            <h4>مثلث خیام با استفاده جمع سلول ها</h4>
            <p>
                با استفاده از فرمولی که در زیر مشاهده میکنید ، مقدار هر سلول را نسبت به دو سلول بالایی آن محاسبه کرده
                ایم .
                <br>
            </p>
            <p class="text-left "><b> Cell[L][N] = Cell[L-1][N-1] + Cell[L-1][N] </b></p>
            <p>که در آن L سطر مثلث و N شماره سلول در آن سطر است .</p>
        </div>
        <section class=" mt-5 px-1">
            <div class="bg-light shadow-lg  py-5 ">
                @foreach ($Pascal as $item)
                    <div class="row justify-content-center">
                        @foreach ($item as $Cell)
                            @if (count($item) % 2 == 0)
                                <div style="width: 60px ; background-color: rgb(35, 0, 236) ; transition: transform 0.3s;"
                                    onMouseOver="this.style.transform='scale(1.2)'"
                                    onMouseOut="this.style.transform='scale(1)'"
                                    class="border small yekan text-light text-center">
                                    {{ $Cell }}
                                </div>
                            @else
                                <div style="width: 60px ; background-color: rgb(236, 8, 0) ; transition: transform 0.3s;"
                                    onMouseOver="this.style.transform='scale(1.2)'"
                                    onMouseOut="this.style.transform='scale(1)'"
                                    class="border small yekan text-light text-center">
                                    {{ $Cell }}
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
        </section>
        <hr>
        <form class=" row justify-content-center form-group my-3" action="{{ route('Sum-Method') }}" method="get">
            <div class="col-6">
                <div class="row">
                    <input class="col-2 form-group mx-1" type="number" name="Line" min="0" max="20" value="10">
                    <button class="col-9 btn btn btn-block btn-primary mb-2 mx-1">بارگذاری مجدد</button>
                </div>
            </div>
        </form>
        <hr>
        <div class="row justify-content-center">
            <a href="/" class="col-6 btn btn-block btn-danger">
                رفتن به صفحه اصلی
            </a>
        </div>
    @endsection
@endif
