<html><head>
<style type="text/css">
.formrdv h2.text-center{
color: #fe3b00;
font-family: arial;
font-weight: inherit;
text-transform: uppercase;	
}

.form-horizontal input.form-control{
border: 0px solid #999999;
background-color: rgba(0, 0, 0, 0);
border-bottom: 1px solid #999999;
color: #ffffff;
line-height: 30px;
margin-top: 5px;
text-transform: uppercase;
width: 100%;	
}

.form-horizontal textarea.form-control{
border: 0px solid #999999;
background-color: rgba(0, 0, 0, 0);
border-bottom: 1px solid #fff;
color: #ffffff;
line-height: 30px;
margin-top: 5px;
text-transform: uppercase;
height: 70px !important;
width: 100%;
}

.form-horizontal .btn-block{
background-color: #fe3b00;
border: 1px solid rgba(0, 0, 0, 0);
color: #ffffff;
cursor: pointer;
display: block;
font-weight: bold;
letter-spacing: 3px;
line-height: 35px;
margin-top: 40px;
width: 100%;

-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}

#demandeRDV{font-size: 10px;}

</style>

</head>
<body>
	<div class="formrdv">
		<div class="white-box contentblock" id="demandeRDV">
			<h2 class="text-center"> Demandez<br>un Rendez-vous Atelier </h2>
			<form novalidate="true" data-toggle="validator" class="form-horizontal" method="post" action="">
			<div class="form-group ">
				<label style="display: none !important;" class="control-label col-sm-12" for="tel">Téléphone <span class="text-danger">*</span> : </label>
				<div class="col-sm-12">
					<input type="text" required="" placeholder="Téléphone" name="rdv[telephone]" class="form-control" id="tel">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div style="display: none !important;">
				<div class="form-group ">
					<label style="display: none !important;" class="control-label col-sm-12" for="mail">E-mail  : </label>
					<div class="col-sm-12">
						<input type="email" placeholder="E-mail" value="webmaster@sggi-maroc.com" name="rdv[email]" class="form-control" id="mail">
			
					</div>
				</div>
			</div>
			<div class="form-group ">
				<label style="display: none !important;" class="control-label col-sm-12" for="name">Nom <span class="text-danger">*</span> : </label>
				<div class="col-sm-12">
					<input type="text" required="" placeholder="Nom" name="rdv[name]" class="form-control" id="name">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group ">
				<label style="display: none !important;" class="control-label col-sm-12" for="name">Date du RDV <span class="text-danger">*</span> : </label>
				<div class="col-sm-12">
					<input type="date" required="" placeholder="Date du RDV" name="rdv[date]" class="form-control" id="name">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group ">
				<label style="display: none !important;" class="control-label col-sm-12" for="name">Heure du RDV <span class="text-danger">*</span> : </label>
				<div class="col-sm-12">
					<input type="time" required="" placeholder="Heure du RDV" name="rdv[heure]" class="form-control" id="name">
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="form-group ">
				<label style="display: none !important;" class="control-label col-sm-12" for="moto">Type Moto <span class="text-danger">*</span> : </label>
				<div class="col-sm-12">
					<input type="text" required="" placeholder="Type Moto" name="rdv[moto]" class="form-control" id="moto">
					<div class="help-block with-errors"></div>
				</div>
			</div>
	
			<div class="form-group">
				<label style="display: none !important;" class="control-label col-sm-12" for="prestation">Type de Préstation Souhaitée <span class="text-danger">*</span> : </label>
				<div class="col-sm-12">
				<textarea placeholder="Type de Préstation Souhaitée" required="" name="rdv[prb]" rows="5" id="prestation" class="form-control "></textarea>
				<div class="help-block with-errors"></div>
				</div>
			</div>	
			<div class="form-actions">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<button name="sendrequest1" class="btn btn-block" type="submit"> ENVOYER </button>
							</div>
						</div>
					</div>
				</div>
			</div>		
			</form>
        </div>
	</div>
		
		
</body></html>