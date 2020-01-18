<div class="row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-7">
        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                   name="name" id="input-name" type="text"
                   placeholder="{{ __('Name ...') }}"
                   value="{{ old('name') ? old('name') : isset($genre) ? $genre->name : '' }}"
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
        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <textarea rows="4" id="input-description"
                                                      class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                      name="description" type="text"
                                                      placeholder="{{ __('Description ...') }}"
                                                      required>{{ old('description') ? old('description') : isset($genre) ? $genre->description : '' }}</textarea>

            @if ($errors->has('email'))
                <span id="description-error" class="error text-danger"
                      for="input-description">{{ $errors->first('description') }}</span>
            @endif
        </div>
    </div>
</div>
