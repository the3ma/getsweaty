@extends('layouts.admin.master')

@section('title', 'Page Title')


@section('content')
    <div class="container mt-5">

        @if($types)
        <!-- add BLockContent -->
        <div class="dropdown">
            <a class="btn btn-secondary" href="#" role="button" id="BlockContent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                +
            </a>
            <div class="dropdown-menu" aria-labelledby="BlockContent">
                <form action="{{ route('pageblock.store')}}" method="post">
                    @csrf
                    @method('POST')
                    @foreach ($types as $type)
                            <input type="hidden" name="type" value="{{ $type->id }}">
                            <input type="hidden" name="page" value="{{ $page }}">
                            <button class="btn btn-danger" type="submit">{{ $type->name }}</button>
                    @endforeach
                </form>
            </div>
        </div>
        @endif

    </div>
@endsection
