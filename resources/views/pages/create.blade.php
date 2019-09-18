@extends('layouts.admin.master')

@section('title', 'Page Title')


@section('content')
    <div class="container mt-5">
        {{ $types }}
        <!-- add BLockContent -->
        <div class="dropdown">
            <a class="btn btn-secondary" href="#" role="button" id="BlockContent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                +
            </a>
            <div class="dropdown-menu" aria-labelledby="BlockContent">
                @foreach ($types as $type)
                    <a class="dropdown-item type-{{ $type->slug }}" href="{{ $type->id }}" data-type="{{ $type->id }}">{{ $type->name }}</a>
                @endforeach
            </div>
        </div>

    </div>
@endsection
