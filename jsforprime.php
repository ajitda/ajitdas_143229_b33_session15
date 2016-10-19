<script type="text/javascript">
  /*  for(i=2;i<=100;i++){
        if(primeNumber(i)){
            document.write(i + " ");
        }
    }*/
  var number = 31;
  if(primeNumber(number)){
     document.write(number + " is prime");
  }else{
      document.write(number + " is not prime");
  }
function primeNumber(num){

    for(j=2; j<=(num/2);j++){
        if(num % j==0){
            return false;
        }
    }
    return true;
}

</script>