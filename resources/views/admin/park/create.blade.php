@extends('admin.layout')
@section('title', 'Add park')
@section('content')
    <form action="{{ route('park.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="street">Street:</label>
        <input type="text" name="street" id="street">
        <label for="city">City:</label>
        <input type="text" name="city" id="city">
        <label for="country">Country:</label>
        <input type="text" name="country" id="country">
        <label for="area">Area:</label>
        <input type="text" name="area" id="area">
        <label for="opens_at">Opens at:</label>
        <input type="text" name="opens_at" id="opens_at">
        <label for="closes_at">Closes at:</label>
        <input type="text" name="closes_at" id="closes_at">
        <label for="google_maps_url">Google maps url:</label>
        <input type="text" name="google_maps_url" id="google_maps_url">
        <label for="images">Files:</label>
        <input type="file" name="images[]" multiple accept=".jpg, .png, .jpeg, .webp" id="images">
        <p>Activities:</p>
        @foreach ($activities as $activity)
            <label for="activity_{{ $activity->name }}">{{ $activity->name }}</label>
            <input type="checkbox" id="activity_{{ $activity->name }}"  name='activities[]' value="{{ $activity->id }}">
        @endforeach
        <button>Add park</button>
    </form>
@endsection