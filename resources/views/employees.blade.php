<x-app-layout>
    <x-slot name="header" >
        <div class="d-flex justify-between align-items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees List') }}
        </h2>
            <a class="btn  btn2-size  centralized" href="{{route('new_user')}}">Add employee</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <table id="employees_table"  class="table text-center">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">National ID</th>
                    <th scope="col">Position</th>
                    <th scope="col">Status</th>
                    @role('administrator')
                    <th scope="col">actions</th>
                    @endrole
                </tr>
                </thead>
                <tbody >
                @foreach($employees as $employee)
                    <tr>
                        <th scope="row">{{$employee->employee_id}}</th>
                        <th scope="row">{{$employee->name}}</th>
                        <th scope="row">{{$employee->phone}}</th>
                        <td>{{$employee->national_id}}</td>
                        <td>{{$employee->position->name}}</td>
                        <td>{{$employee->status}}</td>
                        @role('administrator')
                        <form method="post" action="{{route('details')}}">
                            @csrf
                            <input id='user_id' name="user_id" type="hidden" value="{{$employee->id}}">
                            <td><button type="submit" class="btn btn-dark" >Details</button></td>
                        </form>
                        @endrole
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>
