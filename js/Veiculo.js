var cadastro = [];
botao.addEventListener( 'click', function(){
    //
    if (ValidForm()){
        //let aVeiculo = {
        //    //nome: inome.value,
        //    //cpf: icpf.value,
        //    //email: iemail.value
        //};
        cadastro.push( aVeiculo);
        //console.log( cliente);
        //console.log(cadastro;)

        //let linha = '';
        //t_area.value = '';
        //cadastro.forEach( (cliente,item) => {
        //    linha += `Item ${item} - Nome: ${cliente.nome} - CPF: ${cliente.cpf} - e-mail: ${cliente.email} \n`;
        //});
        //console.log( linha);
        //t_area.value = linha;

    }

});


//Validando placa veiculo
iplaca.addEventListener( 'blur', function(){
    let xplaca00 = iplaca.value.trim();
    if( xplaca00 == "") {
        perro1.style.color = 'red';
        perro1.innerHTML = "Preencha a placa do veículo !";
        iplaca.focus();
        xerro = false;        
    } else if (xplaca00.length <8) {
        perro1.style.color = 'red';
        perro1.innerHTML = "Faltando informações na placa !";
        iplaca.focus();
        xerro = false;        
    } else {
        perro1.style.color = 'inherit';
        perro1.innerHTML = "";
        xerro = true;        
    }
                   
});



function ValidForm(){
    let xplaca00 = iplaca.value.trim();
    let xveiculo = iveiculo.value.trim();
    let xcodprop = 0; 
    let xcodmont = 0;
    let xcodtipo = 0;
    let xerro    = true;
    
    if( xplaca00 == "") {
        perro1.style.color = 'red';
        perro1.innerHTML = "Preencha a placa do veículo !";
        iplaca.focus();
        xerro = false;        
    } else if (xplaca00 <8) {
        perro1.style.color = 'red';
        perro1.innerHTML = "Faltando informações na placa !";
        iplaca.focus();
        xerro = false;        
    } else {
        perro1.style.color = 'inherit';
        perro1.innerHTML = "";
        xerro = true;        
    }
    return xerro;
};
