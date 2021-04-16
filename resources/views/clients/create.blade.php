@extends('layouts.app')

@section('content')
<style>
    body{
    color: #8e9194;
    background-color: #f4f6f9;
}
.avatar-xl img {
    width: 110px;
}
.rounded-circle {
    border-radius: 50% !important;
}
img {
    vertical-align: middle;
    border-style: none;
}
.text-muted {
    color: #aeb0b4 !important;
}
.text-muted {
    font-weight: 300;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #4d5154;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid #eef0f3;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <h2 class="h3 mb-4 page-title">Settings</h2>
            <div class="my-4">
              
                <form>
				    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                            <div class="avatar avatar-xl">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="..." class="avatar-img rounded-circle" />
								
                            </div>
					
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h1 class="mb-1">Ajouter un Client</h1>
                                   
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <hr class="my-4" />
					
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstname">Prenom*</label>
                            <input type="text"  name="firstname" id="firstname" class="form-control" placeholder="Kaoutar" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">Nom*</label>
                            <input type="text" name="lastname" nalid="lastname" class="form-control" placeholder="Salli" />
                        </div>
                    </div>
								   
					</div>
                    <div class="form-group">
                        <label for="inputEmail4">Email*</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="brown@asher.me" />
                    </div>
                    <div class="form-group">
                        <label for="inputAddress5">Adresse*</label>
                        <input type="text" name="address" class="form-control" id="inputAddress5" placeholder="P.O. Box 464, 5975 Eget Avenue" />
                    </div>
					<div class="form-row">
                     
                        <div class="form-group col-md-6">
							<label for="inputCin">Cin*</label>
                            <input type="text" name="cin" class="form-control" id="inputCin" placeholder="R3762.." />
                        </div>
						<div class="form-group col-md-6">
							
                            <label for="Genre">Genre</label>
							<div class="row">
                            <div class="col-sm-4">
								<label class="radio-inline">
									<input type="radio" name="gender" class="form-check-input" id="femaleRadio" value="Female">Female
								</label>
							</div>
							<div class="col-sm-4">
								<label class="radio-inline">
									<input type="radio" name="gender" class="form-check-input" id="maleRadio" value="Male">Male
								</label>
							</div>
							</div>
						</div>
					</div>
             <div class="form-row">
						<div class="form-group col-md-6">
                            <label for="inputTel">Numero tel*</label>
                            <input type="tel" name="phone" class="form-control" id="inputTel" placeholder="0646792.." />
                        </div>
						<div class="form-group col-md-6">
                            <label for="Numpermi">Numro permi</label>
                            <input type="number" name="num_permis" id="Numpermi" class="form-control" placeholder="28/124.." />
                        </div>
                    </div>
					
                       
                        <div class="form-group ">
                            <label for="Photo">Photo</label>
  								 <input type="file" name="image" class="form-control"   id="photo"  name="fichier">
								  <div class="validation"></div>
							  </div>
                  
				
                    <hr class="my-4" />
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputPassword4">Mot de passe*</label>
                                <input type="password" class="form-control" id="inputPassword5" />
                            </div>
                         
                            <div class="form-group">
                                <label for="inputPassword6">Confirmer Mot de passe*</label>
                                <input type="password" class="form-control" id="inputPassword6" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2">Exigences de mot de passe</p>
                            <p class="small text-muted mb-2">To Créez un nouveau mot de passe, vous devez répondre à toutes les exigences suivantes:</p>
                            <ul class="small text-muted pl-4 mb-0">
								<Li> minimum 8 caractères </ li>
									<Li> au moins un caractère spécial </ li>
									<Li> au moins un nombre </ li>
									<Li> ne peut pas être identique à un mot de passe précédent </ li>
                            </ul>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Entregistrer</button>
                </form>
            </div>
        </div>
    </div>
    
    </div>