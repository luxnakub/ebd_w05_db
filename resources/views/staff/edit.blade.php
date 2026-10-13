@extends('layouts.app')

@section('content')
<div class="container mx-auto my-5 max-w-lg">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Edit Staff</h2>
        <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" href="{{ route('staff.index') }}">Back</a>
    </div>

    <form action="{{ route('staff.update', $staff->id) }}" method="POST" class="bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Title (คำนำหน้าชื่อ):</label>
            <select name="title_id" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @foreach ($titles as $title)
                    <option value="{{ $title->id }}" {{ $staff->title_id == $title->id ? 'selected' : '' }}>{{ $title->title_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">First Name:</label>
            <input type="text" name="first_name" value="{{ $staff->first_name }}" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Last Name:</label>
            <input type="text" name="last_name" value="{{ $staff->last_name }}" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Organization (หน่วยงาน):</label>
            <select name="organization_id" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @foreach ($organizations as $org)
                    <option value="{{ $org->id }}" {{ $staff->organization_id == $org->id ? 'selected' : '' }}>{{ $org->org_name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
    </form>
</div>
@endsection