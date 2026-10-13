@extends('layouts.app')

@section('content')
<div class="container mx-auto my-5">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Staff List</h2>
        <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="{{ route('staff.create') }}">
            Add Staff
        </a>
    </div>

    @if ($message = Session::get('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table-auto w-full border-collapse border border-gray-300 shadow-md">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">คำนำหน้า</th>
                <th class="border border-gray-300 px-4 py-2">ชื่อ</th>
                <th class="border border-gray-300 px-4 py-2">นามสกุล</th>
                <th class="border border-gray-300 px-4 py-2">หน่วยงาน</th>
                <th class="border border-gray-300 px-4 py-2">จัดการ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staffs as $item)
            <tr class="text-center">
                <td class="border border-gray-300 px-4 py-2">{{ $item->id }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $item->title->title_name ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $item->first_name }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $item->last_name }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $item->organization->org_name ?? '-' }}</td>
                <td class="border border-gray-300 px-4 py-2">
                    <form action="{{ route('staff.destroy', $item->id) }}" method="POST">
                        <a class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600" href="{{ route('staff.show', $item->id) }}">Detail</a>
                        <a class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600" href="{{ route('staff.edit', $item->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700" onclick="return confirm('ยืนยันการลบ?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection