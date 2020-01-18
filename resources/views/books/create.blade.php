@extends('layouts.app', ['activePage' => 'books', 'titlePage' => __('Add new book')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('book.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('post')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add Book') }}</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('book.index') }}"
                                           class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                    </div>
                                </div>

                                {{--                                @include('books.partials.form', $genres)--}}

                                <div class="row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   name="name" id="input-name" type="text"
                                                   placeholder="{{ __('Name ...') }}"
                                                   value="{{ old('name') ?? '' }}"
                                                   required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger"
                                                      for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('genre') ? ' has-danger' : '' }}">
                                            <select name="genre_id" id="input-genre_id"
                                                    class="form-control{{ $errors->has('genre_id') ? ' is-invalid' : '' }}"
                                                    required="true" aria-required="true">
{{--                                                @if(isset($book))--}}
{{--                                                    @foreach($genres as $genre)--}}
{{--                                                        @if($genre->id == $book->genre->id)--}}
{{--                                                            <option value="{{ $book->genre->id }}"--}}
{{--                                                                    selected>{{ $book->genre->name }}</option>--}}
{{--                                                        @else--}}
{{--                                                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>--}}
{{--                                                        @endif--}}
{{--                                                    @endforeach--}}
{{--                                                @else--}}
                                                    @foreach($genres as $genre)
                                                        @if( old('genre_id') && $genre->id == old('genre_id'))
                                                            <option value="{{ $genre->id }}"
                                                                    selected>{{ $genre->name }}</option>
                                                        @else
                                                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                                        @endif
                                                    @endforeach
{{--                                                @endif--}}
                                            </select>
                                            @if ($errors->has('genre'))
                                                <span id="genre-error" class="error text-danger"
                                                      for="input-genre_id">{{ $errors->first('genre_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <textarea rows="4" id="input-description"
                                                      class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                      name="description" type="text"
                                                      placeholder="{{ __('Description ...') }}"
                                                      required>{{ old('description') ?? '' }}</textarea>

                                            @if ($errors->has('email'))
                                                <span id="description-error" class="error text-danger"
                                                      for="input-description">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label" for="input-pages"></label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('pages') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('pages') ? ' is-invalid' : '' }}"
                                                type="number" name="pages" id="input-pages"
                                                placeholder="{{ __('Pages ...') }}"
                                                value="{{ old('pages') ?? '' }}"
                                                required/>
                                            @if ($errors->has('pages'))
                                                <span id="pages-error" class="error text-danger"
                                                      for="input-pages">{{ $errors->first('pages') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label" for="input-year"></label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}"
                                                   name="year"
                                                   id="input-year" type="number"
                                                   placeholder="{{ __('Year ...') }}"
                                                   value="{{ old('year') ?? '' }}"
                                                   required/>
                                            @if ($errors->has('year'))
                                                <span id="year-error" class="error text-danger"
                                                      for="input-year">{{ $errors->first('year') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Add Book') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
