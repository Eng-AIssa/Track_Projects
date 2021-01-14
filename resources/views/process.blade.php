<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project Info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{--You're logged in!--}}

            @if($my_process == null)
                <div class="row ">
                    <div class="input-group mb-3 d-flex justify-content-center">
                        <form method="POST" action="{{route('find_process')}}">
                            @csrf
                            <button class="btn btn-outline-secondary" type="submit" id="process_search" name="process_search">Search</button>
                            <input type="text" class="" id="process_number" name="process_number" placeholder="Project ID" >
                        </form>
                    </div>
                </div>


            @elseif($my_process == 'none')
                <div class="row d-flex justify-content-center">
                    <h1 class="m-5 d-flex justify-content-center">
                        لا يوجد مشروع بهذا الرقم
                    </h1>
                </div>
                <div class="row d-flex justify-content-center">
                    <a class="btn m-3 btn-size centralized" href="{{route('my_process')}} " >Back</a>
                    <a class="btn  m-3 btn-size centralized" href="{{route('dashboard')}} " >Home</a>
                </div>

            @else


                <div class="input-group mb-3 d-flex justify-content-center">
                    <form method="post" action="{{route('find_process')}}">
                        @csrf
                        <button class="btn btn-outline-secondary" type="submit" id="process_search" name="process_search">Search</button>
                        <input type="text" class="" id="process_number" name="process_number" placeholder="Project ID" >
                    </form>
                </div>



                <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1">

                    <div class=" a process-header">
                        <div class="process-body rounded">
                            مدخل المشروع<br>
                            <h5 class="text-danger mt-3"> {{$my_process->creator}}</h5>
                        </div>
                    </div>
                    <div class=" a process-header">
                        <div class="process-body rounded">
                            اليوم
                            <br><h5 class="text-danger mt-3"> {{$my_process->day}}  </h5>
                        </div>
                    </div>
                    <div class=" a process-header">
                        <div class="process-body rounded">
                            التاريخ
                            <br><h5 class="text-danger mt-3"> {{$my_process->date}} </h5>
                        </div>
                    </div>



                    <div class=" a process-header">
                        <div class="process-body rounded">
                            رقم المعاملة
                            <br><h5 class="text-danger mt-3">{{$my_process->work_order_number}} </h5>
                        </div>
                    </div>
                    <div class=" a process-header">
                        <div class="process-body rounded">
                            نوع العمل
                            <br><h5 class="text-danger mt-3"> {{$my_process->business_type}} </h5>
                        </div>
                    </div>
                    <div class=" a process-header">
                        <div class="process-body rounded">
                            نوع العميل
                            <br><h5 class="text-danger mt-3"> {{$my_process->agent_type}} </h5>
                        </div>
                    </div>



                    <div class=" a process-header">
                        <div class="process-body rounded">
                            اسم العميل
                            <br><h5 class="text-danger mt-3"> {{$my_process->agent_name}} </h5>
                        </div>
                    </div>
                    <div class=" a process-header">
                        <div class="process-body rounded">
                            اسم المشروع
                            <br><h5 class="text-danger mt-3"> {{$my_process->project_name}} </h5>
                        </div>
                    </div>
                    <div class=" a process-header ">
                        <div class="process-body rounded">
                            بريد واصل
                            <br><h5 class="text-danger mt-3"> {{$my_process->wasel_mail}} </h5>
                        </div>
                    </div>



                    <div class=" a process-header">
                        <div class="process-body rounded">
                            البريد الالكتروني
                            <br><h5 class="text-danger mt-3"> {{$my_process->email}} </h5>
                        </div>
                    </div>
                    <div class=" a process-header">
                        <div class="process-body rounded">
                            الهاتف
                            <br><h5 class="text-danger mt-3"> {{$my_process->telephone}} </h5>
                        </div>
                    </div>
                    <div class=" a process-header ">
                        <div class="process-body rounded">
                            الجوال
                            <br><h5 class="text-danger mt-3"> {{$my_process->phone}} </h5>
                        </div>
                    </div>



                    <div class=" a process-header">
                        <div class="process-body rounded">
                            اسم المدير
                            <br><h5 class="text-danger mt-3"> {{$my_process->principal_name}} </h5>
                        </div>
                    </div>
                    <div class=" a process-header">
                        <div class="process-body rounded">
                            العنوان
                            <br><h5 class="text-danger mt-3"> {{$my_process->address}} </h5>
                        </div>
                    </div>
                    <div class=" a process-header ">
                        <div class="process-body rounded">
                            تقرير العمل
                            <br><h5 class="text-danger mt-3"> {{$my_process->work_report}} </h5>
                        </div>
                    </div>



                    <div class=" a process-header">
                        <div class="process-body rounded">
                            المرفقات
                            <br><h5 class="text-danger mt-3"> {{$my_process->attachments}} </h5>
                        </div>
                    </div>
                    <div class=" a process-header">
                        <div class="process-body rounded">
                            السعر
                            <br><h5 class="text-danger mt-3"> {{$my_process->price}} </h5>
                        </div>
                    </div>
                    <div class=" a process-header ">
                        <div class="process-body rounded">
                            المهندس الموكل
                            <br><h5 class="text-danger mt-3"> {{$my_process->user->name}} </h5>
                        </div>
                    </div>



                    <div class=" a process-header">
                        <div class="process-body rounded">
                            تسديد كامل المبلغ
                            <br><h5 class="text-danger mt-3"> {{$my_process->fall_price_check}} </h5>
                        </div>
                    </div>
                    <div class=" a process-header">
                        <div class="process-body rounded">
                            تسديد نصف المبلغ
                            <br><h5 class="text-danger mt-3"> {{$my_process->half_price_check}} </h5>
                        </div>
                    </div>
                    <div class=" a process-header ">
                        <div class="process-body rounded">
                            لايوجد على العميل مبالغ مالية
                            <br><h5 class="text-danger mt-3"> {{$my_process->dept}} </h5>
                        </div>
                    </div>

                </div>
                <div class="row d-flex justify-content-center">
                    <a class="btn  m-3 btn-size centralized" href="{{route('home')}} " >Home</a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
