<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--You're logged in!--}}

                    <div class=" d-flex flex-md-row flex-column justify-content-around align-items-center mb-5">
                        <div class="text-center text-secondary"> <h4> اضافة مشروع</h4> <a class="btn btn-primary m-3 btn-size centralized "  href="{{route('Process.create')}}"  style=" background: url('img/process.jpg') no-repeat; background-size: contain "></a></div>
                        <div class="text-center text-secondary"> <h4> عرض تفاصيل مشروع </h4> <a class="btn btn-primary m-3 btn-size centralized" href="{{route('PSearch')}}" style=" background: url('img/search.jpg') no-repeat; background-size: contain"></a></div>
{{--                        <div class="text-center text-secondary"> <h4> عرض تفاصيل مشروع </h4><form method="get" action="Process/1"> @csrf<button type="submit" class="btn btn-primary m-3 btn-size centralized"   style=" background: url('img/search.jpg') no-repeat; background-size: contain"></button></form> </div>--}}
                    </div>

                    <div class="d-flex flex-md-row flex-column justify-content-around align-items-center mb-5">
                        <a class="btn  m-3 btn-size centralized" href="{{route('update.create')}}">اضافة تحديث لمشروع</a>
                        <a class="btn  m-3 btn-size centralized" href="{{route('USearch')}}">عرض تحديثات مشروع</a>
                        <a class="btn  m-3 btn-size centralized" href="{{route('Process.index')}}"> عرض جميع المشاريع</a>
                    </div>

                    <div class=" d-flex flex-md-row flex-column justify-content-around align-items-center ">
                        @role('administrator')
                        <div class="text-center text-secondary"> <h4> قوائم الموظفين </h4> <a class="btn btn-primary m-3 btn-size centralized" href="{{route('user.index')}} " style=" background: url('img/employees.jpg') no-repeat; background-size: contain "></a> </div>
                        <div class="text-center text-secondary"> <h4>  تعيين الادوار والاذونات</h4> <a class="btn btn-primary m-3 btn-size centralized" href="{{route('lara')}}" style=" background: url('img/rolles.jpeg') no-repeat; background-size: contain "></a> </div>
                        @endrole
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
