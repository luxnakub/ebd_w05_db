@extends('layouts.app')

@section('content')
<div class="container mx-auto my-5 max-w-lg">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Staff Detail</h2>
        <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" href="{{ route('staff.index') }}">Back</a>
    </div>

    <div class="bg-white p-6 rounded shadow-md">
        <p class="mb-2"><strong>ID:</strong> {{ $staff->id }}</p>
        <p class="mb-2"><strong>คำนำหน้า:</strong> {{ $staff->title->title_name ?? '-' }}</p>
        <p class="mb-2"><strong>ชื่อ - นามสกุล:</strong> {{ $staff->first_name }} {{ $staff->last_name }}</p>
        <p class="mb-2"><strong>หน่วยงาน:</strong> {{ $staff->organization->org_name ?? '-' }}</p>
        <p class="mb-2"><strong>Created At:</strong> {{ $staff->created_at }}</p>
    </div>
</div>
@endsection