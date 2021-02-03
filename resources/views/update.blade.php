<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Update') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {{--You're logged in!--}}

            <div class="container d-flex justify-content-center text-center">

            <form class="update-body" id="update_form" name="update_form" method="POST" action="{{route('update.store')}}">
                @csrf

                <div>
                    <div>
                        <h2 class="m-4">Project Number</h2>
                        <input class="form-control" type="text" id="project_number" name="project_number">
                    </div>
                </div>

                <div>
                    <div>
                        <h2 class="m-4">Add an update</h2>
                        <textarea id="project_update" name="project_update" class="form-control" STYLE="width: 80%" cols="40" rows="5" placeholder="write the update here"></textarea>
                    </div>

                </div>

                <div>
                    <div>
                        <label class="m-2 font-weight-bold" for="check_finish" >Project Closed</label>
                        <input type="checkbox" name="check_finish" id="check_finish">
                    </div>
                </div>

                <button class="btn btn-primary m-4 w-25" type="submit" >Add</button>

            </form>

            </div>
        </div>
    </div>
</x-app-layout>
