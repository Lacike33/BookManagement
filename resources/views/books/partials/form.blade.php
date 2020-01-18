<div class="row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                   name="name" id="input-name" type="text"
                   placeholder="{{ __('Name ...') }}"
                   value="{{ old('name') ? old('name') : isset($book) ? $book->name : '' }}"
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
            <select name="genre_id" id="input-genre"
                    {{--                    value="{{ old('genre') ? old('genre') : isset($genre) ? $genre->name : 'Genre' }}"--}}
                    class="form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}"
                    required>
                {{--                <option value="">Genre ...</option>--}}

                @if(isset($book))
                    @foreach($genres as $genre)
                        @if($genre->id == $book->genre->id)
                            <option value="{{ $book->genre->id }}" selected>{{ $book->genre->name }}</option>
                        @else
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endif
                    @endforeach
                @else
                    <option value="">Genre ...</option>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                @endif

                {{--                @foreach($genres as $genre)--}}
                {{--                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>--}}
                {{--                @endforeach--}}

            </select>
            @if ($errors->has('genre'))
                <span id="genre-error" class="error text-danger"
                      for="input-genre">{{ $errors->first('genre') }}</span>
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
                                                      required>{{ old('description') ? old('description') : isset($book) ? $book->description : '' }}</textarea>

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
                value="{{ old('pages') ? old('pages') : isset($book) ? $book->pages : '' }}"
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
                   value="{{ old('year') ? old('year') : isset($book) ? $book->year : '' }}"
                   required/>
            @if ($errors->has('year'))
                <span id="year-error" class="error text-danger"
                      for="input-year">{{ $errors->first('year') }}</span>
            @endif
        </div>
    </div>
</div>

