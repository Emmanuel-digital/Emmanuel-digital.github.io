
(function () {
  var forms = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
function collap(){
    if(document.getElementById("suite2").style.display == "none"){
        document.getElementById("suite2").style.display = "flex";
        document.getElementById("suite").style.display = "none";
    }
    else{
        document.getElementById("suite2").style.display = "none";
        document.getElementById("suite").style.display = "flex";
    }
}
var i;
i = 0;
function process()
{
i ++;
  document.getElementById("pro").style.display="flex";
  document.getElementById("subpro").style.width = i+"%";
  document.getElementById("subpro").innerHTML = i+"%";
  if(i<99){
    chtime();
  }else
  {
    i=99;
  }


}
function chtime(){
  setInterval(process,1000)
}