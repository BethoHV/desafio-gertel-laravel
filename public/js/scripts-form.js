
$(document).ready(function(){
    $('#cpf').inputmask('999.999.999-99');
  });
  
  
  $(document).ready(function(){
      $('#cep').inputmask('99999-999');
  });
  
  
  (function () {
      'use strict'
    
      var forms = document.querySelectorAll('.needs-validation')
      var validateGroup = document.getElementsByClassName('validate-me');
  
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
  
            let custom = customValidation(form);
  
            if (form.checkValidity() === false && !custom) {
              event.preventDefault();
              event.stopPropagation();
            }else{
              const formData = new FormData(event.target);
              const data = {};
              formData.forEach((value, key) => {
                console.log(key)
                  data[key] = value;
              });
            }
  
            for (var i = 0; i < validateGroup.length; i++) {
              validateGroup[i].classList.add('was-validated');
          }
          }, false)
        });
  
        function customValidation(form) {
          var cpfInput = form.querySelector('#cpf').value.replace(/[.\-_]/g, '');
          var dateInput = form.querySelector('#data_nascimento').value;
  
          if (cpfInput.length < 11) {
            return false;
          }
  
          if(dateInput >= '2000-01-01'){
            return false;
          }
  
           return true;
        }
    })();
  
  
    function consultaCEP() {
  
      var cep = document.getElementById("cep").value;
      var url = "https://viacep.com.br/ws/" + cep + "/json/";
  
      var xhr = new XMLHttpRequest();
      xhr.open("GET", url, true);
  
      xhr.onreadystatechange = function() {
          if (xhr.readyState == 4 && xhr.status == 200) {
              var response = JSON.parse(xhr.responseText);
              console.log(response);
              if(!response.erro){
                document.getElementById("logradouro").value = response.logradouro;
                document.getElementById("bairro").value = response.bairro;
                document.getElementById("cidade").value = response.localidade;
                document.getElementById("estado").value = response.uf;
              }else{
                document.getElementById("logradouro").value = '';
                document.getElementById("bairro").value = '';
                document.getElementById("cidade").value = '';
                document.getElementById("estado").value = '';
                document.getElementById("cep").classList.add("is-invalid");
              }
              
          }
      }
      xhr.send();
  
    }
  
  function limitarAno(event) {
    const input = event.target;
    const valor = input.value;
    const partesData = valor.split("-");
    if (partesData.length === 3 && partesData[0].length > 4) {
        input.value = partesData[0].slice(0, 4) + "-" + partesData[1] + "-" + partesData[2];
    }
  }
  
  
  
  fetch('https://viacep.com.br/ws/01001000/json/', {
      mode: 'no-cors'
  });
  
  
  
  