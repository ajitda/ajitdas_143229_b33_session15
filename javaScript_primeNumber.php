<script type="text/javascript">
    var count=1000;
    for(prime=1;prime<=count;prime++){
        for(i=2;i<=prime;i++){
            if(prime%i==0){
                break;
            }
        }
        if(prime==i){
            document.write(num + " <br>");
        }
    }
</script>