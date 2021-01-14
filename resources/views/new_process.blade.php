<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Project') }}
        </h2>
    </x-slot>

    <div class="py-12 xl:mx-60 sm:mx-10 md:mx-16 mx-10">

        <form dir="rtl" class="grid md:grid-cols-2 grid-cols-1 gap-y-8 text-left pt-14 md:pl-16 pl-24  border border-dark rounded shadow" method="post" action="{{route('store_process')}}">
            @csrf


            <div class=" a">
                <label for="work_order" class="col-form-label ">{{ __('رقم امر العمل') }}</label>
                <input id="work_order" type="number" class=" form-control rounded" name="work_order" required autocomplete="work_order">
            </div>



            <div class=" a">
                <label for="day" class="col-form-label">{{ __('اليوم') }}</label>
                <select id="day" class="form-control " name="day"   required autocomplete="day" autofocus>
                    <option selected>___ اختر...</option>
                    <option value="الاحد">الاحد</option>
                    <option value="الاثنين">الاثنين</option>
                    <option value="الثلاثاء">الثلاثاء</option>
                    <option value="الاربعاء">الاربعاء</option>
                    <option value="الخميس">الخميس</option>
                    <option value="الجمعة">الجمعة</option>
                    <option value="السبت">السبت</option>
                </select>
            </div>

            <div class=" a">
                <label for="date" class="col-form-label text-md-right">{{ __('التاريخ') }}</label>
                <input id="date" type="date" class="form-control rounded" name="date" required autocomplete="date">
            </div>




            <div class=" a">
                <label for="business_type" class="col-form-label text-md-right">{{ __('نوع العمل') }}</label>
                <input id="business_type" type="text" class="form-control rounded" name="business_type" required autocomplete="business_type">
            </div>

            <div class="grid grid-cols-3 ">
                <label for="agent_type" class="col-form-label ">{{ __('العميل') }}</label>
                <div class="text-center">
                    <label class="ml-2 col-form-label" for="agent_type1">جديد</label>
                    <input class="form-radio-input " type="radio" id="agent_type1" value="جديد" name="agent_type">
                </div>
                <div class="text-center">
                    <label class="ml-2 col-form-label" for="agent_type2">سابق</label>
                    <input class="form-radio-input " type="radio" id="agent_type2" value="سابق" name="agent_type">
                </div>
            </div>





            <div class=" a">
                <label for="agent_name" class=" col-form-label text-md-right">{{ __('اسم العميل') }}</label>
                <input id="agent_name" type="text" class="form-control rounded" name="agent_name" required autocomplete="agent_name">
            </div>

            <div class=" a">
                <label for="project_name" class=" col-form-label text-md-right">{{ __('اسم المشروع') }}</label>
                <input id="project_name" type="text" class="form-control rounded" name="project_name" required autocomplete="project_name">
            </div>




            <div class=" a">
                <label for="principal_name" class=" col-form-label text-md-right">{{ __('اسم المدير') }}</label>
                <input id="principal_name" type="text" class="form-control rounded" name="principal_name" required autocomplete="principal_name">
            </div>

            <div class=" a">
                <label for="address" class="col-form-label text-md-right">{{ __('العنوان') }}</label>
                <input id="address" type="text" class="form-control rounded" name="address" required autocomplete="address">
            </div>





            <div class=" a">
                <label for="telephone" class=" col-form-label text-md-right">{{ __('الهاتف') }}</label>
                <input id="telephone" type="tel" class="form-control rounded " name="telephone" required autocomplete="telephone">
            </div>

            <div class=" a">
                <label for="phone" class=" col-form-label text-md-right">{{ __('الجوال') }}</label>
                <input id="phone" type="tel" class="form-control rounded" name="phone" required autocomplete="phone">
            </div>




            <div class=" a">
                <label for="email" class="col-form-label text-md-right">{{ __('البريد الالكتروني') }}</label>
                <input id="email" type="email" class="form-control rounded" name="email" required autocomplete="email">
            </div>

            <div class=" a">
                <label for="wasel" class=" col-form-label text-md-right">{{ __('بريد واصل') }}</label>
                <input id="wasel" type="text" class="form-control rounded" name="wasel" required autocomplete="wasel">
            </div>




            <div class=" a">
                <label for="report" class="col-form-label text-md-right">{{ __('تقرير العمل') }}</label>
                <input id="report" type="text" class="form-control rounded" name="report"  required autocomplete="report" autofocus>
            </div>



            <div class=" a">
                <label for="attachments" class="col-form-label text-md-right">{{ __('المرفقات') }}</label>
                <select id="attachments" class="form-control h-11" name="attachments"   required autocomplete="attachments" autofocus>
                    <option selected>___ اختر...</option>
                    <option value="مرفق بريد الكتروني">مرفق بريد الكتروني</option>
                    <option value="خرائط ورقية">خرائط ورقية</option>
                    <option value="اوتوكاد USB">اوتوكاد USB</option>
                </select>
            </div>

            <div class=" a">
                <label for="price" class=" col-form-label text-md-right pl-2">{{ __('المطالبات المالية') }}</label>
                <input id="price" type="number" class="form-control rounded h-11" name="price" required autocomplete="price">
            </div>




            <div class="a">
                <label for="full_price" class="col-form-label text-center">{{ __('تسديد كامل المبلغ') }}</label>
                <input id="full_price" type="number" class="form-control rounded" name="full_price"  autocomplete="full_price">
            </div>

            <div class="text-right pr-6 a">
                <label for="full_price_check" class=" col-form-label text-md-right">{{ __('') }}</label>
                <input class="form_check_input rounded" style="" type="checkbox" id="full_price_check" value="1" name="full_price_check">
            </div>




            <div class="a">
                <label for="half_price" class=" col-form-label text-md-right">{{ __('تسديد 50% من المبلغ') }}</label>
                <input id="half_price" type="number" class="form-control rounded" name="half_price"   autocomplete="half_price" autofocus>
            </div>

            <div class="text-right pr-6 a">
                <label for="half_price_check" class=" col-form-label text-md-right">{{ __('') }}</label>
                <input class="form-check-input " type="checkbox" id="half_price_check" value="1" name="half_price_check">
            </div>




            <div class="text-center a">
                <label for="dept" class=" col-form-label text-md-right">{{ __('لايوجد عليه مبالغ مالية') }}</label>
                <input class="form-check-input" type="checkbox" id="dept" value="1" name="dept">
            </div>




            <div class=" a">
                <label for="assigned_to" class="col-md-4 col-form-label text-md-right">{{ __('المهندس الموكل') }}</label>

                <select id="assigned_to" class="form-control " name="assigned_to"   required autocomplete="assigned_to" autofocus>
                    <option selected>___ اختر...</option>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>



            <div class="text-center md:col-span-2">
                <button type="submit" class="col-3 m-3 btn btn-primary"  >اضافة</button>
            </div>
        </form>

    </div>
</x-app-layout>
