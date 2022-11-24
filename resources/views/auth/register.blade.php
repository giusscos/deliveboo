@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="header_content d-flex flex-wrap justify-content-between align-items-center">
                <div class="box_shadow_stroke py-2 px-3 mb-3">
                    <h1 class="m-0">
                        {{ __('Registrati') }}
                    </h1>
                </div>
            </div>
            <div class="body_content py-5 d-flex justify-content-center align-items-center">
                <div class="box_shadow_stroke pt-3 card_form px-3">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="form"
                    class="d-flex flex-column justify-content-center">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label">{{ __('Nome') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control input-control @error('name') is-invalid @enderror box_shadow_stroke" name="name"
                                    value="{{ old('name') }}" autocomplete="name" autofocus>
                                <div class="error"></div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Indirizzo e-mail') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control input-control @error('email') is-invalid @enderror box_shadow_stroke" name="email"
                                    value="{{ old('email') }}" autocomplete="email">
                                <div class="error"></div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>


                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control input-control @error('password') is-invalid @enderror box_shadow_stroke"
                                    name="password" autocomplete="new-password">
                                <div class="error"></div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label">{{ __('Conferma password') }}</label>


                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control input-control box_shadow_stroke"
                                    name="password_confirmation" autocomplete="new-password">
                                <div class="error"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="restaurant_name" class="col-md-4 col-form-label">Nome
                                Attività</label>
                            <div class="col-md-6">
                                <input id="restaurant_name" type="string" name="restaurant_name"
                                    value="{{ old('restaurant_name') }}"
                                    class="form-control input-control 
                                @error('restaurant_name') is-invalid @enderror box_shadow_stroke">
                                <div class="error"></div>
                                @error('restaurant_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label">Indirizzo ristorante</label>
                            <div class="col-md-6">
                                <input id="address" type="string" name="address" value="{{ old('address') }}"
                                    class="form-control input-control @error('address') is-invalid @enderror box_shadow_stroke">
                                <div class="error"></div>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label">Numero di
                                telefono</label>
                            <div class="col-md-6">
                                <input id="phone" type="tel" name="phone" value="{{ old('phone') }}"
                                    class="form-control input-control @error('phone') is-invalid @enderror box_shadow_stroke">
                                <div class="error"></div>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="p_iva" class="col-md-4 col-form-label">P.IVA</label>
                            <div class="col-md-6">
                                <input id="p_iva" type="string" name="p_iva" value="{{ old('p_iva') }}"
                                    class="form-control input-control @error('p_iva') is-invalid @enderror box_shadow_stroke">
                                <div class="error"></div>
                                @error('p_iva')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>


                        <?php
                        use App\Category;
                        $categories = Category::orderBy('name', 'asc')->get();
                        ?>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label" for="category">Categorie:</label>
                            <div class="col-md-6">
                                <div class="@error('categories') is-invalid @enderror" id="categories">
                                    @foreach ($categories as $key => $category)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="categories[]"
                                                @if (in_array($category->id, old('categories', []))) checked @endif type="checkbox"
                                                id="category-{{ $category->id }}" value="{{ $category->id }}">
                                            <label class="form-check-label"
                                                for="category-{{ $category->id }}">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <div id="errorCat"></div>
                                </div>

                                @error('categories')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label">
                                Seleziona un'immagine
                            </label>
                            <div class="col-md-6">
                                <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                                    id="image" name="image" value="{{ old('image') }}">
                                <div class="error"></div>
                            </div>
                            @error('image')
                                <div id="image" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="bg_link_color c_text_color box_shadow_stroke_small px-2 py-1 card_button mb-3" id="submitBtn">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script-js')
    <script src={{ asset('js/register.js') }}></script>
@endsection
