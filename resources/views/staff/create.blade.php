@extends('layouts.app')

@section('content')
<div class="container mx-auto my-5 max-w-lg">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Add Staff</h2>
        <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" href="{{ route('staff.index') }}">Back</a>
    </div>

    <form action="{{ route('staff.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Title (คำนำหน้าชื่อ):</label>
            <select name="title_id" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">-- เลือกคำนำหน้าชื่อ --</option>
                @foreach ($titles as $title)
                    <option value="{{ $title->id }}">{{ $title->title_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">First Name:</label>
            <input type="text" name="first_name" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Last Name:</label>
            <input type="text" name="last_name" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Organization (หน่วยงาน):</label>
            <select name="organization_id" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">-- เลือกหน่วยงาน --</option>
                @foreach ($organizations as $org)
                    <option value="{{ $org->id }}">{{ $org->org_name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
    </form>
</div>
@endsection