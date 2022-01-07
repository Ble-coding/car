@csrf
<div class="row">						
    <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card-header">
                <h3 class="card-title">Forms</h3>
            </div>
        <div class="card-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Immatriculation de la voiture</label>
                            <input type="text" name="immatricule" id="nom" value="{{ old('immatricule') ?? $car->immatricule }}" class="form-control @error('immatricule') is-invalid @enderror"  placeholder="Entrez.....">
                                @error('immatricule')
                                    <div class="invalid-feedback">
                                    {{ $errors->first('immatricule') }}
                                    </div>
                                 @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Marque</label>
                            <input value="{{ old('marque') ?? $car->marque }}" class="form-control @error('marque') is-invalid @enderror" type="text" placeholder="Entrez....." id="marque" name="marque">
                                @error('marque')
                                    <div class="invalid-feedback">
                                         {{ $errors->first('marque') }}
                                    </div>
                                @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Model</label>
                                    <input value="{{ old('genre') ?? $car->genre }}" class="form-control @error('genre') is-invalid @enderror" type="text" placeholder="Entrez....." id="genre" name="genre">
                                        @error('genre')
                                            <div class="invalid-feedback">
                                                  {{ $errors->first('genre') }}
                                            </div>
                                        @enderror
                                </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Couleur</label>
                            <input value="{{ old('couleur') ?? $car->couleur }}" class="form-control @error('couleur') is-invalid @enderror" type="text" placeholder="Entrez....." id="couleur" name="couleur">
                               @error('couleur')
                                    <div class="invalid-feedback">
                                         {{ $errors->first('couleur') }}
                                    </div>
                               @enderror
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Place assise</label>
                            <input value="{{ old('placeassise') ?? $car->placeassise }}" class="form-control @error('placeassise') is-invalid @enderror" placeholder="Entrez....." type="number" id="placeassise" name="placeassise">
                               @error('placeassise')
                                    <div class="invalid-feedback">
                                            {{ $errors->first('placeassise') }}
                                    </div>
                                @enderror
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Cylindre</label>
                            <input value="{{ old('cylindre') ?? $car->cylindre }}" class="form-control @error('cylindre') is-invalid @enderror" placeholder="Entrez....." type="text" id="cylindre" name="cylindre">
                                @error('cylindre')
                                    <div class="invalid-feedback">
                                         {{ $errors->first('cylindre') }}
                                    </div>
                                @enderror
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Image</label>
                            <input type="file" class="block my-2 @error('image') is-invalid @enderror" value="{{ old('image') ?? $car->image }}" 
                                id="image" name="image[]" multiple
                                accept="image/png, image/jpeg">
                                @error('image')
                                    <div class="invalid-feedback">
                                    {{ $errors->first('image') }}
                                    </div>
                                 @enderror
                        </div>
                    </div> 
        </div>
    </div>
</div>				



