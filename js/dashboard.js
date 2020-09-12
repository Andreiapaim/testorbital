$(function() {
	
	$("#formNumero").submit( function(event){ 
		event.preventDefault(); 
		if ($("#Codigo").val() != '') 
		{
			salvarNumero();
			$("#dlgNumero").modal('hide');
		}
		else 
		{
			criarNumero();
			$("#dlgNumero").modal('hide');
			atualizatabela();
		}

	});

		carregaNumeros();

	});

	function atualizatabela() {
		  setTimeout(
		  function() 
		  {
			$('#Numeros').empty();            
			carregaNumeros();
		  }, 500);
	}

  function carregaNumeros() {
		$.getJSON('getnumeros.php', function(end) { 
			for(i=0;i<end.length;i++) {
			  linha = montarLinha(end[i]);
				//console.log(linha);
				$('#Numeros').append(linha);
			}
		});        
	}


function numberWithPoints(x) {
		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	}

  function montarLinha(p) {
		var linha = "<tr>" +
			"<td>#" + p.Id + "</td>" +
			"<td>" + p.Titulo + "</td>" +
			"<td>" + numberWithPoints(p.Valor) + "</td>" +
			"<td>" + p.Data + "</td>" +
			"<td style='text-align:right;'>" +
			  '<button class="btn btn-sm btn-primary" onclick="editar(' + p.Id + ')"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar </button> ' +
			  '<button class="btn btn-sm btn-danger" onclick="removersn(' + p.Id + ',this)"><i class="fa fa-trash-o" aria-hidden="true"></i> Apagar </button> ' +
			"</td>" +
			"</tr>";
		return linha;
	}


  function novoNumero() {
		$('#Codigo').val('');
		$('#Titulo').val('');
		$('#Valor').val('');
		$('#dlgNumero').modal('show');
	}
		
function criarNumero() {
	obj = { 
		Titulo: $("#Titulo").val(),
		Valor: $("#Valor").val() 
	};
	$.post("setnumeros.php", obj, function(data) {
		//numobj = JSON.parse(data);
		//linha = montarLinha(numobj);
		//$('#Numeros').append(linha);            
	});
}

function editar(id) {
	$.getJSON('getnumeros.php?Id='+id, function(data) { 
		$('#Codigo').val(id);
		$('#Titulo').val(data[0].Titulo);
		$('#Valor').val(data[0].Valor);
		$('#dlgNumero').modal('show');            
	});        
}

function salvarNumero() {
	obj = { 
		Id : $("#Codigo").val(), 
		Titulo: $("#Titulo").val(), 
		Valor: $("#Valor").val()
	};
	$.ajax({
		type: "POST",
		url: "salvar.php",
		context: this,
		data: obj,
		success: function(data) {
			let este = JSON.parse(data);
			linhas = $("#Numeros>tr");
			var e = linhas.filter( function(i, e) {
				return ( e.cells[0].textContent == '#'+este.Id );
			});
			if (e) {
				e[0].cells[0].textContent = '#'+este.Id;
				e[0].cells[1].textContent = este.Titulo;
				e[0].cells[2].textContent = numberWithPoints(este.Valor);
				e[0].cells[3].textContent = este.Data;
			}
		},
		error: function(error) {
			console.log(error);
		}
	});        
}

  function removersn(id,item){

	swal({
			title: "Deseja realmente apagar o registro ?",
			text: "Depois de deletado, você não poderá recuperar esse registro novamente!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
			})
			.then((willDelete) => {
			if (willDelete) {
				removeritem(id,item);
			} else {
				//swal("Your imaginary file is safe!");
			}
			});

	return false;        

	}

	function removeritem(id,item)
	{
	$.ajax({
	type: "GET",
	url: "deletar.php?Id=" + id,
	success: function(data, status) 
	{

	var itemx = $(item).parent().parent();

	itemx.animate({
	left: '250px',
	opacity: '0.5',
	height: '150px',
	width: '150px'
	});

	itemx.slideDown('slow', function (){
	itemx.remove();
	});    

	swal("Deletado com Sucesso!", {icon: "success",timer: 1500});

	},
	error: function(xhr, msg, e) {
	}
	});

	}

