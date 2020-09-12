<?php

if ($_COOKIE['GUID'] != null)
{


}
else {
	
	header('Location: /index.php');
}

?>	

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
        <title>Sistema Experimental - Orbital</title>
        <meta name="Description" content="Sistema Experimental Orbital">
        <meta name="Keywords" content="sistema, experimental, orbital">		
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
		<link rel="stylesheet" href="../css/estilos.css" type="text/css" media="screen">		
		</head>
	<body>

	<div class="container-fluid">

		<header>
			<div id="rodape" class="row">
				<div class="col-md-12">
					<a href="/index.php"><img height="86" style="margin:2px 0;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAA0lBMVEX///+exv8bOGRkjMydxf8YNWFhicqhyf/7/f/K4P/S1t0dPmunzv9eeqWbwvs8V3292P98pOErSHRxmtmUvPNcfK2QuPO0x+Xz9PZ3ntwIK1oRMV9IYIN+puQmQ3Co0f+AptVpjb7J1uxulM9HZZPe5vWTuekAI1fHz9p6n8+LseWstMPk7/9bg8XI3fq5wc1abIo8Wofw9v/Z6f8wSG/e4uhmh7h1hZ6Bj6WRnrKfqrwAHFQALmJGW35VaIcAJVNufZhif6eu2P90l8Kbw+16kbKq0rQyAAAHC0lEQVR4nO3de1/aSBQGYBMTJ1xExEtToly21ArSqqCtuLt1W7vf/yttBtQlc0lmEk5E+r7/JkKe34QccmaCW1sIgiAIgiAIgiBIebm/2SPJ4MtryxYJ7mtR5K86kR91RmwtiOHFje8SxO/0uh6bvjYvHsGLm4gE6D7WPcepj4X3C//Q5SOR8JIG6Pp95vB0J8n3+/hBl3cUvGDrnAgYHbGF0GkGgnBbExLhVtUlAg4Y8xZCr/mawupfJBcZN7p+HkFOTFxQyxVWqU7R1lndexE6jeULaqnC6gnRRaYzWgbGWbpMlimsXhEBa0MBuFwzShTeUgH9RyYAl2tGecLwiuYi40ZfmejjNeOZWJow+E4zgm77SAV0nC9BycK9Ng2QF0KlsPFELEkY/kMFvD6rK4EvNaMcYfiN6BSNWiMdMM64NGF4R+OL7yfSgE59UpIwvKsRASOpECbDa0YJwnBWo6kTftSXC2EiLK4ZJQhnRHXQbSsLYTLNgF44+0QE/P+OMCWNKbnw/k8q4OAs4xxdnKjvPuxQCoMLojLh+vpCKIziAaUwuOhQfRlNLYSJQTzUDeIKhAFR35BfRsU7wjTitppYXBhQtdVcvz00HME58ZhKSNVWc92HvvEIzomnSmJhYZWo0PMbJosRnBP3VcSiQqq2WnyO2gJj4vvVC6stsjphVgiTQlXNKCas/k0FjK7NL6NLREXNKCSsfic7RVt5gPyCutIxvKXqOsWFsJcLqKoZBYR0QPdh2M0HVNSM/MKQqq0WA7/mBso1I7cwPCHqOvEbpgJAXjN2ViEMr8iA/u6vAj6pZuQUht/oRjAuhIWEvGYUFoZ3ZBeZuBAaVHrPS9snUTNyCcn6hmaFkPMYS1Oy0U4hYThz6Yawl/lt1HOa00mccYVpjez0c35hEMzIyoT7qZ91GfW85uRpNiaYVPTElwtqDiFZW413Dn9mAVliJc1Ye0q/EO2F93TA6CjrM+iJS4Umur94qRm2wuCCEDjILBPycq+x7m/Y4YJoKQwuyHwmrVFPWCfEU9Gep8c5xpCurcZbo6PsSi8uZ+PH5GiJI3vhJSGwY1AnuqqDaurLIr/PsBKe0wFdk86hV1Ed1VR/avMLqo3wnKytxjuHBvcTnnJZ6STlD9nBjoWQrm/IO4dZhXAuVHwM0z6IsdCxWH1JCYw0a0kKCz12bCys7tF9V4sGh0adQ/uz1FlaVJQFJGurWdwRWl9peJiihqqAdF0ns0K4EHZVB6uvFk/ELwZEwraa69csOoeqip96MzxP9sp+qvWG80TDrqnP7lvbUrLW699+J2vKxHWibw5UfRIzPoVPSb/aELbVeCG0ATrSsyRjs+mbepgGpFqOx8MLoVVvNCYunajB1PQj3NQTyZbjzYH2U2ie0xw/dzF4p8bwz/Q1g7BvOF9UaT1HyIexWZmOx9NKU9+JUkRTMwj7hrwQ9vL1fmOXwUIpIcqnwYLzK0Igf4apUWKY6lstYVNm/l3GKRHoNCqK87TaoRT+sCoUxaMUEi2KXQh3rRdbFIoHIYQQQgghhBBCCCGEEEIIIYQQQrgpQumHtzZO2GkJUR95TYiNUGoBWu+h354p9DvDUW+0nN5AHkW/9qM3TKQ30Ex8yEJ2eiDkVGxtZ+2Rsj1b2GLdejJHCmGnl9yL/ewbC533O0IOBCHbl/dIzF0cCJs/v7cRSgsmjuRjj4XJvRpdG6HwvIskdMQH8CSh+AqFhEw9hsnj9qyE8vHbCsXtlsLkuzH1GG6UcPPHEEIIIYQQQtRDjCGEEEIIYRlCVAsIIYQQQgh/Q2GdJaOrh8v7OG9H6HaGZ6NklPMWj7/OEvm1m3/e4oPJvMWykO0XmLdwfbNZJWmGSjf5tHZzT6bzh/L/97EQCh8DxUMVWXvot2MOGEIIIYQQQgghhBBCCCGEEEIIIYQQQgghfEtCT0jmDtIe+u0rEkafpOh+hUkhZMLMSD2z4SvukbJ9NcL2yezyPJHLme4/dyrmLY5Pk9k/FokZe6S9wkqED3eKn9S61fxYmGru6bPwtIQ89yTvkZx7ErfbzD0ZjOCV/BJxQvUort3zFq4fiRHmXPx2VSnU/BjT+s0f1r72hVwnidGN5mffQl91tVk7YfYccPtEJ+y8FaH4dsI8/iYI05972gRh8t0ghBDCdRBuerX4HcYQQgghhBBC1EOMIYQQQgjhmxRuS8dvKxRfYb3qIXvdrn4ZY9g4FiI/TpGxR8p2a6FH0C8V58ayH6cQ90jZnqvnvWph9gxp5h4FZkj91ogdJrO76u+lpDGYXbseCGmtfAxfWZj1RNPbF2YFQgghhBBCCCGEEEIIIcwpVNxPaOM+nCheYi6stRX7R7t1acUvaZTCPZvcXFU1OblR7f9vpVlqppoBQBAEQRAEQRAEQdT5D4e6EabTNp1iAAAAAElFTkSuQmCC"/></a>
					<a href="fecharsessao.php" class="btn btn-secondary" style="float:right;margin:30px 0;">LOGOUT</a>
				</div>
			</div>
		</header>

		<section>
			<div id="entrada" class="row">
				<div class="col-md-12">
					<div id="areanumeros">
						<div class="col-md-12">
							<div class="row" style="border-bottom: 1px solid black;">
								<div class="col-md-8">
								<h2 style='font-weight: bold;font-size: 18px;line-height: 40px; padding: 0; margin:0;'>Gestão de Números</h2>
								</div>
								<div class="col-md-4" style="text-align:right">
								<a href="#" id="novo" onClick="novoNumero()" class="btn btn-secondary">Novo Número</a>
								</div>
								<hr>
								
								<table class="table table-striped">
									<thead>
									  <tr>
										<th>ID</th>
										<th>TÍTULO</th>
										<th>VALOR</th>
										<th>DATA/HORA</th>
										<th style="text-align:right">AÇÕES</th>
									  </tr>
									</thead>
									<tbody id="Numeros">
 
 
									</tbody>
								  </table>								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
		</footer>

	</div>


<div class="modal" tabindex="-1" role="dialog" id="dlgNumero">
    <div class="modal-dialog" role="document"> 
        <div class="modal-content">
            <form class="form-horizontal" autocomplete="off" id="formNumero">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Número</h5>
                </div>
                <div class="modal-body">
  
                    <input type="hidden" id="Codigo" class="form-control">
  
                    <div class="form-group">
                      <label for="nomeProduto" class="control-label" style="color:#000">Título</label>
                      <div class="input-group">
                          <input type="text" class="form-control" id="Titulo" maxlength="100" placeholder="Título">
                      </div>
                    </div>
    
                    <div class="form-group">
                        <label for="nomeProduto" class="control-label" style="color:#000">Valor</label>
                        <div class="input-group">
                            <input type="Number" class="form-control" id="Valor" maxlength="10" placeholder="Valor" required>
                        </div>
                    </div>
  
  
               </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
  </div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>		
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="../js/dashboard.js"></script>
		
	</body>
</html>
</html>