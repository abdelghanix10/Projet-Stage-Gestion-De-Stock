@extends('layouts.app')

@section('content')

<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-1200">
            <header class="px-8 py-4 border-b border-gray-1000">
                <h2 class="font-semibold text-gray-1800">Supplier Details</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">



                <a href="#" class="block">

                @if(!empty($supplier->image))
                
                    <img style="border-radius: 5%; width:100%; display: block; margin-left: auto; margin-right: auto;" src="{{asset('storage/suppliers/'.$supplier->image)}}" alt="Supplier Image">
                
                @endif


                    <div class="mt-4 sm:flex sm:items-center sm:justify-center sm:gap-4">
                        <strong class="font-medium">{{$supplier->company}}</strong>

                        <span class="hidden sm:block sm:h-px sm:w-8 sm:bg-yellow-500"></span>

                        <p class="mt-0.5 opacity-50 sm:mt-0">{{$supplier->name}}</p>
                    </div>
                    </a>



                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Attribute</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Value</div>
                                </th>
                               
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">Name</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$supplier->name}}</div>
                                </td>
                               
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">Phone</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$supplier->phone}}</div>
                                </td>
                               
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">Email</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$supplier->email}}</div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">Address</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$supplier->address}}</div>
                                </td>
                               
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-1500">Company</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$supplier->company}}</div>
                                </td>
                               
                            </tr>
                           
                            
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
            <div>
                <a class="btn btn-sm bg-success-light" href="{{route('edit-supplier',$supplier)}}">
                <i class="fe fe-pencil"></i> Edit </a>
            
            <a class="btn btn-sm bg-danger-light" href="{{route('suppliers')}}">
                <i class="fa fa-arrow-left"></i> Back </a>
            </div>

            </div>
        </div>
   

@endsection	