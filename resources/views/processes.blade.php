<x-app-layout>
    <x-slot name="header" >
        <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects List') }}
        </h2>

        <a class="btn  btn2-size mr-3 centralized" href="{{route('Process.create')}}">Add Project</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {{--You're logged in!--}}

            <table id="processes_table" class="table text-center">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Project #</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">assigned to</th>
                    <th scope="col">Price</th>
                    <th scope="col">actions</th>

                </tr>
                </thead>
                <tbody >
                @foreach($processes as $process)
                    <tr>
                        <th scope="row">{{$process->id}}</th>
                        <td>{{$process->project_name}}</td>
                        <td>{{$process->agent_name}}</td>
                        <td>{{$process->phone}}</td>
                        <td>{{$process->user->name}}</td>
                        <td>{{$process->price}}</td>
                        <td><a class="btn btn-dark" href="{{route('Process.show',['Process'=>$process->id])}}">Details</a><a class="btn btn-dark" href="{{route('update.show',['update'=>$process->id])}}">Updates</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
