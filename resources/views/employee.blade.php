<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if($my_user == null)
                <div class="row ">

                    <div class="input-group mb-3 d-flex justify-content-center">
                        <form method="post" action="{{route('details')}}">
                            @csrf
                            <button class="btn btn-outline-secondary" type="submit" id="process_search" name="process_search">Search</button>
                            <input type="text" class="" id="user_id" name="user_id" placeholder="User ID" >
                        </form>
                    </div>

                </div>

            @elseif($my_user == 'none')
                <div class="row d-flex justify-content-center">
                    <h1 class="m-5 d-flex justify-content-center">
                        لا يوجد مستخدم بالرقم المدخل
                    </h1>
                </div>
                <div class="row d-flex justify-content-center">
                    <a class="btn m-3 btn-size centralized" href="{{route('show_details')}}" >Back</a>
                    <a class="btn  m-3 btn-size centralized" href="{{route('home')}} " >Home</a>
                </div>

            @else
                <div class="row ">

                    <div class="input-group mb-3 d-flex justify-content-center">
                        <form method="post" action="{{route('details')}}">
                            @csrf
                            <button class="btn btn-outline-secondary" type="submit" id="process_search" name="process_search">Search</button>
                            <input type="text" class="" id="user_id" name="user_id" placeholder="User ID" >
                        </form>
                    </div>

                </div>

                <div class="row">
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            الرقم الوظيفي<br>
                            <h5 class="text-danger mt-3"> {{$my_user->employee_id}}</h5>
                        </div>
                    </div>
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            الاسم
                            <br><h5 class="text-danger mt-3"> {{$my_user->name}}  </h5>
                        </div>
                    </div>
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            الجنس
                            <br><h5 class="text-danger mt-3"> {{$my_user->gender}} </h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            المنصب
                            <br><h5 class="text-danger mt-3">{{$my_user->position->name}} </h5>
                        </div>
                    </div>
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            الهاتف
                            <br><h5 class="text-danger mt-3"> {{$my_user->phone}} </h5>
                        </div>
                    </div>
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            الايميل
                            <br><h5 class=" text-danger mt-3"> {{$my_user->email}} </h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            الرقم الوطني
                            <br><h5 class="text-danger mt-3"> {{$my_user->national_id}} </h5>
                        </div>
                    </div>
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            الجنسية
                            <br><h5 class="text-danger mt-3"> {{$my_user->nationality}} </h5>
                        </div>
                    </div>
                    <div class="col-4 process-header ">
                        <div class="process-body rounded">
                            المنطقة
                            <br><h5 class="text-danger mt-3"> {{$my_user->region}} </h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            تاريخ الانضمام
                            <br><h5 class="text-danger mt-3"> {{$my_user->join_date}} </h5>
                        </div>
                    </div>
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            تاريخ انتهاء العقد
                            <br><h5 class="text-danger mt-3"> {{$my_user->contract_exp}} </h5>
                        </div>
                    </div>
                    <div class="col-4 process-header ">
                        <div class="process-body rounded">
                            تاريخ انتهاء الهوية
                            <br><h5 class="text-danger mt-3"> {{$my_user->iqama_exp}} </h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            الراتب الاساسي
                            <br><h5 class="text-danger mt-3"> {{$my_user->basic}} </h5>
                        </div>
                    </div>
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            بدل سكن
                            <br><h5 class="text-danger mt-3"> {{$my_user->housing}} </h5>
                        </div>
                    </div>
                    <div class="col-4 process-header ">
                        <div class="process-body rounded">
                            بدل مواصلات
                            <br><h5 class="text-danger mt-3"> {{$my_user->transportation}} </h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            بدلات اخرى
                            <br><h5 class="text-danger mt-3"> {{$my_user->other}} </h5>
                        </div>
                    </div>
                    <div class="col-4 process-header">
                        <div class="process-body rounded">
                            الراتب بالكامل
                            <br><h5 class="text-danger mt-3"> {{$my_user->total_salary}} </h5>
                        </div>
                    </div>
                    <div class="col-4 process-header ">
                        <div class="process-body rounded">
                            الايبان
                            <br><h5 class="text-danger mt-3"> {{$my_user->iban}} </h5>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <a class="btn  m-3 btn-size centralized" href="{{route('home')}} " >Home</a>
                    <a class="btn  m-3 btn-size centralized" href="{{route('employees')}} " >Back</a>
                </div>

            @endif

        </div>
    </div>
</x-app-layout>
