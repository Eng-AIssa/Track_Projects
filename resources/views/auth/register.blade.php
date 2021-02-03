
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <form class="grid md:grid-cols-2 grid-cols-1 text-right md:pr-16 pr-20 lg:max-w-4xl md:max-w-3xl sm:max-w-lg max-w-md mx-auto bg-white shadow pt-10 rounded" method="POST" action="{{ route('user.store') }}">
            @csrf

            <div class=" a">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control rounded mb-5 " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            </div>


            <div class=" a">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control rounded mb-5 " name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>


            <div class=" a">
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                <input id="phone" type="number" class="form-control rounded mb-5 " name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
            </div>


            <div class=" a">
                <label for="password" class="col-md-4 a col-form-label text-md-right">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control rounded mb-5 " name="password" required autocomplete="new-password">
            </div>


            <div class=" a">
                <label for="password-confirm" class="col-md-4 a col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control rounded mb-5" name="password_confirmation" required autocomplete="new-password">
            </div>


            <div class=" a">
                <label for="employee_id" class="col-md-4 a col-form-label text-md-right">{{ __('Employee ID') }}</label>
                <input id="employee_id" type="text" class="form-control rounded mb-5 " name="employee_id" value="{{ old('employee_id') }}" required autocomplete="employee_id" autofocus>
            </div>


            <div class=" a">
                <label for="national_id" class="col-md-4 a col-form-label text-md-right">{{ __('National ID') }}</label>
                <input id="national_id" type="text" class="form-control rounded mb-5 " name="national_id" value="{{ old('national_id') }}" required autocomplete="employee_id" autofocus>
            </div>


            <div class=" a">
                <label for="nationality" class="col-md-4 a col-form-label text-md-right">{{ __('Nationality') }}</label>
                <select id="nationality" class="form-control rounded mb-5  " name="nationality"   required autocomplete="nationality" autofocus>
                    <option selected>Choose...</option>
                    @foreach($countries as $country)
                        <option value="{{$country->country_arNationality}}">{{$country->country_arNationality}}</option>
                    @endforeach
                </select>
            </div>


            <div class=" a">
                <label for="gender" class="col-md-4 a col-form-label text-md-right">{{ __('Gender') }}</label>
                <select id="gender" class="form-control rounded mb-5  " name="gender"   required autocomplete="gender" autofocus>
                    <option selected>Choose...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>


            <div class=" a">
                <label for="region" class="col-md-4 a col-form-label text-md-right">{{ __('Region') }}</label>
                <select id="region" class="form-control rounded mb-5  " name="region"   required autocomplete="region" autofocus>
                    <option selected>Choose...</option>
                    @foreach($cities as $city)
                        <option value="{{$city->name_ar}}">{{$city->name_ar}}</option>
                    @endforeach
                </select>
            </div>


            <div class=" a">
                <label for="join_date" class="col-md-4 a col-form-label text-md-right">{{ __('join_date') }}</label>
                <input id="join_date" type="date" class="form-control rounded mb-5 " name="join_date" value="{{ old('join_date') }}" required autocomplete="Join Date" autofocus>
            </div>


            <div class=" a">
                <label for="contract_exp" class="col-md-4 a col-form-label text-md-right">{{ __('Contract Exp') }}</label>
                <input id="contract_exp" type="date" class="form-control rounded mb-5 " name="contract_exp" value="{{ old('contract_exp') }}" required autocomplete="contract_exp" autofocus>
            </div>

            <div class=" a">
                <label for="iqama_exp" class="col-md-4 a col-form-label text-md-right">{{ __('Iqama Exp') }}</label>
                <input id="iqama_exp" type="date" class="form-control rounded mb-5 " name="iqama_exp" value="{{ old('iqama_exp') }}" required autocomplete="iqama_exp" autofocus>
            </div>


            <div class=" a">
                <label for="position" class="col-md-4 a col-form-label text-md-right">{{ __('Position') }}</label>
                <select id="position" class="form-control rounded mb-5  " name="position"   required autocomplete="position" autofocus>
                    <option selected>Choose...</option>
                    @foreach($positions as $position)
                        <option value="{{$position->id}}">{{$position->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class=" a">
                <label for="basic" class="col-md-4 a col-form-label text-md-right">{{ __('Basic') }}</label>
                <input id="basic" type="number" class="form-control rounded mb-5 " name="basic" value="{{ old('basic') }}" required autocomplete="basic" autofocus>
            </div>


            <div class=" a">
                <label for="housing" class="col-md-4 a col-form-label text-md-right">{{ __('Housing') }}</label>
                <input id="housing" type="number" class="form-control rounded mb-5 " name="housing" value="{{ old('housing') }}" required autocomplete="housing" autofocus>
            </div>


            <div class=" a">
                <label for="transportation" class="col-md-4 a col-form-label text-md-right">{{ __('Transportation') }}</label>
                <input id="transportation" type="number" class="form-control rounded mb-5 " name="transportation" value="{{ old('transportation') }}" required autocomplete="transportation" autofocus>
            </div>


            <div class=" a">
                <label for="other" class="col-md-4 a col-form-label text-md-right">{{ __('Other') }}</label>
                <input id="other" type="number" class="form-control rounded mb-5 " name="other" value="{{ old('other') }}" required autocomplete="other" autofocus>
            </div>


            <div class=" a">
                <label for="total_salary" class="col-md-4 a col-form-label text-md-right">{{ __('Total Salary') }}</label>
                <input id="total_salary" type="number" class="form-control rounded mb-5 " name="total_salary" value="{{ old('total_salary') }}" required autocomplete="total_salary" autofocus>
            </div>


            <div class=" a">
                <label for="iban" class="col-md-4 a col-form-label text-md-right">{{ __('Iban') }}</label>
                <input id="iban" type="text" class="form-control rounded mb-5 " name="iban" value="{{ old('iban') }}" required autocomplete="iban" autofocus>

            </div>


            <div class=" a">
                <label for="bank" class="col-md-4 a col-form-label text-md-right">{{ __('Bank') }}</label>
                <input id="bank" type="text" class="form-control rounded mb-5 " name="bank" value="{{ old('bank') }}" required autocomplete="bank" autofocus>

            </div>


            {{--<div class="form-group row mb-0">--}}
            <div class=" a offset-md-4 ">
                <button type="submit" class="btn btn-primary " >
                    {{ __('Register') }}
                </button>
            </div>
            {{--</div>--}}
        </form>

    </div>
</x-app-layout>
