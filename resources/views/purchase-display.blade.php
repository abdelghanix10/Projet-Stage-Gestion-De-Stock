@extends('layouts.app')

@section('content')

<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-1200">
            <header class="px-8 py-4 border-b border-gray-1000">
                <h2 class="font-semibold text-gray-1800">Product Details</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">




                <a href="#" class="block">

                @if(!empty($purchase->image))
                
                    <img style="border-radius: 5%; width:100%; display: block; margin-left: auto; margin-right: auto;"   src="{{asset('storage/purchases/'.$purchase->image)}}" alt="product image">
                
                @endif


                    <div class="mt-4 sm:flex sm:items-center sm:justify-center sm:gap-4">
                        <strong class="font-medium">{{$purchase->name}}</strong></div>
                        

                        <div align=center>
                        <span class="hidden sm:block sm:h-px sm:w-8 sm:bg-yellow-500"></span>
                        </div>
                    <br>
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
                                        <div class="font-medium text-gray-800">Product Name</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$purchase->name}}</div>
                                </td>
                               
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">Product Category</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$purchase->category->name}}</div>
                                </td>
                               
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">Product Price</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{AppSettings::get('app_currency', '$')}}{{$purchase->price}}</div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">Quantity</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$purchase->quantity}}</div>
                                </td>
                               
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-1500">Supplier</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$purchase->supplier->name}}</div>
                                </td>
                               
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-1500">Date d'Ajout</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{date_format(date_create($purchase->add_date),"d M, Y")}}</div>
                                </td>
                               
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
                <div>
                <a class="btn btn-sm bg-success-light" href="{{route('edit-purchase',$purchase)}}">
                <i class="fe fe-pencil"></i> Edit
            </a>
            <a class="btn btn-sm bg-danger-light" href="{{route('purchases')}}">
                <i class="fa fa-arrow-left"></i> Back </a>
            </div>
            </div>
        </div>
   

@endsection	