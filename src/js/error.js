(function(){
  const pagina = window.location.pathname;
  let error = pagina.includes("404");

  if(error){
    setTimeout(() => {
      window.location.href=`${window.location.origin}/`;
    }, 5000);
  }
})();