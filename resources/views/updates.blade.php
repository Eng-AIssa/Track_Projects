<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project Updates') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    {{--You're logged in!--}}

            @if($updates == null)
                <div class="row ">
                    <div class="input-group mb-3 d-flex justify-content-center">
                        <form method="get" action="{{route('USearch')}}">
                            @csrf
                            <button class="btn btn-outline-secondary" type="submit" id="process_search" name="process_search">Search</button>
                            <input type="text" class="rounded" id="process_number" name="process_number" placeholder="Project ID" >
                        </form>
                    </div>
                </div>


            @elseif($updates == 'none')
                <div class="row d-flex justify-center">
                    <h1 class="m-5 d-flex justify-content-center">
                        لا يوجد مشروع بهذا الرقم
                    </h1>
                </div>
                <div class="row d-flex justify-content-center">
                    <a class="btn m-3 btn-size centralized" href="{{route('USearch')}} " >Back</a>
                    <a class="btn  m-3 btn-size centralized" href="{{route('home')}} " >Home</a>
                </div>

            @else
                <div class="row mb-2">

                    <div class="input-group mb-3 d-flex justify-content-center">
                        <form method="get" action="{{route('USearch')}}">
                            @csrf
                            <button class="btn btn-outline-secondary" type="submit" id="process_search" name="process_search">Search</button>
                            <input type="text" class="rounded" id="process_number" name="process_number" placeholder="Project ID" >
                        </form>
                    </div>

                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
                    @foreach($updates as $update)
                        <div class="grid-cols-1">
                            <div class="box">
                                <div class="card">
                                    <div class="face face1">
                                        <div class="content p-2 text-center">
                                            <p>
                                                {{$update->content}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="face face2">
                                        <div class="content">
                                            <h3 class="text-2xl">{{$update->created_at}}</h3>
                                            <a href="#">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="row d-flex justify-content-center">
                    <a class="btn  m-3 btn-size centralized" href="{{route('dashboard')}} " >Home</a>
                    <a class="btn  m-3 btn-size centralized" href="{{route('dashboard')}} " >Ask For Update</a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
