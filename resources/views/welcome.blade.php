@extends('layouts.app')

@section('content')

            <!-- component -->
        <div class="text-gray-900">
            <div class="p-6 flex">
                <h1 class="text-3xl">
                    Products
                </h1>
            </div>
            <div class="px-8 py-4 flex justify-center">
                <table class="w-full text-md bg-white shadow-md rounded border border-gray-300 mb-4">
                    <tbody>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">Name</th>
                            <th class="text-left p-3 px-5">Email</th>
                            <th class="text-left p-3 px-5">Price</th>
                            <th class="text-left p-3 px-5">category</th>
                            <th class="text-left p-3 px-5">Brand</th>
                            <th class="text-left p-3 px-5">status</th>
                            <th></th>
                        </tr>
                        <tr class="border-b hover:bg-orange-100">
                            <td class="p-3 px-5"><input type="text" value="John Doe" class="bg-transparent"></td>
                            <td class="p-3 px-5"><input type="text" value="john@admin.com" class="bg-transparent"></td>
                            <td class="p-3 px-5"><input type="text" value="$45" class="bg-transparent"></td>
                            <td class="p-3 px-5"><input type="text" value="Adidas" class="bg-transparent"></td>
                            <td class="p-3 px-5">
                                <select value="Category" class="bg-transparent">
                                    <option value="user">Women</option>
                                    <option value="admin">Man</option>
                                    <option value="admin">Kids</option>
                                </select>
                            </td>
                            <td class="p-3 px-5">
                                <select value="status" class="bg-transparent">
                                    <option value="user">available</option>
                                    <option value="admin">not available</option>
                                </select>
                            </td>
                            <td class="p-3 px-5 flex justify-end">
                                <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button>
                                <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-orange-100">
                            <td class="p-3 px-5"><input type="text" value="John Doe" class="bg-transparent"></td>
                            <td class="p-3 px-5"><input type="text" value="john@admin.com" class="bg-transparent"></td>
                            <td class="p-3 px-5"><input type="text" value="$45" class="bg-transparent"></td>
                            <td class="p-3 px-5"><input type="text" value="Adidas" class="bg-transparent"></td>
                            <td class="p-3 px-5">
                                <select value="Category" class="bg-transparent">
                                    <option value="user">Women</option>
                                    <option value="admin">Man</option>
                                    <option value="admin">Kids</option>
                                </select>
                            </td>
                            <td class="p-3 px-5">
                                <select value="status" class="bg-transparent">
                                    <option value="user">available</option>
                                    <option value="admin">not available</option>
                                </select>
                            </td>
                            <td class="p-3 px-5 flex justify-end">
                                <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button>
                                <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-orange-100">
                            <td class="p-3 px-5"><input type="text" value="John Doe" class="bg-transparent"></td>
                            <td class="p-3 px-5"><input type="text" value="john@admin.com" class="bg-transparent"></td>
                            <td class="p-3 px-5"><input type="text" value="$45" class="bg-transparent"></td>
                            <td class="p-3 px-5"><input type="text" value="Adidas" class="bg-transparent"></td>
                            <td class="p-3 px-5">
                                <select value="Category" class="bg-transparent">
                                    <option value="user">Women</option>
                                    <option value="admin">Man</option>
                                    <option value="admin">Kids</option>
                                </select>
                            </td>
                            <td class="p-3 px-5">
                                <select value="status" class="bg-transparent">
                                    <option value="user">available</option>
                                    <option value="admin">not available</option>
                                </select>
                            </td>
                            <td class="p-3 px-5 flex justify-end">
                                <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button>
                                <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-orange-100">
                            <td class="p-3 px-5"><input type="text" value="John Doe" class="bg-transparent"></td>
                            <td class="p-3 px-5"><input type="text" value="john@admin.com" class="bg-transparent"></td>
                            <td class="p-3 px-5"><input type="text" value="$45" class="bg-transparent"></td>
                            <td class="p-3 px-5"><input type="text" value="Adidas" class="bg-transparent"></td>
                            <td class="p-3 px-5">
                                <select value="Category" class="bg-transparent">
                                    <option value="user">Women</option>
                                    <option value="admin">Man</option>
                                    <option value="admin">Kids</option>
                                </select>
                            </td>
                            <td class="p-3 px-5">
                                <select value="status" class="bg-transparent">
                                    <option value="user">available</option>
                                    <option value="admin">not available</option>
                                </select>
                            </td>
                            <td class="p-3 px-5 flex justify-end">
                                <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button>
                                <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection
