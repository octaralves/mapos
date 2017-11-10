<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Cadastro de Cliente</h5>
            </div>
            <div class="widget-content nopadding">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="nomeCliente" class="control-label">Nome<span class="required">*</span></label>
                        <div class="controls">
                            <input onkeyup="caixaAlta()" id="nomeCliente" type="text" name="nomeCliente" value="<?php echo set_value('nomeCliente'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="documento" class="control-label">CPF/CNPJ<span class="required">*</span></label>
                        <div class="controls">
                            <input onchange="javascript: if((validarCPF()==false) && (validarCNPJ()==false)) alert('incorreto');" onKeyDown="javascript: if(event.keyCode==13) event.keyCode=9;" id="documento" type="number" name="documento" value="<?php echo set_value('documento'); ?>  "  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="telefone" class="control-label">Telefone<span class="required">*</span></label>
                        <div class="controls">
                            <input id="telefone" type="text" name="telefone" value="<?php echo set_value('telefone'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="celular" class="control-label">Celular</label>
                        <div class="controls">
                            <input id="celular" type="text" name="celular" value="<?php echo set_value('celular'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="email" class="control-label">Email<span class="required">*</span></label>
                        <div class="controls">
                            <input onkeyup="caixaBaixa()" id="email" type="text" name="email" value="<?php echo set_value('email'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="rua" class="control-label">Rua<span class="required">*</span></label>
                        <div class="controls">
                            <input onkeyup="caixaAlta()" id="rua" type="text" name="rua" value="<?php echo set_value('rua'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="numero" class="control-label">Número<span class="required">*</span></label>
                        <div class="controls">
                            <input id="numero" type="text" name="numero" value="<?php echo set_value('numero'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="bairro" class="control-label">Bairro<span class="required">*</span></label>
                        <div class="controls">
                            <input onkeyup="caixaAlta()" id="bairro" type="text" name="bairro" value="<?php echo set_value('bairro'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cidade" class="control-label">Cidade<span class="required">*</span></label>
                        <div class="controls">
                            <input onkeyup="caixaAlta()" id="cidade" type="text" name="cidade" value="<?php echo set_value('cidade'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="estado" class="control-label">Estado<span class="required">*</span></label>
                        <div class="controls">
                            <input onkeyup="caixaAlta()" id="estado" type="text" name="estado" value="<?php echo set_value('estado'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cep" class="control-label">CEP<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cep" type="text" name="cep" value="<?php echo set_value('cep'); ?>"  />
                        </div>
                    </div>



                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="<?php echo base_url() ?>index.php/clientes" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
           $('#formCliente').validate({
            rules :{
                  nomeCliente:{ required: true},
                  documento:{ required: true},
                  telefone:{ required: true},
                  email:{ required: true},
                  rua:{ required: true},
                  numero:{ required: true},
                  bairro:{ required: true},
                  cidade:{ required: true},
                  estado:{ required: true},
                  cep:{ required: true}
            },
            messages:{
                  nomeCliente :{ required: 'Campo Requerido.'},
                  documento :{ required: 'Campo Requerido.'},
                  telefone:{ required: 'Campo Requerido.'},
                  email:{ required: 'Campo Requerido.'},
                  rua:{ required: 'Campo Requerido.'},
                  numero:{ required: 'Campo Requerido.'},
                  bairro:{ required: 'Campo Requerido.'},
                  cidade:{ required: 'Campo Requerido.'},
                  estado:{ required: 'Campo Requerido.'},
                  cep:{ required: 'Campo Requerido.'}

            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight:function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
           });
      });
    function caixaAlta() {
		 var x = document.getElementById("nomeCliente");
		 x.value = x.value.toUpperCase();
		 var x = document.getElementById("rua");
		 x.value = x.value.toUpperCase();
		 var x = document.getElementById("bairro");
		 x.value = x.value.toUpperCase();
		 var x = document.getElementById("cidade");
		 x.value = x.value.toUpperCase();
		 var x = document.getElementById("estado");
		 x.value = x.value.toUpperCase();
	 }
	 
	function caixaBaixa() {
		 var x = document.getElementById("email");
		 x.value = x.value.toLowerCase();
	 }
	 
	function validarCPF(documento) {
		//alert(documento);
		var x = document.getElementById("documento");
		documento = x.value;
		
		var Soma;
		var Resto;
		Soma = 0;
		if (documento == "00000000000") return false;
		
		for (i=1; i<=9; i++) Soma = Soma + parseInt(documento.substring(i-1, i)) * (11 - i);
		Resto = (Soma * 10) % 11;
		
		if ((Resto == 10) || (Resto == 11))  Resto = 0;
		if (Resto != parseInt(documento.substring(9, 10)) ) return false;
		
		Soma = 0;
		for (i = 1; i <= 10; i++) Soma = Soma + parseInt(documento.substring(i-1, i)) * (12 - i);
		Resto = (Soma * 10) % 11;
		
		if ((Resto == 10) || (Resto == 11))  Resto = 0;
		if (Resto != parseInt(documento.substring(10, 11) ) ) return false;
		return true;
		
	}

	function validarCNPJ(documento) {
		
		var x = document.getElementById("documento");
		documento = x.value;
		//alert(document.getElementById("documento").value);
		//eliminamos todos os caracteres não númericos do CNPJ passado como parâmetro
		documento = documento.replace(/[^\d]+/g,'');
	 
		if(documento == '') return false;
		 
		if (documento.length != 14)
			return false;
	 
		// Elimina CNPJs invalidos conhecidos
		if (documento == "00000000000000" || 
			documento == "11111111111111" || 
			documento == "22222222222222" || 
			documento == "33333333333333" || 
			documento == "44444444444444" || 
			documento == "55555555555555" || 
			documento == "66666666666666" || 
			documento == "77777777777777" || 
			documento == "88888888888888" || 
			documento == "99999999999999")
			return false;
			 
		// Valida DVs
		tamanho = documento.length - 2
		numeros = documento.substring(0,tamanho);
		digitos = documento.substring(tamanho);
		soma = 0;
		pos = tamanho - 7;
		for (i = tamanho; i >= 1; i--) {
		  soma += numeros.charAt(tamanho - i) * pos--;
		  if (pos < 2)
				pos = 9;
		}
		resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
		if (resultado != digitos.charAt(0))
			return false;
			 
		tamanho = tamanho + 1;
		numeros = documento.substring(0,tamanho);
		soma = 0;
		pos = tamanho - 7;
		for (i = tamanho; i >= 1; i--) {
		  soma += numeros.charAt(tamanho - i) * pos--;
		  if (pos < 2)
				pos = 9;
		}
		resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
		if (resultado != digitos.charAt(1))
			  return false;
			   
		return true;
    
	}
</script>




